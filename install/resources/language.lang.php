<?php
/* INSTALL LANGUAGE VARIABLES */
$l['none'] = '无';
$l['not_installed'] = '未安装';
$l['installed'] = '已安装';
$l['not_writable'] = '不可写';
$l['writable'] = '可写';
$l['done'] = '完成';
$l['next'] = '下一步';
$l['error'] = '错误';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = '重新检测';

$l['title'] = "MyBB中文版安装向导";
$l['welcome'] = '欢迎';
$l['license_agreement'] = '许可协议';
$l['req_check'] = '安装环境检测';
$l['db_config'] = '配置数据库';
$l['table_creation'] = '建立表结构';
$l['data_insertion'] = '导入数据';
$l['theme_install'] = '导入模板风格';
$l['board_config'] = '配置论坛';
$l['admin_user'] = '创建管理员帐号';
$l['finish_setup'] = '完成安装';

$l['table_population'] = '导入数据';
$l['theme_installation'] = '导入模板风格';
$l['create_admin'] = '创建管理员帐号';

$l['already_installed'] = "MyBB已安装";
$l['mybb_already_installed'] = "<p>欢迎使用 MyBB {1} 中文版安装向导。系统检测到您已经安装过MyBB。</p>
<p>请从下面选择一个合适的操作：</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>更新至 {1} <span style=\"font-size: 80%; color: maroon;\">(推荐)</span></h3>
	<p>这个选项更新版本至 {1}。</p>
	<p>如果想保留主题、帖子、用户和其他信息，您应该选择此选项。</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"更新版本至 {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>全新安装</h3>
	<p>该选项将会<span style=\"color: red;\">删除当前论坛所有数据</span>并全新安装。</p>
	<p>如果您想重新开始，请选择此选项。</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('确定要全新安装？\\n\\n这将删除当前论坛所有数据，并且不可逆！');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"安装MyBB {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB检测到正在从 \"Upload\" 目录运行本软件。</h3>
	<p>当然，这样并没有错，但是我们强烈建议您重命名 \"Upload\" 目录。<br /><br />更多信息请访问 <a href=\"http://community.mybbchina.net/thread-3.html\" target=\"_blank\">wiki page</a>。</p>
</div>";

$l['welcome_step'] = '<p>欢迎使用MyBB {1} 中文版安装向导. 本向导将协助你安装和配置MyBB.</p>
<p>你已经上传了MyBB的所有文件,现在需要建立数据库和导入数据. 下面是完成安装所需要的步骤.</p>
<ul>
	<li>MyBB安装环境检测</li>
	<li>配置数据库</li>
	<li>建立数据表</li>
	<li>导入默认数据</li>
	<li>导入默认模板风格</li>
	<li>建立一个管理员帐号</li>
	<li>论坛基本设置</li>
