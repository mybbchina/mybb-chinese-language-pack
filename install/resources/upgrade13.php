<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.com
 * License: http://mybb.com/about/license
 *
 * $Id: upgrade13.php 5016 2010-06-12 00:24:02Z RyanGordon $
 */

/**
 * Upgrade Script: 1.4 or 1.4.1
 */


$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade13_dbchanges()
{
	global $db, $output, $mybb;

	$output->print_header("执行查询");

	echo "<p>执行必要的升级查询..</p>";
	flush();

	if($db->type == "mysql" || $db->type == "mysqli")
	{
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."adminsessions ADD INDEX ( `uid` )");
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."adminsessions ADD INDEX ( `dateline` )");
	}
	
	if($db->type != "sqlite")
	{
		if($db->index_exists("users", "username"))
		{
			$db->write_query("ALTER TABLE ".TABLE_PREFIX."users DROP KEY username");
		}
		
		$query = $db->simple_select("users", "username, uid", "1=1 GROUP BY username HAVING count(*) > 1");
		while($user = $db->fetch_array($query))
		{
			$db->update_query("users", array('username' => $user['username']."_dup".$user['uid']), "uid='{$user['uid']}'", 1);
		}
		
		if($db->type == "pgsql")
		{
			$db->write_query("ALTER TABLE ".TABLE_PREFIX."users ADD UNIQUE(username)");
		}
		else
		{
			$db->write_query("ALTER TABLE ".TABLE_PREFIX."users ADD UNIQUE KEY username (username)");
		}
	}
	
	if($db->type == "pgsql")
	{
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."users CHANGE longregip longregip int NOT NULL default '0'");
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."users CHANGE longlastip longlastip int NOT NULL default '0'");
	
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."posts CHANGE longipaddress longipaddress int NOT NULL default '0'");
	}
	else
	{
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."users CHANGE longregip longregip int(11) NOT NULL default '0'");
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."users CHANGE longlastip longlastip int(11) NOT NULL default '0'");
	
		$db->write_query("ALTER TABLE ".TABLE_PREFIX."posts CHANGE longipaddress longipaddress int(11) NOT NULL default '0'");
	}

	$contents .= "点击下一步继续升级过程。</p>";
	$output->print_contents($contents);
	$output->print_footer("13_dbchanges1");
}

function upgrade13_dbchanges1()
{
	global $db, $output;
	
	$output->print_header("发帖IP修复转换");

	if(!$_POST['ipspage'])
	{
		$ipp = 5000;
	}
	else
	{
		$ipp = $_POST['ipspage'];
	}

	if($_POST['ipstart'])
	{
		$startat = $_POST['ipstart'];
		$upper = $startat+$ipp;
		$lower = $startat;
	}
	else
	{
		$startat = 0;
		$upper = $ipp;
		$lower = 1;
	}

	$query = $db->simple_select("posts", "COUNT(pid) AS ipcount");
	$cnt = $db->fetch_array($query);
	
	if($upper > $cnt['ipcount'])
	{
		$upper = $cnt['ipcount'];
	}

	echo "<p>修复IP {$lower} 到 {$upper} (共 {$cnt['ipcount']})</p>";
	flush();
	
	$ipaddress = false;
	
	$query = $db->simple_select("posts", "ipaddress, longipaddress, pid", "", array('limit_start' => $lower, 'limit' => $ipp));
	while($post = $db->fetch_array($query))
	{
		// Have we already converted this ip?
		if(my_ip2long($post['ipaddress']) < 0)
		{
			$db->update_query("posts", array('longipaddress' => my_ip2long($post['ipaddress'])), "pid = '{$post['pid']}'");
		}
		$ipaddress = true;
	}
	
	$remaining = $upper-$cnt['ipcount'];
	if($remaining && $ipaddress)
	{
		$nextact = "13_dbchanges1";
		$startat = $startat+$ipp;
		$contents = "<p><input type=\"hidden\" name=\"ipspage\" value=\"$ipp\" /><input type=\"hidden\" name=\"ipstart\" value=\"$startat\" />完成。点击下一步转换下一组IP。</p>";
	}
	else
	{
		$nextact = "13_dbchanges2";
		$contents = "<p>完成</p><p>所有IP成功转换为新格式，单击下一步继续。</p>";
	}
	$output->print_contents($contents);

	global $footer_extra;
	$footer_extra = "<script type=\"text/javascript\">window.onload = function() { var button = $$('.submit_button'); if(button[0]) { button[0].value = '自动进行...'; button[0].disabled = true; button[0].style.color = '#aaa'; button[0].style.borderColor = '#aaa'; document.forms[0].submit(); }}</script>";

	$output->print_footer($nextact);
}

function upgrade13_dbchanges2()
{
	global $db, $output;
	
	$output->print_header("用户IP修复转换");

	if(!$_POST['ipspage'])
	{
		$ipp = 5000;
	}
	else
	{
		$ipp = $_POST['ipspage'];
	}

	if($_POST['ipstart'])
	{
		$startat = $_POST['ipstart'];
		$upper = $startat+$ipp;
		$lower = $startat;
	}
	else
	{
		$startat = 0;
		$upper = $ipp;
		$lower = 1;
	}

	$query = $db->simple_select("users", "COUNT(uid) AS ipcount");
	$cnt = $db->fetch_array($query);
	
	if($upper > $cnt['ipcount'])
	{
		$upper = $cnt['ipcount'];
	}

	$contents .= "<p>修复IP {$lower} 到 {$upper} (共 {$cnt['ipcount']})</p>";
	
	$ipaddress = false;
	$update_array = array();
	
	$query = $db->simple_select("users", "regip, lastip, longlastip, longregip, uid", "", array('limit_start' => $lower, 'limit' => $ipp));
	while($user = $db->fetch_array($query))
	{
		// Have we already converted this ip?
		if(my_ip2long($user['regip']) < 0)
		{
			$update_array['longregip'] = intval(my_ip2long($user['regip']));
		}
		
		if(my_ip2long($user['lastip']) < 0)
		{
			$update_array['longlastip'] = intval(my_ip2long($user['lastip']));
		}
		
		if(!empty($update_array))
		{
			$db->update_query("users", $update_array, "uid = '{$user['uid']}'");
		}
		
		$update_array = array();
		$ipaddress = true;
	}

	$remaining = $upper-$cnt['ipcount'];
	if($remaining && $ipaddress)
	{
		$nextact = "13_dbchanges2";
		$startat = $startat+$ipp;
		$contents .= "<p><input type=\"hidden\" name=\"ipspage\" value=\"$ipp\" /><input type=\"hidden\" name=\"ipstart\" value=\"$startat\" />完成。单击下一步修复下一组IP</p>";
	}
	else
	{
		$nextact = "13_done";
		$contents .= "<p>完成</p><p>所有用户IP成功转换为新格式，单击下一步继续。</p>";
	}
	$output->print_contents($contents);

	global $footer_extra;
	$footer_extra = "<script type=\"text/javascript\">window.onload = function() { var button = $$('.submit_button'); if(button[0]) { button[0].value = '自动进行...'; button[0].disabled = true; button[0].style.color = '#aaa'; button[0].style.borderColor = '#aaa'; document.forms[0].submit(); }}</script>";

	$output->print_footer($nextact);	
}

?>