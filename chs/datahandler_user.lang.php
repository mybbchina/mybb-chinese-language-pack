<?php
/**
 * MyBB 1.4 简体中文语言包
 * Copyright © 2008 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 *
 * $Id: datahandler_user.lang.php 4492 2009-11-01 19:11:37Z MyBB中文化团队 $
 */

$l['userdata_missing_username'] = '您没有输入用户名, 请输入.';
$l['userdata_banned_username'] = '您输入的用户名无法注册, 请输入其它用户名.';
$l['userdata_bad_characters_username'] = '您输入的用户名包含了无效字符, 请其它用户名.';
$l['userdata_invalid_username_length'] = '您输入的用户名长度不正确, 请控制在 {1} 到 {2} 个字符.';
$l['userdata_invalid_usertitle_length'] = '您输入的自定义用户头衔长度不正确, 不能超过 {1} 个字符.';
$l['userdata_username_exists'] = '您输入的用户名已经存在了, 请输入其它用户名.';

$l['userdata_invalid_password_length'] = '您输入的密码长度不正确, 请控制在 {1} 到 {2} 个字符.';
$l['userdata_no_complex_characters'] = '您输入的密码没有包含一个以上的复杂(符号)字符, 请输入一个或多个复杂(符号)字符.';
$l['userdata_passwords_dont_match'] = '您输入的确认密码和原设密码不一致, 请确认您的两次密码.';

$l['userdata_missing_email'] = '您没有输入 Email 地址, 请输入.';
$l['userdata_invalid_email_format'] = '您输入的 Email 地址是无效的, 请输入有效的 Email 地址.';
$l['userdata_emails_dont_match'] = '您输入的确认 Email 地址和原设 Email 地址不一致, 请确认您的 Email 地址填写无误.';
$l['userdata_banned_email'] = "您输入的 Email 地址目前被屏蔽(禁止)使用, 请输入一个其它地址。";
$l['userdata_email_already_in_use'] = "您输入的 Email 地址已经被其它会员使用了, 请输入一个其它地址。";

$l['userdata_dob_required'] = "您没有选取您的出生日期. 请选择您的生日以继续操作 - 然而, 您可以选择对其它用户隐藏您的生日和年龄。";
$l['userdata_invalid_website'] = '您输入的网站地址是无效的, 请输入一个有效的网站地址或直接留空.';
$l['userdata_invalid_icq_number'] = '您输入的 ICQ 号码是无效的, 请输入一个有效的 ICQ 号码或直接留空.';
$l['userdata_invalid_msn_address'] = '您输入的 MSN 地址是无效的, 请输入一个有效的 MSN 地址或直接留空.';
$l['userdata_invalid_birthday'] = '您输入的生日是无效的, 请输入一个有效的生日或直接留空.';
$l['userdata_invalid_referrer'] = '您输入的推荐人不存在, 请输入一个存在的推荐人或直接留空.';
$l['userdata_invalid_language'] = '您选择的语言(界面)不存在, 请选取一个存在的语言.';
$l['userdata_missing_returndate'] = '您输入的返回日期缺少一个或多个栏域, 请确认您已经填写了日, 月份和年份栏域.';
$l['userdata_missing_required_profile_field'] = '您没有为 "{1}" 栏域输入一个选项, 请填写或选择一个值.';
$l['userdata_bad_profile_field_values'] = '您没有为 "{1}" 栏域选择一个有效的选项, 请从已存在的选项中选一个值.';
$l['userdata_max_limit_reached'] = '您为 "{1}" 字段输入的字符数无效。请勿超过 {2} 字符。';
$l['userdata_invalid_checkfield'] = "系统检测认为这是由一个 SPAM 机器人提交的. 如果判断错了, 请联系我们的管理员。";
$l['userdata_invalid_postnum'] = "您输入的帖子数无效。请输入有效的数值，或者留空。";
?>