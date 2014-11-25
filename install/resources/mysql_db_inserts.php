<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://mybb.com
 * License: http://mybb.com/about/license
 *
 * $Id: mysql_db_inserts.php 5125 2010-07-27 07:28:03Z RyanGordon $
 */

$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (1, 'ZIP File', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (2, 'JPG Image', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (3, 'Text Document', 'text/plain', 'txt', 200, 'images/attachtypes/txt.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (4, 'GIF Image', 'image/gif', 'gif', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (6, 'PHP File', 'application/x-httpd-php', 'php', 500, 'images/attachtypes/php.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (7, 'PNG Image', 'image/png', 'png', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (8, 'Microsoft Word Document', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (9, 'HTM File', 'text/html', 'htm', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (10, 'HTML File', 'text/html', 'html', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (11, 'JPEG Image', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (12, 'GZIP Compressed File', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tar.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (13, 'TAR Compressed File', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (14, 'CSS Stylesheet', 'text/css', 'css', 100, 'images/attachtypes/css.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (15, 'Adobe Acrobat PDF', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (16, 'Bitmap Image', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (17, 'Microsoft Word 2007 Document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 1024, 'images/attachtypes/doc.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (18, 'Microsoft Excel Document', 'application/vnd.ms-excel', 'xls', 1024, 'images/attachtypes/xls.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (19, 'Microsoft Excel 2007 Document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 1024, 'images/attachtypes/xls.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (20, 'Microsoft PowerPoint Document', 'application/vnd.ms-powerpoint', 'ppt', 1024, 'images/attachtypes/ppt.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (21, 'Microsoft PowerPoint 2007 Document', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 1024, 'images/attachtypes/ppt.gif');";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowvideocode,allowsmilies) VALUES ('预设日历',1,0,1,4,0,0,1,1,1,1);";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, '我的分区', '', '', 'c', 0, '1', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 0, 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, '我的版块', '', '', 'f', 1, '1,2', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 0, 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, '用户注册', '通过注册获得个性化与权限访问。', '这个论坛的某些部分或许要求您先登录与注册。注册是完全免费的，只需要花费您几分钟便可完成。<br />\r\n<br />\r\n我们鼓励用户进行注册；一旦注册您就可以发布帖子（消息）、设定您自己的偏好习惯、以及维护个人资料。<br />\r\n<br />\r\n注册后的一些功能特色包括订阅、改变风格、访问个人便笺（简易记事本），给论坛会员发送私人短信及 Email。', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, '更新个人资料', '修改您当前的数据档案。', '您可能需要修改一些资料信息, 诸如即时通信信息, 您的密码, 或许可能需要修改您的 Email 地址。您可以在用户控制面板中修改这些个人信息。若要访问这个控制面板，只需点击大部分页面上部的“用户控制面板”。在那里，选择“编辑个人资料”修改或更新所有想改的项目，然后点击页面底部的提交按钮进行保存才能生效。', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'MyBB中Cookie的使用', 'MyBB使用cookie保存和您注册登录有关的特定信息。', 'myBulletinBoard使用cookie来储存您的登录信息如果您是注册用户，如果不是则记录您上次的访问信息。<br />\r\n<br />\r\nCookie 是一个保存在您电脑里的小型的文本文档；论坛中所设置的 cookie 仅可以在这个网站里使用并不会引起安全风险。<br />\r\n<br />\r\n论坛中的 Cookie 同时也记录您最近读过的那个主题。<br />\r\n<br />\r\n要清除所有Cookie，您可以点击<a href=\"misc.php?action=clearcookies\">这里</a>。', 1, 1, 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, '登录与退出', '如何登录与退出(注销)。', '当您登录的时候，您可以设定一个Cookie在你的电脑上，这样您每次无需输入用户名和密码就可以浏览论坛。退出时会清除Cookie，以确保其他人不会以您的身份浏览论坛。<br />\r\n<br />\r\n若要登录，只需点击论坛上方的登录链接。若要退出，在相同的地方点击退出链接即可。如果无法退出，可以点击<a href=\"misc.php?action=clearcookies\">这里</a>清除cookie，效果是一样的。', 1, 1, 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, '发表新话题', '在论坛中发起一个新主题。', '当您进入一个您感兴趣的版块并打算发表一个新的话题(或主题)时，您只要点击版面顶部或底部标为“发帖”的按钮即可。请注意您不一定在所有版块都有权限发表新话题，有时候管理员将某些特定论坛版面用于内部讨论或仅用于存档归档。', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, '发表回复', '回复论坛中一个话题。', '在您浏览论坛的过程中，您可能碰到某些话题(或主题)想进行回复。很简单，您只要在主题浏览页的上部或下部点击标为“回复”的按钮即可。请注意管理员有可能会对某些特殊的论坛版面作出限制，从而只有特定的用户可以发表。<br />\r\n<br />\r\n此外，管理员或版主可能会对一个主题进行锁定，这意味着不能再回复这个主题。如果没有管理员或版主的帮助，普通用户是没有办法打开这样的话题的。', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'MyCode', '学习如何使用 MyCode 增强您的帖子。', '您可以使用MyCode，一个简化版的HTML，以便在您的帖子中使用特定的效果。\r\n<p><br />\r\n[b]这是粗体[/b]<br />\r\n&nbsp;&nbsp;&nbsp;<b>这是粗体</b>\r\n<p>\r\n[i]这是斜体[/i]<br />\r\n&nbsp;&nbsp;&nbsp;<i>这是斜体</i>\r\n<p>\r\n[u]这是下划线[/u]<br />\r\n&nbsp;&nbsp;&nbsp;<u>这是下划线</u>\r\n<p><br />\r\n[url]http://www.mybbchina.net/[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">http://www.mybbchina.net/</a>\r\n<p>\r\n[url=http://www.mybbchina.net/]MyBBchina.net[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">MyBBchina.net</a>\r\n<p>\r\n[email]example@example.com[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">example@example.com</a>\r\n<p>\r\n[email=example@example.com]给我发E-mail！[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">给我发E-mail！</a>\r\n<p>\r\n[email=example@example.com?subject=spam]包含标题的 E-mail[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com?subject=spam\">包含标题的 E-mail</a>\r\n<p><br />\r\n[quote]这里是引用文字[/quote]<br />\r\n&nbsp;&nbsp;&nbsp;<quote>这里是引用文字</quote>\r\n<p>\r\n[code]这里是代码[/code]<br />\r\n&nbsp;&nbsp;&nbsp;<code>这里是代码</code>\r\n<p><br />\r\n[img]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">\r\n<p>\r\n[img=50x50]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">\r\n<p><br />\r\n[color=red]这是红色[/color]<br />\r\n&nbsp;&nbsp;&nbsp;<font color=\"red\">这是红色</font>\r\n<p>\r\n[size=3]这是3号字[/size]<br />\r\n&nbsp;&nbsp;&nbsp;<font size=\"3\">这是3号字</font>\r\n<p>\r\n[font=Tahoma]字体是Tahoma[/font]<br />\r\n&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">字体是Tahoma</font>\r\n<p><br />\r\n[align=center]这是居中[/align]<div align=\"center\">这是居中</div>\r\n<p>\r\n[align=right]这是右对齐[/align]<div align=\"right\">这是右对齐</div>\r\n<p><br />\r\n[list]<br />\r\n[*]列表项 #1<br />\r\n[*]列表项 #2<br />\r\n[*]列表项 #3<br />\r\n[/list]<br />\r\n<ul>\r\n<li>列表项 #1</li>\r\n<li>列表项 #2</li>\r\n<li>列表项 #3</li>\r\n</ul><p><font size=1>您也可以用 [list=1] 创建一个数字顺序列表，用 [list=a] 创建字母顺序列表。</size>', 1, 1, 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, '用户维护', '维护论坛帐户的基本说明。', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, '发帖', '发帖，跟贴，和论坛基本使用。', 1, 1, 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(1, 'Bug', 'images/icons/bug.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(2, '感叹', 'images/icons/exclamation.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(3, '问题', 'images/icons/question.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(4, '微笑', 'images/icons/smile.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(5, '悲伤', 'images/icons/sad.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(6, '眨眼', 'images/icons/wink.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(7, '大笑', 'images/icons/biggrin.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(8, '舔舌头', 'images/icons/tongue.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(9, '砖块', 'images/icons/brick.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(10, '心', 'images/icons/heart.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(11, '信息', 'images/icons/information.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(12, '灯泡', 'images/icons/lightbulb.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(13, '音乐', 'images/icons/music.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(14, '照片', 'images/icons/photo.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(15, '彩虹', 'images/icons/rainbow.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(16, '震惊', 'images/icons/shocked.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(17, '星', 'images/icons/star.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(18, '鄙视', 'images/icons/thumbsdown.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(19, '夸奖', 'images/icons/thumbsup.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(20, '视频', 'images/icons/video.gif');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (1, '位置', '生活在那里?', 1, 'text', 0, 255, 0, 1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (2, '小传', '输入简短的内容以介绍自己，如生活故事等。', 2, 'textarea', 0, 0, 0, 1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (3, '性别', '请从下面的列表选择您的性别。', 0, 'select\n秘密\n男\n女\n其它', 0, 0, 0, 1, 0);";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(1, '微笑', ':)', 'images/smilies/smile.gif', 1, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(2, '眨眼', ';)', 'images/smilies/wink.gif', 2, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(3, '酷', ':cool:', 'images/smilies/cool.gif', 3, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(4, '大笑', ':D', 'images/smilies/biggrin.gif', 4, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(5, '舔舌头', ':P', 'images/smilies/tongue.gif', 5, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(6, '转眼珠', ':rolleyes:', 'images/smilies/rolleyes.gif', 6, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(7, '害羞', ':shy:', 'images/smilies/shy.gif', 7, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(8, '悲伤', ':(', 'images/smilies/sad.gif', 8, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(9, 'At', ':at:', 'images/smilies/at.gif', 9, 0);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(10, '天使', ':angel:', 'images/smilies/angel.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(11, '生气', ':@', 'images/smilies/angry.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(12, '脸红', ':blush:', 'images/smilies/blush.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(13, '困惑', ':s', 'images/smilies/confused.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(14, '狡猾', ':dodgy:', 'images/smilies/dodgy.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(15, '感叹', ':exclamation:', 'images/smilies/exclamation.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(16, '心', ':heart:', 'images/smilies/heart.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(17, '恩?', ':huh:', 'images/smilies/huh.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(18, '想法', ':idea:', 'images/smilies/lightbulb.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(19, '瞌睡', ':sleepy:', 'images/smilies/sleepy.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(20, '无法决定', ':-/', 'images/smilies/undecided.gif', 0, 1);";


$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Google','Googlebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Lycos','lycos');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask.com','Teoma');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('What You Seek','whatuseek');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Internet Archive','archive_crawler');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa Internet','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Bing','msnbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yahoo!','Slurp');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Cuil','twiceler');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Baidu','Baiduspider');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('1','calendar','<lang:group_calendar>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('2','editpost','<lang:group_editpost>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('3','forumbit','<lang:group_forumbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('4','forumjump','<lang:group_forumjump>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('5','forumdisplay','<lang:group_forumdisplay>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('6','index','<lang:group_index>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('7','error','<lang:group_error>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('8','memberlist','<lang:group_memberlist>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('9','multipage','<lang:group_multipage>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('10','private','<lang:group_private>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('11','portal','<lang:group_portal>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('12','postbit','<lang:group_postbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('13','redirect','<lang:group_redirect>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('14','showthread','<lang:group_showthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('15','usercp','<lang:group_usercp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('16','online','<lang:group_online>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('17','moderation','<lang:group_moderation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('18','nav','<lang:group_nav>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('19','search','<lang:group_search>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('20','showteam','<lang:group_showteam>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('21','reputation','<lang:group_reputation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('22','newthread','<lang:group_newthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('23','newreply','<lang:group_newreply>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('24','member','<lang:group_member>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('25','warnings','<lang:group_warning>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('26','global','<lang:group_global>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('27','header','<lang:group_header>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('28','managegroup','<lang:group_managegroup>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('29','misc','<lang:group_misc>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('30','modcp','<lang:group_modcp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('31','php','<lang:group_php>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('32','polls','<lang:group_polls>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('33','post','<lang:group_post>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('34','printthread','<lang:group_printthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('35','report','<lang:group_report>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('36','smilieinsert','<lang:group_smilieinsert>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('37','stats','<lang:group_stats>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('38','xmlhttp','<lang:group_xmlhttp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('39','footer','<lang:group_footer>');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, '新手', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, '初级会员', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, '中级会员', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, '高级会员', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, '英雄', 5, '');";

?>