</ul>
<p>在成功完成每一步后, 点击下一步按钮进入下一步.</p>
<p>点击下一步按钮查看MyBB许可协议.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> 发送关于你的服务器环境的匿名统计信息給 MyBB Group</label> (<a href="http://wiki.mybboard.net/index.php/Anonymous_Statistics" style="color: #555;" target="_blank"><small>什么信息将被发送？(英文)</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>点击下一步, 表明你同意上面MyBB许可协议中的条款.</strong></p>';


$l['req_step_top'] = '<p>在你安装MyBB之前, 必须满足以下要求.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">需求检测</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">需求</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">PHP版本:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">支持的数据库引擎:</td>
			<td class="last alt_col">{2}</td>
		<tr>
		<tr class="alt_row">
			<td class="first">支持的编码转换扩展:</td>
			<td class="last alt_col">{3}</td>
		<tr>
			<td class="first">PHP XML 扩展:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">配置文件是否可写:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">设置文件是否可写:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">缓存目录是否可写:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">文件上传目录是否可写:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">头像上传目录是否可写:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>祝贺您，您满足运行MyBB 。</strong></p>
<p>单击下一步继续安装过程。</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB需要PHP 5.1.0 或者更高版本。您当前安装的是 {1} 。';
$l['req_step_error_dboptions'] = 'MyBB需要一个或多个合适的数据库扩展以便进行安装。您的服务器没有一个可用。';
$l['req_step_error_xmlsupport'] = 'MyBB需要PHP支持XML数据处理能力。请参阅<a href="http://www.php.net/xml" target="_blank">PHP.net</a>以获取更多信息。';
$l['req_step_error_configdefaultfile'] = '配置文件 (inc/config.default.php) 无法重命名。请手动将 <u>config.default.php</u> 文件重命名为 <u>config.php</u> 并设置权限为可写或者联系 <a href="http://www.mybbchina.net/" targert="_blank">MyBB中文支持论坛</a>。';
$l['req_step_error_configfile'] = '配置文件 (inc/config.php) 不可写。请更改<a href="http://www.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_settingsfile'] = '设置文件 (inc/settings.php) 不可写。请更改<a href="http://www.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_cachedir'] = '缓存目录 (cache/) 不可写。请更改<a href="http://community.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_uploaddir'] = '上传目录 (uploads/) 不可写。请更改<a href="http://community.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_avatardir'] = '头像目录 (uploads/avatars/) 不可写。请更改<a href="http://community.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_cssddir'] = 'The css directory (css/) 不可写。请更改<a href="http://community.mybbchina.net/thread-5.html" target="_blank">chmod</a>权限为可写。';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>错误</h3>
<p>MyBB安装无法继续，因为不符合MyBB要求。请更正下面的错误，然后再试一次：</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>现在配置数据库， MyBB将使用以下信息进行数据库连接。如果您没有此信息，请联系您的虚拟主机提供商。</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">配置数据库</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">数据库设置</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">数据库引擎：</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<!--
<p><font color=red>强烈推荐保持默认数据表编码！</font></p>
<p><font color=red>再一次强烈推荐使用默认数据表编码——“UTF-8 Unicode”，而无论你建立的是何种文字的论坛！！！</font></p>
-->
<p>如果你确定这些数据都是正确的，点击下一步继续。</p>';

$l['database_settings'] = "数据库设置";
$l['database_path'] = "数据库路径：";
$l['database_host'] = "数据库服务器主机名：";
$l['database_user'] = "数据库用户名：";
$l['database_pass'] = "数据库密码：";
$l['database_name'] = "数据库名称：";
$l['table_settings'] = "数据表设置";
$l['table_prefix'] = "数据表前缀：";
$l['table_encoding'] = "数据表编码";

$l['db_step_error_config'] = '<div class="error">
<h3>错误</h3>
<p>你提供的数据库配置信息似乎有一个或多个错误：</p>
{1}
<p>一旦纠正上述错误，安装过程将继续。</p>
</div>';
$l['db_step_error_invalidengine'] = '您选择了一个无效的数据库引擎。请您从下面的列表中选择。';
$l['db_step_error_noconnect'] = '无法使用指定的用户名和密码连接数据库服务器 \'{1}\' 。您确定服务器名称和用户名以及密码是正确的？';
$l['db_step_error_nodbname'] = '无法选择数据库 \'{1}\'。您确定它存在并且指定的用户名和密码对其拥有访问权限？';
$l['db_step_error_missingencoding'] = '您还没有选择编码方式。请在继续前确定您选择的编码 (如果不确定请选择 \'UTF-8 Unicode\' )';
$l['db_step_error_sqlite_invalid_dbname'] = '您无法为SQLite数据库使用相对的URLs。请使用文件系统路径 (例如: /home/user/database.db)';
$l['db_step_error_invalid_tableprefix'] = '你只能使用字母、数字、下划线（_）作为表前缀。继续之前，请使用一个有效的表前缀。';
$l['db_step_error_tableprefix_too_long'] = '表前缀只能小于等于40个字符继续之前，请使用短一点的表前缀。';

