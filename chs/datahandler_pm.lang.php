<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 *
 * $Id: datahandler_pm.lang.php 4269 2008-11-13 05:48:19Z MyBB中文化团队 $
 */

$l['pmdata_too_long_subject'] = '您输入的私人短信标题太长, 请输入短一点的标题.';
$l['pmdata_code_no_subject'] = '[无主题]';
$l['pmdata_missing_subject'] = '您没有输入短信标题, 请输入.';
$l['pmdata_missing_message'] = '您没有输入要发送的短信内容, 请输入.';
$l['pmdata_invalid_recipients'] = "您输入指定的收件人包含非注册用户名. 非法的收件人: {1}";
$l['pmdata_no_recipients'] = "您没有输入任何短信收件人, 在 'To' 栏项里, 至少需要输入一个收件人的用户名。";
$l['pmdata_too_many_recipients'] = "您无权同时发送私人短信给 {1} 个用户。";
$l['pmdata_recipient_is_ignoring'] = "你无权发送私人短信给 {1}, 因为您在对方的黑名单中。";
$l['pmdata_recipient_pms_disabled'] = '{1} 已经禁用了站内私人短信功能. 您无法发送私人短信给这个使用者.';
$l['pmdata_recipient_reached_quota'] = '{1} 已经达到了短信额度上限, 所以您的短信无法成功寄出.';

$l['pmdata_pm_flooding'] = '您发送短信的速度太快。请等待 {1} 秒。';
$l['pmdata_pm_flooding_one_second'] = '您发送短信的速度太快。请等待 1 秒。';
?>