<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: warnings.lang.php 3790 2008-04-23 22:50:33Z MyBB中文化团队 $
 */
 
$l['nav_profile'] = "{1} 的个人资料";
$l['nav_warning_log'] = "警告日志";
$l['nav_add_warning'] = "警告用户";
$l['nav_view_warning'] = "警告详情";

$l['warning_for_post'] = ".. 帖子:";
$l['already_expired'] = "已过期";
$l['warning_active'] = "现行中";
$l['warning_revoked'] = "已撤销";
$l['warning_log'] = "警告日志";
$l['warning'] = "警告";
$l['issued_by'] = "执行者";
$l['date_issued'] = "发生时间";
$l['expiry_date'] = "到期时间";
$l['active_warnings'] = "现行警告(起作用的)";
$l['expired_warnings'] = "已过期警告";
$l['warning_points'] = "({1} 点)";
$l['no_warnings'] = "这个用户没有收到任何警告, 或已被全部删除。";
$l['warn_user'] = "警告用户";
$l['warn_user_desc'] = "";
$l['post'] = "帖子:";
$l['warning_note'] = "管理备注:";
$l['warning_type'] = "警告类型:";
$l['custom'] = "自定义原因";
$l['reason'] = "原因:";
$l['points'] = "点数:";
$l['warn_user_desc'] = "如果用户违反了一个或更多的规则, 您可以在这里增加用户的警告等级。";
$l['send_pm'] = "通知用户:";
$l['send_user_warning_pm'] = "给这个用户发送一条私人短信通知他这个警告。";
$l['send_pm_subject'] = "标题:";
$l['warning_pm_subject'] = "您收到了一条警告。";
$l['send_pm_message'] = "内容:";
$l['warning_pm_message'] = "亲爱的 {1}

您收到了一条来自{2}管理员的警告.
--

--";
$l['expiration_hours'] = "小时";
$l['expiration_days'] = "天";
$l['expiration_weeks'] = "星期";
$l['expiration_months'] = "个月";
$l['redirect_warned_banned'] = "这个用户同时被移入了 {1} 组, 持续时间 {2}。";
$l['redirect_warned_suspended'] = "这个用户的发帖权限已经被暂停, 持续时间 {1}。";
$l['redirect_warned_moderate'] = "这个用户的所有发帖将要求审核, 持续时间 {1} {2}。";
$l['redirect_warned'] = "{1} 的警告等级已经被增加到 {2}%.{3}<br /><br />您现在将转入您原来的位置。";
$l['error_warning_system_disabled'] = "您不能使用警告系统, 因为论坛管理员已经禁用这个功能。";
$l['reached_max_warnings_day'] = "您不能发出警告了, 因为您已经达到了每日可以发送的警告数量上限.<br /><br />您每天可以发出的警告最多次数为 {1}。";
$l['user_reached_max_warning'] = "这个用户不能再被警告了, 因为他已经达到了警告等级的最大值。";
$l['error_cant_warn_group'] = "您没有权限警告这个组的用户。";
$l['error_no_note'] = "您没有针对这条警告输入任何管理备注。";
$l['error_invalid_type'] = "您选择了一个无效的警告类型。";
$l['error_cant_custom_warn'] = "您没有权限对用户发出自定义警告。";
$l['error_no_custom_reason'] = "您没有针对您的自定义警告输入原因。";
$l['error_invalid_custom_points'] = "您没有输入一个有效要增加的警告点数. 您需要输入一个大于 0 并且小于或等于 {1} 的数字。";
$l['details'] = "详情";
$l['view'] = "查看";
$l['current_warning_level'] = "当前警告等级: <strong>{1}%</strong> ({2}/{3})";
$l['warning_details'] = "警告详细情况";
$l['revoke_warning'] = "撤销这个警告";
$l['revoke_warning_desc'] = "右要撤销这条警告, 请在下面输入原因. 这不会解除因这条警告同时引起的权限封禁或暂停。";
$l['reason'] = "理由:";
$l['warning_is_revoked'] = "这条警告已撤销";
$l['revoked_by'] = "撤销者:";
$l['date_revoked'] = "撤销日期:";
$l['warning_already_revoked'] = "这条警告已经被撤销。";
$l['no_revoke_reason'] = "您没有输入原因说明你为什么要撤销这条警告。";
$l['redirect_warning_revoked'] = "这条警告已经成功撤销, 用户的警告等级也随之下降.<br /><br />现在将返回到那个警告。";
$l['result_banned'] = "用户将被移入一个封禁组({1}) {2}";
$l['result_suspended'] = "发表权限将被暂停 {1}";
$l['result_moderated'] = "发帖将要求审核 {1}";
$l['result_period'] = "{1} {2}";
$l['hour_or_hours'] = "小时";
$l['day_or_days'] = "天";
$l['week_or_weeks'] = "星期";
$l['month_or_months'] = "个月";
$l['expires'] = "持续时间:";
$l['new_warning_level'] = "新警告等级:";
$l['cannot_warn_self'] = "您不能给自己增加警告等级。";
$l['error_cant_warn_user'] = "您没有权限对这个用户发出警告。";
$l['existing_post_warnings'] = "这个帖子现有的警告";
?>