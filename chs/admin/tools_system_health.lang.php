<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: tools_system_health.lang.php 4304 2009-01-02 01:11:56Z MyBB中文化团队 $
 */

$l['system_health'] = "系统状况";
$l['system_health_desc'] = "这里可以查看系统状况相关信息。";
$l['utf8_conversion'] = "UTF-8转换";
$l['utf8_conversion_desc'] = "您当前正在转换一个数据库表到 UTF-8 格式。请注意，这个过程可能需要几个小时，这取决于您的论坛和这张表的大小。当过程完成后，您将返回到UTF-8转换的主页。";
$l['utf8_conversion_desc2'] = "这个工具检查数据库表是否为UTF-8格式，如果不是就允许您进行转换。";

$l['convert_all'] = "转换全部";
$l['converting_to_utf8'] = "MyBB正在将表 \"{1}\" 从 {2} 编码转换到 UTF-8 编码。";
$l['convert_to_utf8'] = "您正在将表 \"{1}\" 从 {2} 编码转换到 UTF-8 编码。";
$l['convert_all_to_utf'] = "您正在将所有表从 {1} 编码转换到 UTF-8 编码。";
$l['please_wait'] = "请稍等...";
$l['converting_table'] = "转换表:";
$l['convert_table'] = "转换表";
$l['convert_tables'] = "转换所有表";
$l['convert_database_table'] = "转换数据库表";
$l['convert_database_tables'] = "转换所有数据库表";
$l['table'] = "表";
$l['status'] = "状态";
$l['convert_now'] = "现在转换";
$l['totals'] = "总计";
$l['attachments'] = "附件";
$l['total_database_size'] = "数据库大小";
$l['attachment_space_used'] = "附件占用空间";
$l['total_cache_size'] = "缓存大小";
$l['estimated_attachment_bandwidth_usage'] = "估计附件带宽使用";
$l['max_upload_post_size'] = "最大 上传/提交 大小";
$l['average_attachment_size'] = "附件平均大小";
$l['stats'] = "统计资料";
$l['task'] = "任务";
$l['run_time'] = "运行时间";
$l['next_3_tasks'] = "下3个任务";
$l['backup_time'] = "备份时间";
$l['no_backups'] = "当前没有备份文件。";
$l['existing_db_backups'] = "已存在的数据库备份文件";
$l['writable'] = "可写";
$l['not_writable'] = "不可写";
$l['please_chmod_777'] = "请 CHMOD 为 777.";
$l['chmod_info'] = "请改变下面指定文件的 CHMOD 设置。欲了解更多有关CHMODing，看这";
$l['file'] = "文件";
$l['location'] = "位置";
$l['settings_file'] = "设置文件";
$l['config_file'] = "配置文件";
$l['file_upload_dir'] = "文件上传目录";
$l['avatar_upload_dir'] = "头像上传目录";
$l['language_files'] = "语言文件";
$l['backup_dir'] = "备份目录";
$l['cache_dir'] = "缓存目录";
$l['themes_dir'] = "主题目录";
$l['chmod_files_and_dirs'] = "CHMOD 文件和目录";

$l['notice_process_long_time'] = "这个过程可能需要几个小时，这取决于您的论坛和这张表的大小。";

$l['error_chmod'] = "必要的文件和目录没有适当的属性设置。";
$l['error_invalid_table'] = "指定的表不存在。";
$l['error_db_encoding_not_set'] = "您当前安装的MyBB还不能使用这个工具。请查看<a href=\"http://wiki.mybboard.net/index.php/UTF8_Setup\">the wiki</a>获取更多信息。";
$l['error_not_supported'] = "您当前的数据库引擎不支持UTF-8转换工具。";

$l['success_all_tables_already_converted'] = "所有表已经转换为或者已经是UTF-8格式。";
$l['success_table_converted'] = "选择的表 \"{1}\" 成功转换为UTF-8格式。";
$l['success_chmod'] = "所有必要的文件和目录拥有适当的属性设置。";

?>