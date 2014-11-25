<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: user_admin_permissions.lang.php 4304 2009-01-02 01:11:56Z MyBB中文化团队 $
 */

$l['admin_permissions'] = "管理员权限";
$l['user_permissions'] = "用户权限";
$l['user_permissions_desc'] = "这里您可以管理管理员的权限，包括可以控制每个管理员使用不同的后台控制功能。";
$l['group_permissions'] = "组权限";
$l['group_permissions_desc'] = "管理员权限也可以应用于具有访问管理员控制面板权限的组。当然也可以控制每个组使用不同的后台控制功能。";
$l['default_permissions'] = "预设权限";
$l['default_permissions_desc'] = "预设权限适用于那些没有自定义管理员权限或没有继承管理员组权限的用户。";

$l['admin_permissions_updated'] = "权限更新成功。";
$l['revoke_permissions'] = "撤销权限";
$l['edit_permissions'] = "编辑权限";
$l['set_permissions'] = "设置权限";
$l['edit_permissions_desc'] = "这里您可以限制允许进入的标签或个人页面。但是 \"主页\" 标签是所有管理员都可以访问的。";
$l['update_permissions'] = "更新权限";
$l['view_log'] = "查看日志";
$l['permissions_type_group'] = "组权限类型";
$l['permissions_type_user'] = "用户权限类型";
$l['no_group_perms'] = "目前没有设置组权限。";
$l['no_user_perms'] = "目前没有设置用户权限。";
$l['edit_user'] = "编辑用户个人资料";
$l['using_individual_perms'] = "使用个人权限";
$l['using_custom_perms'] = "使用自定义权限";
$l['using_group_perms'] = "使用组权限";
$l['using_default_perms'] = "使用预设权限";
$l['last_active'] = "最后活动";
$l['user'] = "用户";
$l['edit_group'] = "编辑组";
$l['default'] = "默认";
$l['group'] = "组";

$l['error_delete_super_admin'] = '抱歉，但您无法对此用户执行该操作，因为此用户是超级管理员。<br /><br />要执行该操作，您必须在 inc/config.php 文件中添加您的用户ID到超级管理员列表。';
$l['error_delete_no_uid'] = '没有指定权限ID';
$l['error_delete_invalid_uid'] = '指定的权限ID无效';

$l['success_perms_deleted'] = '权限成功撤销。';

$l['confirm_perms_deletion'] = "确定撤销权限?";
$l['confirm_perms_deletion2'] = "确定撤销该用户权限?";

?>