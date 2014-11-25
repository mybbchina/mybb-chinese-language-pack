<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: user_banning.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

// Tabs
$l['banning'] = "禁用";
$l['banned_accounts'] = "被禁止的帐号";
$l['banned_accounts_desc'] = "这里可以管理禁止访问论坛的用户。";
$l['ban_a_user'] = "封禁一个用户";
$l['ban_a_user_desc'] = "这里可以封禁一个用户。";
$l['edit_ban'] = "编辑";
$l['edit_ban_desc'] = "这里可以修改目前禁止用户的原因和时长。";
$l['banned_ips'] = "被禁止的IP";
$l['disallowed_usernames'] = "不允许的用户名";
$l['disallowed_email_addresses'] = "不允许使用的Email地址";

// Errors
$l['error_invalid_ban'] = "您选择了一个无效的封禁编辑。";
$l['error_invalid_username'] = "输入的用户名无效或不存在。";
$l['error_no_perm_to_ban'] = "您没有权限封禁该用户。";
$l['error_already_banned'] = "这个用户已经属于封禁用户组。";
$l['error_ban_self'] = "无法封禁自己。";
$l['error_no_reason'] = "没有输入原因。";

// Success
$l['success_ban_lifted'] = "成功解除。";
$l['success_banned'] = "选定的用户封禁成功。";
$l['success_ban_updated'] = "更新成功。";
$l['success_pruned'] = "选择的用户的主题和帖子已经修剪成功。";

// Confirm
$l['confirm_lift_ban'] = "确定解除?";
$l['confirm_prune'] = "确定要修剪该用户发表的主题和帖子?";

//== Pages
//= Add / Edit
$l['ban_username'] = "用户名 <em>*</em>";
$l['autocomplete_enabled'] = "这个字段禁止了自动完成功能。";
$l['ban_reason'] = "原因";
$l['ban_group'] = "被禁止的组 <em>*</em>";
$l['ban_group_desc'] = "为了禁用该用户，他将被移动到封禁用户组。";
$l['ban_time'] = "封禁时长 <em>*</em>";

//= Index
$l['user'] = "用户";
$l['moderation'] = "版主";
$l['ban_lifts_on'] = "封禁解除于";
$l['time_left'] = "剩余时间";
$l['permenantly'] = "永久";
$l['na'] = "N/A";
$l['for'] = "for";
$l['bannedby_x_on_x'] = "<strong>{1}</strong><br /><small>被 {2} 封禁，在 {3} {4}</small>";
$l['lift'] = "解除";
$l['no_banned_users'] = "没有禁止用户。";
$l['prune_threads_and_posts'] = "修剪主题 &amp; 帖子";

// Buttons
$l['ban_user'] = "封禁用户";
$l['update_ban'] = "更新";

?>