<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.com
 * License: http://mybb.com/about/license
 *
 * $Id: upgrade18.php 5265 2010-11-09 00:42:55Z Tomm $
 */

/**
 * Upgrade Script: 1.6.0
 */

$upgrade_detail = array(
	"revert_all_templates" => 0,
	"revert_all_themes" => 0,
	"revert_all_settings" => 0
);

@set_time_limit(0);

function upgrade18_dbchanges()
{
	global $db, $output, $mybb;

	$output->print_header("执行查询");

	echo "<p>执行必要的升级查询...</p>";

	// Update the usergroup sequence for pgSQL - #1094
	if($mybb->config['database']['type'] == "pgsql")
	{
		$query = $db->simple_select("usergroups", "COUNT(gid) AS group_count");
		$group_count = $db->fetch_field($query, "group_count");

		++$group_count;
		$db->query("ALTER SEQUENCE ".$config['database']['table_prefix']."usergroups_gid_seq RESTART WITH ".$group_count."");
	}

	$output->print_contents("<p>点击下一步继续升级过程。</p>");
	$output->print_footer("18_updatecache");
}

function upgrade18_updatecache()
{
	global $cache, $output;

	$output->print_header("更新缓存");

	echo "<p>更新缓存...</p>";

	// Update the Moderator cache - #1200
	$cache->update_moderators();

	$output->print_contents("<p>点击下一步继续升级过程。</p>");
 	$output->print_footer("18_done");
}
?>