$l['tablecreate_step_connected'] = '<p>成功连接指定的数据库服务器和数据库</p>
<p>数据库引擎： {1} {2}</p>
<p>建立MyBB数据表。</p>';
$l['tablecreate_step_created'] = '建立表 {1}...';
$l['tablecreate_step_done'] = '<p>所有表已经建立，单击下一步，导入数据。</p>';

$l['populate_step_insert'] = '<p>导入默认数据......</p>';
$l['populate_step_inserted'] = '<p>已成功导入默认数据。单击下一步导入MyBB默认模板和风格。</p>';


$l['theme_step_importing'] = '<p>加载并导入风格和模板文件...</p>';
$l['theme_step_imported'] = '<p>默认的风格和模板文件已成功导入。单击下一步配置论坛基本选项。</p>';


$l['config_step_table'] = '<p>现在您可以为您的论坛设定基本设置，如论坛名称，网址，您的网站的细节，以及您的 "cookie" 域和路径。这些设置以后可以通过MyBB管理控制面板很容易地改变。</p>
		<div class="border_wrapper">
			<div class="title">论坛配置</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">论坛细节</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">论坛名称：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">论坛网址(结尾不需要斜线)：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">网站细节</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">网站名称：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">网站网址：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Cookie设置<a title="这是什么？" target="_blank" href="http://community.mybbchina.net/thread-2.html">(?)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie域：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Cookie路径：</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">联系方式(页脚显示)</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">Email:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>一旦你正确输入了上述内容，并准备继续，请单击下一步。</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>错误</h3>
<p>您提供的配置似乎有一个或多个错误：</p>
{1}
<p>一旦纠正上述错误，安装过程将继续。</p>
</div>';
$l['config_step_error_url'] = '您没有输入论坛网址。';
$l['config_step_error_name'] = '您没有输入论坛名称。';


$l['admin_step_setupsettings'] = '<p>建立基本论坛设置...</p>';
$l['admin_step_insertesettings'] = '<p>在{2}个组中导入了{1}个设置。</p>
<p>使用用户自定义的值更新设置。</p>';
$l['admin_step_insertedtasks'] = '<p>导入了{1}个计划任务</p>';
$l['admin_step_insertedviews'] = '<p>导入了{1}位管理员</p>';
$l['admin_step_createadmin'] ='<p>您必须先建立一个初步的管理员帐号以便您登录和管理MyBB论坛。请填写以下必填项创建这个帐号。</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">管理员帐号</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">帐号细节</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">用户名：</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" autocomplete="off" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">密码：</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off"  /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">重新输入密码：</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">联系方式</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">Email:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>一旦你正确输入了上述内容，并准备继续，请单击下一步。</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>错误</h3>
<p>您提供的配置似乎有一个或多个错误：</p>
{1}
<p>一旦纠正上述错误，安装过程将继续。</p>
</div>';
$l['admin_step_error_nouser'] = '用户名为空';
$l['admin_step_error_nopassword'] = '密码为空';
$l['admin_step_error_nomatch'] = '两次输入的密码不一致';
$l['admin_step_error_noemail'] = 'Email为空';

