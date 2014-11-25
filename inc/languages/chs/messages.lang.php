<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: messages.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

$l['click_no_wait'] = "如果您不想等待请点击这里。";
$l['redirect_return_forum'] = "<br /><br />您也可以, <a href=\"{1}\">返回论坛版面</a>。";
$l['redirect_emailsent'] = "您的 E-mail 已经成功寄出了。";
$l['redirect_loggedin'] = "您已经成功登录.<br />现在即将转入原来的页面。";

$l['error_invalidpworusername'] = "你输入了一个无效的 用户名/密码 组合<br /><br />如果你忘记了密码请 <a href=\"member.php?action=lostpw\">点击这里找回密码</a>。";
$l['error_incompletefields'] = "似乎有一个或多个必填项您没有填写, 请返回并输入必填的项目。"; 
$l['error_alreadyuploaded'] = "这个帖子已经包含了一个相同名字的附件. 请重命名这个文件然后重新上载。或者点击“更新附件”";
$l['error_nomessage'] = "抱歉, 由于您没有输入正确有效的内容, 所以我们不能继续操作. 请返回重填。";
$l['error_invalidemail'] = "您没有输入一个有效的 Email 地址。";
$l['error_nomember'] = "您输入的会员是无效或不存在的。";
$l['error_maxposts'] = "抱歉, 您每日的发帖数已经达到上限. 请等到明天再发表或联系管理员.<br /><br />您每天最多可以发表的帖子数量是 {1}";
$l['error_nohostname'] = "找不到您输入的 IP 对应的主机名。";
$l['error_invalidthread'] = "指定的主题不存在。";
$l['error_invalidpost'] = "指定的帖子不存在。";
$l['error_invalidattachment'] = "指定的附件不存在。";
$l['error_invalidforum'] = "非法无效的论坛版面";
$l['error_closedinvalidforum'] = "您不可以在这个论坛版面里发帖, 可能是由于它已经关闭或只是一个分类。";
$l['error_attachtype'] = "您附上的文件类型是不被允许的. 请删除这个附件或换其它类型的文件。";
$l['error_attachsize'] = "您附上的文件太大了. 这个类型的文件大小不能超过 {1} KB。";
$l['error_uploadsize'] = "您上传的文件太大了。";
$l['error_uploadfailed'] = "文件上传失败, 请选择一个有效的文件并重试。";
$l['error_uploadfailed_detail'] = "错误详细情况: ";
$l['error_uploadfailed_php1'] = "PHP 返回: 上传的文件超过了 php.ini 中 upload_max_filesize 的设定值. 请将这个错误报告给论坛管理员。";
$l['error_uploadfailed_php2'] = "上载的文件超出了设定的文件大小上限。";
$l['error_uploadfailed_php3'] = "文件上载不完全。";
$l['error_uploadfailed_php4'] = "没有文件上传。";
$l['error_uploadfailed_php6'] = "PHP 返回: 缺少上传的临时目录. 请将这个错误报告给论坛管理员。";
$l['error_uploadfailed_php7'] = "PHP 返回: 无法将文件写入磁盘. 将将这个错误报告给论坛管理员。";
$l['error_uploadfailed_phpx'] = "PHP 返回的错误代码: {1}. 请将这个错误报告给论坛管理员。";
$l['error_uploadfailed_nothingtomove'] = "指定了一个无效的文件, 因此上传的文件无法被移入目标位置。";
$l['error_uploadfailed_movefailed'] = "在将上传的文件移入目标位置时发生了一个问题。";
$l['error_uploadfailed_lost'] = "服务器上没有找到这个附件(丢失了)。";
$l['error_emailmismatch'] = "您输入的 Email 地址不匹配. 请返回重试";
$l['error_nopassword'] = "您没有输入一个有效的密码。";
$l['error_usernametaken'] = "您选用的用户名已经被注册了。";
$l['error_nousername'] = "您没有输入用户名。";
$l['error_invalidusername'] = "您输入的用户名看来是无效的。";
$l['error_invalidpassword'] = "您输入的密码不正确. 如果您已经忘了密码, 点击<a href=\"member.php?action=lostpw\">这里</a>. 若不是, 请返回重试。";
$l['error_postflooding'] = "很抱歉, 我们不能处理您的帖子. 管理员设定只允许您每 {1} 秒发表一篇帖子。";
$l['error_nopermission_guest_1'] = "您可能是没有登录或没有权限浏览这个页面. 这可能是以下原因的其中一个造成的:";
$l['error_nopermission_guest_2'] = "您还没有登录或注册. 请使用页面底部的表单进行登录。";
$l['error_nopermission_guest_3'] = "您没有权限可以访问这个页面. 您是不是在尝试访问管理页面或其它不属于您的资源? 请检查论坛规则是否允许您的这个行为。";
$l['error_nopermission_guest_4'] = "您的帐号可能已经被管理员禁用了, 或者您的帐号正在等候激活。";
$l['error_nopermission_guest_5'] = "你直接访问过这个页面而不是使用应该使用的表单或链接。";
$l['login'] = "登录";
$l['need_reg'] = "还没注册?";
$l['forgot_password'] = "忘记密码了?";
$l['error_nopermission_user_1'] = "您没有权限访问这个页面, 这可能是以下原因的其中一个造成的:";
$l['error_nopermission_user_ajax'] = "您没有权限访问这个页面。";
$l['error_nopermission_user_2'] = "您的帐号可能已经被暂停了或者您无权访问这项资源。";
$l['error_nopermission_user_3'] = "您没有权限访问这个页面, 您是不是在尝试访问管理页面或其它不属于您的资源? 请检查论坛规则是否允许您的这个行为。";
$l['error_nopermission_user_4'] = "您的帐号正在等候激活或批准(审核)。";
$l['error_nopermission_user_5'] = "你直接访问过这个页面而不是使用应该使用的表单或链接。";
$l['error_nopermission_user_resendactivation'] = "重发激活验证码";
$l['error_nopermission_user_username'] = "您目前已经登录, 用户名是: '{1}'";
$l['logged_in_user'] = "登录用户";
$l['error_too_many_images'] = "图片太多了。";
$l['error_too_many_images2'] = "我们感到抱歉, 由于您的帖子包含了太多的图片所以无法处理. 请从您的帖子中删除部分图片以继续。";
$l['error_too_many_images3'] = "<b>注意:</b> 每个帖子允许的图片最大数量是";
$l['error_attach_file'] = "附加文件错误";
$l['please_correct_errors'] = "在继续之前请修正下列错误:";
$l['error_reachedattachquota'] = "抱歉, 您无法附加这个文件, 因为您的附件配额已经达到 {1}";
$l['error_invaliduser'] = "指定的用户无效或不存在。";
$l['error_invalidaction'] = "非法(无效)的行为";
$l['error_messagelength'] = "抱歉, 您的内容太长, 无法发布. 请尝试缩短内容然后再试。";
$l['error_message_too_short'] = "抱歉, 您的内容太短, 无法发布。";
$l['failed_login_wait'] = "您在限定的尝试次数内登录失败. 您现在必须等待 {1}小时 {2}分 {3}秒, 才能再次登录。";
$l['failed_login_again'] = "<br />您还有 <strong>{1}</strong> 次机会尝试登录。";
$l['error_max_emails_day'] = "您不能使用 '发送主题给朋友' 或 '给用户寄 Email' 的功能, 因为您已经用光了 24 小时内发送 {1} 封邮件的额度。";
        
