<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 *
 * $Id: datahandler_event.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

$l['eventdata_missing_name'] = '缺少事件的名称. 请输入一个事件名称.';
$l['eventdata_missing_description'] = '缺少事件的内容描述. 请输入事件描述.';

$l['eventdata_invalid_start_date'] = '您输入的事件开始日期是错误不合法的. 您必须确认检查您指定的日期, 月份以及年份是正确的, 有些特别的月份不包含某些日期.';
$l['eventdata_invalid_start_year'] = "只能创建最近 5 年内的事件. 请从列表中选择一个合理的开始年份。";
$l['eventdata_invalid_start_month'] = '您输入的开始月份是不正确的. 请输入一个合法的开始月份.';

$l['eventdata_invalid_end_date'] = '您输入的事件结束日期是不正确的. 您必须确认检查您指定的日期, 月份以及年份是正确的, 有些特别的月份不包含某些日期.';
$l['eventdata_invalid_end_year'] = "只能创建最近 5 年内的事件. 请从列表中选择一个合理的结束年份。";
$l['eventdata_invalid_end_month'] = '您输入的事件结束月份是不正确的. 请输入一个合法的结束月份.';
$l['eventdata_invalid_end_day'] = '您输入的结束日期不正确不合法. 您选择的日期可能超过了这个月应有的天数.';

$l['eventdata_cant_specify_one_time'] = "如果您指定了事件的开始时间, 您必须同时指定事件的结束时间。";
$l['eventdata_start_time_invalid'] = "您输入的开始时间不正确. 正确的格式应该是像这样的: 12am, 12:01am, 00:01。";
$l['eventdata_end_time_invalid'] = "您输入的结束时间不正确. 正确的格式应该是像这样的: 12am, 12:01am, 00:01。";
$l['eventdata_invalid_timezone'] = "您在事件中选定的时区是不合法的。";
$l['eventdata_end_in_past'] = "结束日期或时间在开始日期或时间之前。";

$l['eventdata_only_ranged_events_repeat'] = "只有范围事件 (带有开始和结束日期) 可以重复。";
$l['eventdata_invalid_repeat_day_interval'] = "您输入了一个不合法的重复间隔天数。";
$l['eventdata_invalid_repeat_week_interval'] = "您输入了一个不合法的重复间隔星期(周)数。";
$l['eventdata_invalid_repeat_weekly_days'] = "您没有选择事件发生的某个工作日。";
$l['eventdata_invalid_repeat_month_interval'] = "您输入了一个不合法的重复间隔月数。";
$l['eventdata_invalid_repeat_year_interval'] = "您输入了一个不合法的重复间隔年数。";
$l['eventdata_event_wont_occur'] = "在指定的开始和结束时间里使用您的重复设定的话, 这个事件根本不会发生。";

$l['eventdata_no_permission_private_event'] = "您没有权限发布私人事件。";
?>