$l['done_step_usergroupsinserted'] = "<p>导入用户组...";
$l['done_step_admincreated'] = '<p>创建管理员帐号...';
$l['done_step_adminoptions'] = '<p>设置管理员权限...';
$l['done_step_cachebuilding'] = '<p>建立数据缓存...';
$l['done_step_success'] = '<p class="success">您的MyBB已成功安装并且正确配置。</p>
<p class="success"><a href="cnpack.php" target=_blank>点击这里访问本地化的中文资源包安装向导(推荐)</a></p>
<p><strong><span style="color:red">强烈建议访问论坛前删除此安装目录 \'install\'</span></strong></p>
<p>MyBB中文团队感谢您的支持，欢迎加入<a href="http://www.mybbchina.net" target="_blank">MyBB中文站</a>，在这里您可以寻求帮助或者成为我们中的一员。</p>';
$l['done_step_locked'] = '<p>您的安装文件已经被锁定，要解除锁定，请删除安装文件所在目录下的 \'lock\' 文件。</p><p>您现在可以访问论坛<a href="../index.php" target=_blank>MyBB</a>或者访问后台<a href="../admin/index.php" target=_blank>管理员控制面板</a>。</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">强烈建议访问论坛前删除此安装目录 \'install\'</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>请确认您订阅了更新邮件列表！</strong></p><p>每次我们发布了新版本的MyBB ，无论是发布一项新功能或安全性更新，我们都会通过邮件列表发出信息，以提醒您及时更新。</p><p>这有助于让论坛保持安全，并确保您运行的是最新和最伟大的MyBB版本！</p><p><a href="http://mybb.com/mailing-list" target="_blank">订阅更新邮件列表！(官方英文)</a></p><p><a href="http://community.mybbchina.net/thread-4.html" target="_blank">订阅更新邮件列表！(MyBB中文站)</a></p></div>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "更新";
$l['upgrade_welcome'] = "<p>欢迎使用MyBB{1}更新向导。</p><p>继续之前，请确保您知道从哪个版本升级到哪个版本，然后从下面选择。</p><p><strong>我们强烈建议您完整备份数据库和文件，再尝试升级，</strong>以便出现问题可以轻松地恢复到以前的版本。此外，确保升级之前已经备份完毕。</p><p>请确定升级过程中只点击一次下一步按钮。页面加载时间根据论坛规模大小可能不同。</p><p>当你准备好了，选择要转换的旧版本然后点击下一步。</p>";
$l['upgrade_templates_reverted'] = '恢复模板';
$l['upgrade_templates_reverted_success'] = "<p>所有模板成功恢复，单击下一步继续。</p>";
$l['upgrade_settings_sync'] = '设置同步';
$l['upgrade_settings_sync_success'] = "<p>设置已同布至最新版本</p><p>插入 {1} 个新设置，插入 {2} 个新设置组。</p><p>更新完成，单击下一步继续。</p>";
$l['upgrade_datacache_building'] = '建立数据缓存';
$l['upgrade_building_datacache'] = '<p>建立缓存...';
$l['upgrade_continue'] = '单击下一步继续';
$l['upgrade_locked'] = "<p>安装文件被锁定，要解除锁定，请删除此目录下\'lock\'文件。</p><p>现在可以访问论坛 <a href=\"../index.php\" target=_blank>MyBB</a> 或者后台 <a href=\"../{1}/index.php\" target=_blank>管理员控制面板</a>。</p>";
$l['upgrade_removedir'] = '强烈建议访问论坛前删除此安装目录。';
$l['upgrade_congrats'] = "<p>祝贺，已成功更新至 {1}。</p><p class=success><a href=cnpack.php target=_blank>点击这里访问本地化的中文资源包安装向导(推荐)</a></p><p><strong><span style=\"color:red\">强烈建议访问论坛前删除此安装目录 'install'</span></strong></p>{2}<p><strong>接下来干什么？</strong></p><ul><li>请在管理员控制面板中使用 '查找更新过的模板' 工具找到在这个升级过程中更新的自定义模板。重新编辑改动过的地方或者还原为默认模板。</li><li>确保您的论坛功能完整。</li></ul>";
$l['upgrade_template_reversion'] = "恢复模板警告";
$l['upgrade_template_reversion_success'] = "<p>所有必要的数据库修改成功。</p><p>此次更新将会覆盖所有模板， 点击下一步之前请备份所有自定义模板。";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> 发送关于你的服务器环境的匿名统计信息給 MyBB Group</label> (<a href=\"http://wiki.mybboard.net/index.php/Anonymous_Statistics\" style=\"color: #555;\" target=\"_blank\"><small>什么信息将被发送？(英文)</small></a>)</p>";

/* Error messages */
$l['locked'] = '安装程序目前被锁住，请从安装目录删除 \'lock\' 文件以便继续。';
?>