$l['emailsubject_lostpw'] = "在 '{1}' 密码重设";
$l['emailsubject_passwordreset'] = "在 '{1}' 的新密码";
$l['emailsubject_subscription'] = "对 '{1}' 的新回复";
$l['emailsubject_randompassword'] = "您在 '{1}' 的密码";
$l['emailsubject_activateaccount'] = "'{1}' 的帐号激活说明";
$l['emailsubject_forumsubscription'] = "在 '{1}' 有新主题";
$l['emailsubject_reportpost'] = "'{1}' 的帖子举报";
$l['emailsubject_reachedpmquota'] = "您在 '{1}' 上的私人短信(PM)配额已用完";
$l['emailsubject_changeemail'] = "您在 '{1}'更换 Email";
$l['emailsubject_newpm'] = "您在 '{1}' 有新的私人短信";
$l['emailsubject_sendtofriend'] = "在 '{1}' 上的有趣主题";
$l['emailbit_viewthread'] = "... (访问主题以读取详情..)";

$l['email_lostpw'] = "{1},

为了在 {2} 完成重设您的密码, 您需要在您的浏览器中访问下面的 URL.

{3}/member.php?action=resetpassword&uid={4}&code={5}

如果上面的链接无法正确地运作, 请前往

{3}/member.php?action=resetpassword

然后输入下面的资料:
用户名: {1}
激活验证码: {5}

谢谢,
{2} 管理团队";


$l['email_reportpost'] = "{1} 来自 {2} 举报了这个帖子:

{3}
{4}/{5}

他的举报理由如下:
{7}

