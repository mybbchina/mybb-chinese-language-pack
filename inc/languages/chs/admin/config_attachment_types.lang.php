<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: config_attachment_types.lang.php 4941 2010-05-15 18:17:38Z RyanGordon MyBB中文化团队 $
 */

$l['attachment_types'] = "附件类型";
$l['attachment_types_desc'] = "这里可以管理或者创建附件类型。";
$l['add_new_attachment_type'] = "添加新附件类型";
$l['add_attachment_type'] = "添加附件类型";
$l['add_attachment_type_desc'] = "添加一个新的附件类型，将允许用户在帖子中上传这种类型的附件。您可以控制每个附件类型的扩展名、MIME类型、最大文件大小和显示的小图标。";
$l['edit_attachment_type'] = "编辑";
$l['edit_attachment_type_desc'] = "您可以编辑这个附件类型的扩展名、MIME类型、最大文件大小和显示的小图标。";

$l['extension'] = "扩展名";
$l['maximum_size'] = "最大文件大小";
$l['no_attachment_types'] = "没有附件类型。";

$l['file_extension'] = "文件扩展名";
$l['file_extension_desc'] = "在这里输入允许上传的文件的扩展名（不包括圆点）（例如: txt）";
$l['mime_type'] = "MIME类型";
$l['mime_type_desc'] = "输入MIME类型（<a href=\"http://community.mybbchina.net/thread-7.html\" target=\"_blank\">点这里查看MIME类型列表</a>）";
$l['maximum_file_size'] = "最大文件大小（KB）";
$l['maximum_file_size_desc'] = "限定单个上传文件的最大大小（1 MB = 1024 KB）";
$l['limit_intro'] = "请确定这个大小小于PHP的最大值:";
$l['limit_post_max_size'] = "最大提交: {1}";
$l['limit_upload_max_filesize'] = "上传文件最大: {1}";
$l['attachment_icon'] = "附件图标";
$l['attachment_icon_desc'] = "在这里输入附件图标路径。{theme}代表主题目录，这样做可以允许对于不同主题使用不同图标。";
$l['save_attachment_type'] = "保存";

$l['error_invalid_attachment_type'] = "选择了一个无效附件类型";
$l['error_missing_mime_type'] = "没有输入MIME类型";
$l['error_missing_extension'] = "没有输入文件扩展名";

$l['success_attachment_type_created'] = "添加成功。";
$l['success_attachment_type_updated'] = "更新成功。";
$l['success_attachment_type_deleted'] = "删除成功。";

$l['confirm_attachment_type_deletion'] = "确定删除?";

?>