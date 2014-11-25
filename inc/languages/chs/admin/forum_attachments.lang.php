<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: forum_attachments.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

// Tabs
$l['attachments'] = "附件";
$l['stats'] = "统计";
$l['find_attachments'] = "查找附件";
$l['find_attachments_desc'] = "使用附件搜索系统，您可以搜索用户已经发布到您的论坛的特定文件。首先进入搜索字词如下。所有字段是可选的，也不会被列入标准，除非它们包含一个值。";
$l['find_orphans'] = "查找孤儿附件";
$l['find_orphans_desc'] = "孤儿附件是出于某种原因遗失在数据库或文件系统中的附件。此实用工具将帮助您寻找并消除它们。";
$l['attachment_stats'] = "附件统计资料";
$l['attachment_stats_desc'] = "下面是论坛目前的附件统计资料。";

// Errors
$l['error_nothing_selected'] = "请选择一个或多个附件删除。";
$l['error_no_attachments'] = "论坛目前还没有任何附件，当存在附件的时候您才可以访问此标签。";
$l['error_not_all_removed'] = "只有一些孤儿附件被成功删除，其它的无法从上传目录中删除。";
$l['error_invalid_username'] = "输入的用户名无效。";
$l['error_invalid_forums'] = "您选择的一个或多个版块是无效的。";
$l['error_no_results'] = "没有搜索到附件。";
$l['error_not_found'] = "上传目录中找不到附件。";
$l['error_not_attached'] = "附件已上传超过24小时，但并没有附加到帖子中。";
$l['error_does_not_exist'] = "这个附件所在的主题或帖子已不存在。";

// Success
$l['success_deleted'] = "选择的附件删除成功。";
$l['success_orphan_deleted'] = "选择的孤儿附件删除成功。";
$l['success_no_orphans'] = "没有孤儿附件。";

// Confirm
$l['confirm_delete'] = "确定删除?";

// == Pages
// = Stats
$l['general_stats'] = "统计资料";
$l['stats_attachment_stats'] = "附件 - 附件统计资料";
$l['num_uploaded'] = "<strong>No. 上传的附件</strong>";
$l['space_used'] = "<strong>附件占用空间</strong>";
$l['bandwidth_used'] = "<strong>估计附件带宽使用</strong>";
$l['average_size'] = "<strong>附件平均大小</strong>";
$l['size'] = "大小";
$l['posted_by'] = "发帖用户";
$l['thread'] = "主题";
$l['downloads'] = "下载";
$l['date_uploaded'] = "上传日期";
$l['popular_attachments'] = "最热门的5个附件";
$l['largest_attachments'] = "最大的5个附件";
$l['users_diskspace'] = "使用空间最多的5个用户";
$l['username'] = "用户名";
$l['total_size'] = "总大小";

// = Orphans
$l['orphan_results'] = "孤儿附件搜索 - 结果";
$l['orphan_attachments_search'] = "孤儿附件搜索";
$l['reason_orphaned'] = "原因";
$l['reason_not_in_table'] = "不在附件表中";
$l['reason_file_missing'] = "附件文件丢失";
$l['reason_thread_deleted'] = "主题删除";
$l['reason_post_never_made'] = "帖子从未发表";
$l['unknown'] = "未知";
$l['results'] = "结果";
$l['step1'] = "第1步";
$l['step2'] = "第2步";
$l['step1of2'] = "第1步/共2步 - 文件系统扫描";
$l['step2of2'] = "第2步/共2步 - 数据库扫描";
$l['step1of2_line1'] = "请稍等，当前正在扫描文件系统中的孤儿附件。";
$l['step2of2_line1'] = "请稍等，当前正在扫描数据库中的孤儿附件。";
$l['step_line2'] = "当前过程完成后将自动进行下一步。";

// = Attachments / Index
$l['index_find_attachments'] = "附件 - 查找附件";
$l['find_where'] = "查找附件...";
$l['name_contains'] = "文件名包括";
$l['name_contains_desc'] = "要使用通配符搜索请输入 *.[文件扩展名]。例如: *.zip。";
$l['type_contains'] = "文件类型包括";
$l['forum_is'] = "版块";
$l['username_is'] = "发帖用户";
$l['more_than'] = "大于";
$l['greater_than'] = "大于";
$l['is_exactly'] = "等于";
$l['less_than'] = "小于";
$l['date_posted_is'] = "发帖日期";
$l['days_ago'] = "天前";
$l['file_size_is'] = "文件大小";
$l['kb'] = "KB";
$l['download_count_is'] = "下载次数";
$l['display_options'] = "显示选项";
$l['filename'] = "文件名";
$l['filesize'] = "文件大小";
$l['download_count'] = "下载次数";
$l['post_username'] = "发帖用户名";
$l['asc'] = "顺序";
$l['desc'] = "倒序";
$l['sort_results_by'] = "排序结果";
$l['results_per_page'] = "每页结果数";
$l['in'] = "按照";

// Buttons
$l['button_delete_orphans'] = "删除检查过的孤儿附件";
$l['button_delete_attachments'] = "删除检查过的附件";
$l['button_find_attachments'] = "查找附件";

?>