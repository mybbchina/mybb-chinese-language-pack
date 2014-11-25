<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: helpdocs.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

// Help Document 1
$l['d1_name'] = "用户注册";
$l['d1_desc'] = "通过注册获得个性化与权限访问。";
$l['d1_document'] = "这个论坛的某些部分或许要求您先登录与注册. 注册是完全免费的, 只需要花费您几分钟便可完成.
<br /><br />我们鼓励用户进行注册; 一旦注册您就可以发布帖子(消息), 设定您自己的偏好习惯, 以及维护一份个人资料.
<br /><br />需要注册的一些功能特色包括订阅, 改变风格, 访问个人便笺(简易记事本), 给论坛会员发送私人短信及 Email。";

// Help Document 2
$l['d2_name'] = "更新个人资料";
$l['d2_desc'] = "修改您当前的数据档案。";
$l['d2_document'] = "您在站上的某些时候, 您可能需要修改一些资料信息, 诸如即时通信信息, 您的密码, 或许可能需要修改您的 Email 地址. 您可以在用户控制面板中修改这些个人信息. 若要访问这个控制面板, 只需点击大部分页面右上角标为 \"用户面板\" 的链接. 在那里, 只要选择 \"编辑个人资料\" 就可以修改所有想改的项目, 然后点击页面底部的提交按钮进行保存才能生效。";

// Help Document 3
$l['d3_name'] = "MyBB中Cookie的使用";
$l['d3_desc'] = "MyBB使用cookie保存和您注册登录有关的特定信息。";
$l['d3_document'] = "如果您是注册用户，MyBB使用cookie保存您的登录信息，如果不是则保存您的最近访问信息。
<br /><br />Cookie是一个保存在您电脑里的小型的文本文档；论坛中所设置的cookie仅可以在这个网站里使用并不会引起安全风险。
<br /><br />论坛中的Cookie同时也记录您最近读过的那个主题。
<br /><br />若要清除这个论坛设定的cookie，您可以点击<a href=\"misc.php?action=clearcookies\">这里</a>。";

// Help Document 4
$l['d4_name'] = "登录与退出";
$l['d4_desc'] = "如何登录与退出(注销)。";
$l['d4_document'] = "在您登录的时候，在您的机器上设定了一个 cookie 保存登录信息，因此您在访问论坛里不需要每次重新输入您的用户名与密码。退出时则清除那个cookie，以确保其它人不会以您的身份来访问论坛。
<br /><br />若要登录，只需点击论坛右上方的登录链接。若要退出，在相同的地方点击退出链接即可。如果您无法退出，那么点击<a href=\"misc.php?action=clearcookies\">这里</a>清除您机器上的cookie也可以达到同样的效果。";

// Help Document 5
$l['d5_name'] = "发表新话题";
$l['d5_desc'] = "在论坛中发起一个新主题。";
$l['d5_document'] = "当您进入一个您感兴趣的论坛并打算建立一个新的话题(或主题)时, 您只要点击版面顶部或底部标为 \"发表新主题\" 的图片即可. 请注意您可能不一定有权限在所有论坛创建新话题, 有时候管理员将某些特定论坛版面用于内部讨论或仅用于存档归档。";

// Help Document 6
$l['d6_name'] = "发表回复";
$l['d6_desc'] = "在论坛中对一个话题发表回帖。";
$l['d6_document'] = "在您访问的过程中, 您可能碰到某些话题(或主题)想进行回复. 很简单, 您只要在主题浏览页的上部或下部点击标为 \"发表回复\" 图片. 请注意管理员有可能会对某些特殊的论坛版面作出限制, 从而只有特定的用户可以发表.
<br /><br />此外, 管理员或版主可能会对一个主题进行锁定, 这意味着不能再回复这个主题. 如果没有管理员或版主的帮助, 普通用户是没有办法打开这样的话题的。";

// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "学习如何使用 MyCode 增强您的帖子。";
$l['d7_document'] = "您可以使用 MyCode - 一个简化版的HTML, 以便在您的帖子种建立特定的效果.
<p><br />[b]这是粗体字[/b]<br />&nbsp;&nbsp;&nbsp;<b>这是粗体字</b>
<p>[i]这是斜体字[/i]<br />&nbsp;&nbsp;&nbsp;<i>这是斜体字</i>
<p>[u]文字带下划线[/u]<br />&nbsp;&nbsp;&nbsp;<u>文字带下划线</u>
<p>[s]文字带划除线[/s]<br />&nbsp;&nbsp;&nbsp;<strike>文字带划除线</strike>
<p><br />[url]http://www.mybbchina.net/[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">http://www.mybbchina.net/</a>
<p>[url=http://www.mybbchina.net/]MyBBchina.net[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">MyBBchina.net</a>
<p>[email]example@example.com[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">example@example.com</a>
<p>[email=example@example.com]给我发 E-mail![/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">给我发 E-mail!</a>
<p>[email=example@example.com?subject=spam]包含标题的 E-mail[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com?subject=spam\">包含标题的 E-mail</a>
<p><br />[quote]这里是引文[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>这里是引文</quote>
<p>[code]保留格式的文字[/code]<br />&nbsp;&nbsp;&nbsp;<code>保留格式的文字</code>
<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">
<p><br />[color=red]红色文字[/color]<br />&nbsp;&nbsp;&nbsp;<font color=\"red\">红色文字</font>
<p>[size=3]3号大小的文字[/size]<br />&nbsp;&nbsp;&nbsp;<font size=\"3\">3号大小的文字</font>
<p>[font=Tahoma]This font is Tahoma[/font]<br />&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">This font is Tahoma</font>
<p><br />[align=center]居中对齐[/align]<div align=\"center\">居中对齐</div>
<p>[align=right]靠右对齐[/align]<div align=\"right\">靠右对齐</div>
<p><br />[list]<br />[*]列表项 #1<br />[*]列表项 #2<br />[*]列表项 #3<br />[/list]<br /><ul><li>列表项 #1</li><li>列表项 #2</li><li>列表项 #3</li>
</ul>
<p>您也可以用 [list=1] 创建一个数字顺序列表, 用 [list=a] 创建字母顺序列表.</p>";
?>