<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.com
 * License: http://mybb.com/about/license
 *
 * $Id: upgrade15.php 5016 2010-06-12 00:24:02Z RyanGordon $
 */

/**
 * Upgrade Script: 1.4.4
 */


$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade15_dbchanges()
{
	global $db, $output, $mybb, $cache;

	$output->print_header("执行查询");

	echo "<p>执行必要的升级查询..</p>";
	flush();
	
	if($db->type != "pgsql")
	{
		$db->update_query("settinggroups", array('isdefault' => '1'), "isdefault='yes'");
		$db->update_query("settinggroups", array('isdefault' => '0'), "isdefault='no'");
		
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."events CHANGE timezone timezone varchar(4) NOT NULL default '0'");
	}
	
	if($db->type == "pgsql")
	{
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."warnings ALTER COLUMN revokereason SET default ''");
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."warnings ALTER COLUMN notes SET default ''");
	}
	
	$cache->update("internal_settings", array('encryption_key' => random_str(32)));
	
	if($db->type != "sqlite")
	{
		$ip_index = $db->index_exists("sessions", "ip");

		if($ip_index == false)
		{
			if($db->type == "pgsql")
			{
				$db->write_query("CREATE INDEX ip ON ".TABLE_PREFIX."sessions (ip)");
			}
			else
			{
				$db->write_query("ALTER TABLE ".TABLE_PREFIX."sessions ADD INDEX (`ip`)");
			}
		}
	}
	
	$contents .= "请点击下一步继续进行升级过程。</p>";
	$output->print_contents($contents);
	$output->print_footer("15_usernameverify");
}

function upgrade15_usernameverify()
{
	global $db, $output, $mybb;

	$output->print_header("执行查询");

	echo "<p><span style=\"font-size: xx-large\">警告 - 	请阅读如下内容:</span> 接下来的过程将把您论坛中<strong>所有</strong>包含逗号(,)的 <i>用户名</i> 中的逗号(,)移除。做此项改变的原因是用户名中的逗号会导致发送私人短消息时出现问题。为了使您论坛按照此方式修改过用户名的用户能够正常登陆，请在明显的地方放置相应公告进行说明。</p>";
	flush();
	
	$contents .= "当您阅读了警告之后，请点击下一步继续进行升级过程。</p>";
	$output->print_contents($contents);
	$output->print_footer("15_usernameupdate");
}

function upgrade15_usernameupdate()
{
	global $db, $output, $mybb;

	$output->print_header("执行查询");

	echo "<p>更新用户名..</p>";
	flush();
	
	require_once MYBB_ROOT."inc/datahandler.php";
	require_once MYBB_ROOT."inc/datahandlers/user.php";
	
	$not_renameable = array();
	
	// Because commas can cause some problems with private message sending in usernames we have to remove them
	$query = $db->simple_select("users", "uid, username", "username LIKE '%,%'");
	while($user = $db->fetch_array($query))
	{
		$prefix = '';
		$userhandler = new UserDataHandler('update');
		
		do
		{
			$username = str_replace(',', '', $user['username']).'_'.$prefix;
			
			$updated_user = array(
				"uid" => $user['uid'],
				"username" => $username
			);
			$userhandler->set_data($updated_user);
			
			++$prefix;
		}
		while(!$userhandler->verify_username() || $userhandler->verify_username_exists());
		
		if(!$userhandler->validate_user())
		{
			$not_renameable[] = htmlspecialchars_uni($user['username']);
		}
		else
		{
			$db->update_query("users", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("posts", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("threads", array('username' => $db->escape_string($username)), "uid='{$user['uid']}'");
			$db->update_query("threads", array('lastposter' => $db->escape_string($username)), "lastposteruid='{$user['uid']}'");
			$db->update_query("forums", array('lastposter' => $db->escape_string($username)), "lastposteruid='{$user['uid']}'");
			
			update_stats(array("numusers" => "+0"));
		}
	}
	
	if(!empty($not_renameable))
	{
		echo "<span style=\"color: red;\">注意:</span> 以下用户无法自动重命名。请记录并在升级过程结束后登陆后台手动重命名这些用户名：<br />
		<ul>
		<li>";
		echo implode('</li>\n<li>', $not_renameable);
		echo "</li>
		</ul>";
	}
	
	$contents .= "请点击下一步继续进行升级过程。</p>";
	$output->print_contents($contents);
	$output->print_footer("15_done");
}

?>