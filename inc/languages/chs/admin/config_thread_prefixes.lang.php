<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: config_thread_prefixes.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

$l['thread_prefixes'] = "主题前缀";
$l['thread_prefixes_desc'] = "定义好的主题前缀可以在用户发帖的时候有选择性的绑定到他们的主题前面。然后论坛的帖子可以通过这些前缀进行区分、过滤和筛选。";

$l['add_new_thread_prefix'] = "添加主题前缀";
$l['add_new_thread_prefix_desc'] = "这里你可以添加一个新的主题前缀，并且可以定义哪些版块允许使用，也可以定义哪些用户组允许使用。";

$l['edit_prefix'] = "编辑前缀";
$l['edit_prefix_desc'] = "这里你可以编辑主题前缀，并且改变它的显示方式、哪些版块允许使用和哪些用户组允许使用。";
$l['edit_thread_prefix'] = "编辑主题前缀";
$l['delete_thread_prefix'] = "删除主题前缀";

$l['prefix_options'] = "前缀选项";
$l['save_thread_prefix'] = "保存主题前缀";

$l['prefix'] = "前缀";
$l['prefix_desc'] = "该前缀的纯文本版本将显示在选择菜单中。";
$l['display_style'] = "显示样式";
$l['display_style_desc'] = "设置前缀显示的样式。你可以输入 HTML 代码或者和上面一样输入纯文本。";
$l['available_in_forums'] = "应用于哪些版块";
$l['available_to_groups'] = "应用于哪些组";
$l['all_forums'] = "所有版块";
$l['all_groups'] = "所有组";
$l['select_forums'] = "选择版块";
$l['select_groups'] = "选择组";
$l['groups_colon'] = "组:";

$l['no_thread_prefixes'] = "你的论坛还没有添加任何主题前缀";

$l['confirm_thread_prefix_deletion'] = "你确定要删除这个主题前缀？注意：删除之后，你必需要记得更新所有使用了这个前缀的自定义处理工具。";

$l['success_thread_prefix_created'] = "主题前缀已经成功添加。";
$l['success_thread_prefix_updated'] = "主题前缀编辑成功。";
$l['success_thread_prefix_deleted'] = "主题前缀已经成功删除。请更新所有使用了这个前缀的自定义处理工具";

$l['error_missing_prefix'] = "请输入你要添加的前缀。";
$l['error_missing_display_style'] = "请输入这个前缀的显示样式。";
$l['error_no_forums_selected'] = "请选择哪些版块可以使用这个前缀。";
$l['error_no_groups_selected'] = "请选择哪些组可以使用这个前缀。";
$l['error_invalid_prefix'] = "指定的主题前缀不存在。";
?>
