<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: config_settings.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */
 
$l['board_settings'] = "全局设置";
$l['change_settings'] = "更改设置";
$l['change_settings_desc'] = "这里您可以管理论坛相关的各项设置。在下列设置组中选择一个可以管理跟这个组相关的设置。";
$l['add_new_setting'] = "添加设置";
$l['add_new_setting_desc'] = "这里您可以为论坛添加新的设置。";
$l['modify_existing_settings'] = "修改设置";
$l['modify_existing_settings_desc'] = "这里您可以修改论坛中已存在的设置。";
$l['add_new_setting_group'] = "添加设置组";
$l['add_new_setting_group_desc'] = "这里您可以创建一个设置组归类个人设置。";
$l['edit_setting_group'] = "编辑设置组";
$l['edit_setting_group_desc'] = "这里您可以编辑已存在的设置组。";

$l['title'] = "标题";
$l['description'] = "描述";
$l['group'] = "组";
$l['display_order'] = "显示顺序";
$l['name'] = "标识符";
$l['name_desc'] = "这个唯一的标识符用于设置数组中引用这个设置（在脚本, 翻译文件和模板中）。";
$l['group_name_desc'] = "这个唯一的标识符用于翻译系统。";
$l['text'] = "文本";
$l['textarea'] = "文本域";
$l['yesno'] = "是/否 选择";
$l['onoff'] = "开/关 选择";
$l['select'] = "选择框";
$l['radio'] = "单选框";
$l['checkbox'] = "复选框";
$l['language_selection_box'] = "语言选择框";
$l['adminlanguage'] = "管理员语言选择框";
$l['cpstyle'] = "控制面板样式选择框";
$l['php'] = "Evaluated PHP";
$l['type'] = "类型"; 
$l['extra'] = "额外";
$l['extra_desc'] = "如果选择了这项：选择框、单选框或复选框，请在下面输入一个配对(格式为：值=项)，每个单独的项占一行。If PHP, enter the PHP to be evaluated.";
$l['value'] = "值";
$l['insert_new_setting'] = "添加设置";
$l['edit_setting'] = "编辑设置";
$l['delete_setting'] = "删除设置";
$l['setting_configuration'] = "设置配置";
$l['update_setting'] = "更新设置";
$l['save_settings'] = "保存设置";
$l['setting_groups'] = "设置组";
$l['bbsettings'] = "设置";
$l['insert_new_setting_group'] = "添加设置组";
$l['setting_group_setting'] = "设置组/设置";
$l['order'] = "顺序";
$l['edit_setting_group'] = "编辑设置组";
$l['delete_setting_group'] = "删除设置组";
$l['save_display_orders'] = "保存显示顺序";
$l['update_setting_group'] = "更新设置组";
$l['modify_setting'] = "修改设置";
$l['search'] = "搜索";

$l['show_all_settings'] = "显示所有设置";
$l['settings_search'] = "搜索设置";

$l['confirm_setting_group_deletion'] = "您确定要删除这个设置组？";
$l['confirm_setting_deletion'] = "您确定要删除这个设置？";

$l['error_missing_title'] = "您没有为这个设置指定名称";
$l['error_missing_group_title'] = "您没有为这个设置组指定名称";
$l['error_invalid_gid'] = "您没有选定一个有效的组来放置这个设置";
$l['error_invalid_gid2'] = "您循着链接到了一个无效的设置组。请确认它存在。";
$l['error_missing_name'] = "您没有为这个设置指定标识符";
$l['error_missing_group_name'] = "您没有为这个设置组指定标识符";
$l['error_invalid_type'] = "您没有为这个设置选择一个有效值";
$l['error_invalid_sid'] = "指定的设置不存在";
$l['error_duplicate_name'] = "指定的标识符已经被 \"{1}\" 设置使用 -- 它必须是唯一的";
$l['error_duplicate_group_name'] = "指定的标识符已经被 \"{1}\" 设置组使用 -- 它必须是唯一的";
$l['error_no_settings_found'] = "找不到符合指定搜索词的设置。";
$l['error_cannot_edit_default'] = "默认的设置和组不可编辑或移除。";
$l['error_cannot_edit_php'] = "这是一个特殊的不可编辑的设置。";
$l['error_ajax_search'] = "搜索设置时出现问题：";
$l['error_ajax_unknown'] = "搜索设置时出现了未知错误。";

$l['success_setting_added'] = "设置已经创建成功。";
$l['success_setting_updated'] = "设置已经更新成功。";
$l['success_setting_deleted'] = "选定的设置已经成功删除。";
$l['success_settings_updated'] = "设置已经更新成功。";
$l['success_display_orders_updated'] = "设置的显示顺序已经更新成功。";
$l['success_setting_group_added'] = "设置组已经创建成功。";
$l['success_setting_group_updated'] = "设置组已经更新成功。";
$l['success_setting_group_deleted'] = "选定的设置组已经成功删除。";
$l['success_duplicate_settings_deleted'] = "所有复制的设置组已经成功删除。";
?>