这条消息已经发送给这个论坛版面的所有版主, 如果没有版主则发送给了所有的管理或和超级版主.

请尽快检查这个帖子。";

$l['email_passwordreset'] = "{1},

您在 {2} 的密码已经重设.

您的新密码是: {3}

请使用这个密码登录论坛, 当您登录的时候请前往您的 \"用户面板\" 修改它.

谢谢,
{2} 管理团队";

$l['email_randompassword'] = "{1},

感谢您在 {2} 注册. 下面是您的用户名和随机生成的密码. 若要登录 {2}, 您需要这些资料.

用户名: {3}
密码: {4}

强烈建议您登录后立即修改密码. 您可以前往您的 \"用户面板\" 然后点击左侧菜单里的修改密码来做这件事.

谢谢,
{2} 管理团队";

$l['email_sendtofriend'] = "您好,

来自 {2} 的 {1} 认为您可能对下面的主题感兴趣:

{3}

{1} 还包含了以下讯息:
------------------------------------------
{4}
------------------------------------------

谢谢,
{2} 管理团队
";

$l['email_forumsubscription'] = "{1},

{2} 上已经在 {3} 开启了一个新的主题. 这个论坛是您在 {4} 订阅的.

主题标题是: {5}

以下是主题的内容摘要:
--
{6}
--

若要查看这个主题, 请前往下面的 URL:
{7}/{8}

论坛里或许已经有了新的主题和回复, 但在您访问论坛之前您不会再收到这类通知.

谢谢,
{4} 管理团队

------------------------------------------
取消订阅说明:

您不愿意再接收这个论坛(版面)的新主题通知, 请在您的浏览器中访问下面的 URL:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";

$l['email_activateaccount'] = "{1},

为了完成在 {2} 的注册步骤, 需要您在浏览器中访问下面的 URL.

{3}/member.php?action=activate&uid={4}&code={5}

如果上面的链接无法正确地运作, 请前往

{3}/member.php?action=activate

然后输入下面的资料:
用户名: {1}
激活验证码: {5}

谢谢,
{2} 管理团队";

$l['email_subscription'] = "{1},

{2} 刚刚回复了您在 {3} 订阅的主题. 这个主题的标题是: {4}.

以下是回帖的内容摘要:
------------------------------------------
{5}
------------------------------------------

若要浏览这个主题, 请前往下面的 URL:
{6}/{7}

这个主题可能已经有了其它的回复, 不过在您访问论坛之前不会再收到这类通知.

谢谢,
{3} 管理团队

------------------------------------------
取消订阅说明:

您不愿意再接收这个主题的回复通知, 请在您的浏览器中访问下面的 URL:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

这是一封来自 {2} 自动发送的 Email, 为的是让您知道您的私人短信收件箱容量已经满了.

可能有人尝试过给您发送私人短信并因此而无法成功发送.

请删除您保存下来的一些私人短信, 记得也要将它们从 '垃圾箱' 中清除.

谢谢,
{2} 管理团队
{3}";
$l['email_changeemail'] = "{1},

我们在 {2} 上收到请求要改变您的 Email 地址(详情看下面).

原 Email 地址: {3}
新 Email 地址: {4}

如果这些更改是正确的, 请在浏览器中前往访问下面的 URL, 以完成验证过程.

{5}/member.php?action=activate&uid={8}&code={6}

如果上面的链接无法正确地运作, 请前往

{5}/member.php?action=activate

然后输入下面的资料:
用户名: {7}
激活验证码: {6}

如果您选择不验证您的新 email, 那么您的个人资料不会更新并且仍然包含您的现有 Email 地址.

谢谢,
{2} 管理团队
{5}";

$l['email_newpm'] = "{1},
        
您在 {3} 收到了一条来自 {2} 的私人短信(PM). 若要阅读这条短信, 您可以先访问下面的链接:

{4}/private.php

请注意在您访问 {3} 之前, 您不会再收到有新短信的通知..

您可以在您的帐号选项页里禁用有新短信的通知:

{4}/usercp.php?action=options

谢谢,
{3} 管理团队
{4}";

$l['email_emailuser'] = "{1},

{3} 上的 {2} 发送了以下消息给您:
------------------------------------------
{5}
------------------------------------------

谢谢,
{3} 管理团队
{4}

------------------------------------------
不想收到其它会员的 Email 消息?

如果您不希望其它会员给您发 Email 消息, 请在论坛中进入您的 \"用户面板\" 并启用 '对其它会员隐藏 Email 地址' 的选项:
{4}/usercp.php?action=options

------------------------------------------";
?>