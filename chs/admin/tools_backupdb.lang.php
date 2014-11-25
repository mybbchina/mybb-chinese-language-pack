<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: tools_backupdb.lang.php 4304 2009-01-02 01:11:56Z MyBB中文化团队 $
 */


$l['database_backups'] = "数据库备份";
$l['database_backups_desc'] = "这里是当前您服务器MyBB备份目录里存在的数据库备份列表。";
$l['new_database_backup'] = "新建备份";
$l['new_backup'] = "新建备份";
$l['new_backup_desc'] = "这里您可以备份数据库。";
$l['backups'] = "备份";
$l['existing_database_backups'] = "存在的数据库备份";

$l['backup_saved_to'] = "备份文件存放在:";
$l['download'] = "下载到本地";
$l['table_selection'] = "选择表";
$l['backup_options'] = "备份选项";
$l['table_select_desc'] = "选择想要备份的表，按住CTRL可以选择多个表。";
$l['select_all'] = "全选";
$l['deselect_all'] = "取消全选";
$l['select_forum_tables'] = "选择版块表";
$l['file_type'] = "文件类型";
$l['file_type_desc'] = "选择一个备份数据库的文件类型。";
$l['gzip_compressed'] = "GZIP压缩";
$l['plain_text'] = "文本";
$l['save_method'] = "保存方式";
$l['save_method_desc'] = "选择一种保存备份数据库文件的方式";
$l['backup_directory'] = "保存在备份目录";
$l['backup_contents'] = "备份内容";
$l['backup_contents_desc'] = "选择您想备份的内容。";
$l['structure_and_data'] = "结构和数据";
$l['structure_only'] = "结构";
$l['data_only'] = "数据";
$l['analyze_and_optimize'] = "分析并优化选择的表";
$l['analyze_and_optimize_desc'] = "您想在备份过程中分析并优化选定的表？";
$l['perform_backup'] = "执行备份";
$l['backup_filename'] = "备份文件名";
$l['file_size'] = "文件大小";
$l['creation_date'] = "备份日期";
$l['no_backups'] = "当前还没有备份。";

$l['error_file_not_specified'] = "没有指定要下载的数据库备份文件。";
$l['error_invalid_backup'] = "选定的备份文件无效或者不存在。";
$l['error_backup_doesnt_exist'] = "指定的备份文件不存在";
$l['error_backup_not_deleted'] = "备份并没有被删除。";
$l['error_tables_not_selected'] = "没有选择任何表。";
$l['error_no_zlib'] = "当前PHP配置没有启用zlib库 - 无法使用GZIP压缩。";

$l['alert_not_writable'] = "备份目录（在管理员目录里面）不可写，无法保存在服务器上。";

$l['confirm_backup_deletion'] = "确定删除?";

$l['success_backup_deleted'] = "备份文件删除成功。";
$l['success_backup_created'] = "备份文件创建成功。";

?>