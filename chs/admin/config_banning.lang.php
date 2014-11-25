<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: config_banning.lang.php 4304 2009-01-02 01:11:56Z MyBB中文化团队 $
 */
 
$l['banning'] = "封禁系统";
$l['banned_ips'] = "被禁止的IP";
$l['banned_ips_desc'] = "这里您可以管理被禁止访问您的论坛的IP地址。";
$l['banned_accounts'] = "被禁止的帐号";
$l['disallowed_usernames'] = "不允许的用户名";
$l['disallowed_usernames_desc'] = "这里您可以管理一个不能被用户使用或注册的用户名列表。这个特性同样可以用来保留用户名。";
$l['disallowed_email_addresses'] = "不允许使用的Email地址";
$l['disallowed_email_addresses_desc'] = "这里您可以管理一个不允许用户使用或注册的Email地址列表。";

$l['banned_ip_addresses'] = "被禁止的IP地址";
$l['username'] = "用户名";
$l['date_disallowed'] = "被禁止的日期";
$l['last_attempted_use'] = "最近一次试图使用";
$l['email_address'] = "Email地址";
$l['ip_address'] = "IP地址";
$l['ban_date'] = "禁止日期";
$l['last_access'] = "最近访问";
$l['no_bans'] = "目前还没有被禁止的。";
$l['add_disallowed_username'] = "增加一个不被允许的用户名";
$l['username_desc'] = "注意：要指定通配符，请使用“*”";
$l['disallow_username'] = "不允许的用户名";
$l['add_disallowed_email_address'] = "增加一个不被允许的Email地址";
$l['email_address_desc'] = "注意：要指定通配符，请使用“*”";
$l['disallow_email_address'] = "不允许的Email地址";
$l['ban_ip_address'] = "禁止一个IP地址";
$l['ip_address_desc'] = "注意：要禁止一个IP地址范围请使用“*”（例如: 127.0.0.*）";
$l['ban_ip_address'] = "封禁IP地址";

$l['error_missing_ban_input'] = "您没有为这个禁止规则指定一个值。";
$l['error_invalid_filter'] = "指定的过滤器不存在。";

$l['success_ip_banned'] = "该IP地址已成功被禁止。";
$l['success_username_disallowed'] = "该用户名已成功被禁止。";
$l['success_email_disallowed'] = "该Email地址已成功被禁止。";
$l['success_ban_deleted'] = "指定的封禁规则已经成功删除。";

$l['confirm_ban_deletion'] = "您确定要删除这条封禁？";

?>