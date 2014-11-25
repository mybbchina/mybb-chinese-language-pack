<?php
/**
 * MyBB中文资源包 1.6
 * 版权所有 2010 MyBB中文站, All Rights Reserved
 *
 * 网站: http://www.mybbchina.net
 *
 * $Id: cnpack.php 2010-8-12 18:57 MyBB中文站 $
 */
error_reporting(E_ALL & ~E_NOTICE);
header("Content-Type: text/html; charset=UTF-8");

define('MYBB_ROOT', dirname(dirname(__FILE__))."/");
define("INSTALL_ROOT", dirname(__FILE__)."/");
define("TIME_NOW", time());
define('IN_MYBB', 1);
define("IN_CNPACK", 1);

require_once MYBB_ROOT."inc/class_core.php";
$mybb = new MyBB;

require_once MYBB_ROOT."inc/config.php";

$orig_config = $config;

if(!is_array($config['database']))
{
	$config['database'] = array(
		"type" => $config['dbtype'],
		"database" => $config['database'],
		"table_prefix" => $config['table_prefix'],
		"hostname" => $config['hostname'],
		"username" => $config['username'],
		"password" => $config['password'],
		"encoding" => $config['db_encoding'],
	);
}
$mybb->config = &$config;

// Include the files necessary for installation
require_once MYBB_ROOT."inc/class_timers.php";
require_once MYBB_ROOT."inc/functions.php";
require_once MYBB_ROOT."inc/class_xml.php";
require_once MYBB_ROOT.'inc/class_language.php';

$lang = new MyLanguage();
$lang->set_path(MYBB_ROOT.'install/resources/');
$lang->load('language');

require_once MYBB_ROOT."inc/db_{$config['database']['type']}.php";
switch($config['database']['type'])
{
	case "sqlite3":
		$db = new DB_SQLite3;
		break;
	case "sqlite2":
		$db = new DB_SQLite2;
		break;
	case "pgsql":
		$db = new DB_PgSQL;
		break;
	case "mysqli":
		$db = new DB_MySQLi;
		break;
	default:
		$db = new DB_MySQL;
}
	
// Connect to Database
define('TABLE_PREFIX', $config['database']['table_prefix']);
$db->connect($config['database']);
$db->set_table_prefix(TABLE_PREFIX);
$db->type = $config['database']['type'];

// Load Settings
if(file_exists(MYBB_ROOT."inc/settings.php"))
{
	require_once MYBB_ROOT."inc/settings.php";
}

if(!file_exists(MYBB_ROOT."inc/settings.php") || !$settings)
{
	if(function_exists('rebuild_settings'))
	{
		rebuild_settings();
	}
	else
	{
		$options = array(
			"order_by" => "title",
			"order_dir" => "ASC"
		);
		
		$query = $db->simple_select("settings", "value, name", "", $options);
		while($setting = $db->fetch_array($query))
		{
			$setting['value'] = str_replace("\"", "\\\"", $setting['value']);
			$settings[$setting['name']] = $setting['value'];
		}
	}	
}

$settings['wolcutoff'] = $settings['wolcutoffmins']*60;
$settings['bbname_orig'] = $settings['bbname'];
$settings['bbname'] = strip_tags($settings['bbname']);

// Fix for people who for some specify a trailing slash on the board URL
if(substr($settings['bburl'], -1) == "/")
{
	$settings['bburl'] = my_substr($settings['bburl'], 0, -1);
}

$mybb->settings = &$settings;
$mybb->parse_cookies();

require_once MYBB_ROOT."inc/class_datacache.php";
$cache = new datacache;

$mybb->cache = &$cache;

require_once MYBB_ROOT."inc/class_session.php";
$session = new session;
$session->init();
$mybb->session = &$session;

// Include the necessary contants for installation
$grouppermignore = array("gid", "type", "title", "description", "namestyle", "usertitle", "stars", "starimage", "image");
$groupzerogreater = array("pmquota", "maxreputationsday", "attachquota");
$displaygroupfields = array("title", "description", "namestyle", "usertitle", "stars", "starimage", "image");
$fpermfields = array("canview", "candlattachments", "canpostthreads", "canpostreplys", "canpostattachments", "canratethreads", "caneditposts", "candeleteposts", "candeletethreads", "caneditattachments", "canpostpolls", "canvotepolls", "cansearch");

// Include the installation resources
require_once INSTALL_ROOT."resources/output.php";
$output = new installerOutput;
$output->script = "cnpack.php";
$output->title = "MyBB中文版更新向导";
	$output->steps = array(
		'intro' => "安装说明",
		'docnpack' => "选择组件",
		'docnpack1' => "安装中文资源包",
		'buildcaches' => "更新缓存",
		'finished' => "完成",
	);
	
	if(!isset($mybb->input['action']))
	{
		$mybb->input['action'] = 'intro';
	}
	
	if(!$mybb->input['action'] || $mybb->input['action'] == "intro")
	{
		$output->print_header('欢迎安装MyBB中文资源包', 'welcome');
		$output->print_contents($lang->sprintf("<p>欢迎使用MyBB{1}中文资源包安装向导。</p><p>本向导将协助您安装您需要的 <i>部分</i> 或 <i>全部</i> 本地化中文资源组件。下面是完成安装所需要的步骤<ol><li>选择组件</li><li>安装组件</li><li>更新缓存</li><li>完成</li></ol></p><p>如果您之前安装过部分或全部该中文资源包所包含的组件，那么本向导会自动安装您选择的新的组件或更新已存在的组件。</p><p>请在安装过程中只点击一次下一步按钮。页面加载时间根据论坛规模大小可能不同。</p><p>当你准备好了，点击下一步。</p>", $mybb->version));
		$output->print_footer("docnpack");
	}
	elseif($mybb->input['action'] == "docnpack")
	{
		$output->print_header('选择组件', 'welcome');
		//echo '<li>添加自定义MyCode - "[flash][/flash], [mp3][/mp3], [wma][/wma], [wmv][/wmv], [ra][/ra], [rm][/rm]等"<br /></li>';
		//echo '<li>添加帮助文档 - "自定义MyCode"<br /></li>';

?>
<style type="text/css">
#subbox {
	padding-left:20px;
}
#subbox label {
	font-weight:normal;
}
</style>
		<p>请在下面勾选你希望安装的选项，然后点击下一步</p>
		<ol>
		<input name='chkAll' type='checkbox' id='chkAll' onclick='CheckAll(this.form)' value='checkbox' checked />全选
			<li>
				<input type="checkbox" name="item[]" id="ck1" value="datetime" checked />
				<label for="ck1">设置默认时间格式 - "2008年11月13日 17:26"</label>
			</li>
			<li>
				<input type="checkbox" name="item[]" id="ck2" value="regdate" checked />
				<label for="ck2">设置默认注册时间格式 - "2008年11月"</label>
			</li>
			<li>
				<input type="checkbox" name="item[]" id="ck3" value="timezone" checked />
				<label for="ck3">设置默认时区 - "+8"</label>
			</li>
			<li>
				<input type="checkbox" id="ck4" checked forcheckboxgroup="ck4g" />
				<label for="ck4">添加用户个人资料字段</label>
				<div id="subbox">
				<input type="checkbox" name="item[]" id="ck4_1" value="qq" checked group="ck4g" />
				<label for="ck4_1">QQ</label>
				</div>
			</li>
			<li>
				<input type="checkbox" id="ck5" checked forcheckboxgroup="ck5g" />
				<label for="ck5">添加中文搜索引擎蜘蛛机器人</label>
				<div id="subbox">
				<!--<input type="checkbox" name="item[]" id="ck5_1" value="baidubot" checked group="ck5g" />
				<label for="ck5_1">百度</label>
				<br />-->
				<input type="checkbox" name="item[]" id="ck5_2" value="sosobot" checked group="ck5g" />
				<label for="ck5_2">搜搜</label>
				<br />
				<input type="checkbox" name="item[]" id="ck5_3" value="sogoubot" checked group="ck5g" />
				<label for="ck5_3">搜狗</label>
				<br />
				<input type="checkbox" name="item[]" id="ck5_4" value="yodaobot" checked group="ck5g" />
				<label for="ck5_4">有道</label>
				</div>
			</li>
		</ol>
<script type="text/javascript">
function CheckboxGroup(){
var arrelement = document.all;
var i=0;
while(i<arrelement.length){
var forgroupattrib = arrelement[i].getAttribute('forcheckboxgroup');
if(forgroupattrib != null && forgroupattrib != ''){
arrelement[i].setAttribute('groupmember',_getGroupMember(arrelement[i]));
if(arrelement[i].tagName.toLowerCase() == 'input' && arrelement[i].type == 'checkbox'){
arrelement[i].onclick=function(){
var groupmember = this.getAttribute('groupmember');
var i = 0;
while(i<groupmember.length){
groupmember[i].checked = this.checked;
i++;
}
}
}
_setState(arrelement[i]);
}
i++;
}
}

function _getGroupMember(o){
var groupname = o.getAttribute('forcheckboxgroup');
var items = new Array;
var inputs = document.getElementsByTagName('input');
var i=0;
while(i<inputs.length){
if(inputs[i].type == 'checkbox'){
var groupattrib = inputs[i].getAttribute('group');
if(groupattrib == groupname){
items[items.length] = inputs[i];
var master = inputs[i].getAttribute('groupmaster');
if (master == null) {
master = new Array;
master[0] = o.uniqueID;
inputs[i].setAttribute('groupmaster', master);
}
else{
master[master.length] = o.uniqueID;
}
inputs[i].onpropertychange = function(){
if (event.propertyName == 'checked') {
var arro = this.getAttribute('groupmaster');
var i = 0;
while (i < arro.length) {
_setState(document.getElementById(arro[i]));
i++;
}
}
}
}
}
i++;
}
return items;
}

function _setState(o){
var master = o;
if(master!=null){
var chkselall = true;
var chknosel = true;
var groupmember = master.getAttribute('groupmember');
var i = 0;
while(i<groupmember.length){
if(chkselall)chkselall = groupmember[i].checked;
if(chknosel)chknosel = !groupmember[i].checked;
i++;
}
if(master.tagName.toLowerCase() == 'input'&&master.type=='checkbox'){
if (chkselall) {
master.indeterminate = false;
master.checked = true;
}
if (chknosel) {
master.indeterminate = false;
master.checked = false;
}
if(!chkselall&&!chknosel)master.indeterminate = true;
}
else{
master.disabled = chknosel;
}
}
}

window.attachEvent('onload',CheckboxGroup);

function unselectall(){
if(document.myform.chkAll.checked){
document.myform.chkAll.checked = document.myform.chkAll.checked&0;
}
}
function CheckAll(form){
for (var i=0;i<form.elements.length;i++){
var e = form.elements[i];
if (e.Name != 'chkAll'&&e.disabled==false)
e.checked = form.chkAll.checked;
}
}

</script>

<?php
		echo '<p>点击下一步安装</p>';
		$output->print_footer("docnpack1");
	}
	if($mybb->input['action'] == "docnpack1")
	{
		$output->print_header('安装MyBB中文资源包', 'welcome');
		$item = $_POST['item'];
		foreach($item as $val) {
			$value .= $val.',';
		}
		$value = substr($value, 0, -1);
		echo '<ul>';
		cnpack($value);
		echo '</ul>';
		if(function_exists('rebuild_settings'))
		{
			rebuild_settings();
		}
		else
		{
			$options = array(
				"order_by" => "title",
				"order_dir" => "ASC"
			);
		
			$query = $db->simple_select("settings", "value, name", "", $options);
			while($setting = $db->fetch_array($query))
			{
				$setting['value'] = str_replace("\"", "\\\"", $setting['value']);
				$settings[$setting['name']] = $setting['value'];
			}
		}
		echo '<p>设置保存完毕</p>';
		echo '<p>点击下一步更新缓存</p>';
		$output->print_footer("buildcaches");
	}
	elseif($mybb->input['action'] == "buildcaches")
	{
		$runfunction = "buildcaches";
	}
	elseif($mybb->input['action'] == "finished")
	{
		$output->print_header('中文资源包安装完成', 'finish');
		echo '<p class="success">中文资源包安装完成</p>';
		echo $lang->done_step_dirdelete;
		$output->print_footer("");
	}
	
	if(function_exists($runfunction))

	{
		$runfunction();
	}

function buildcaches()
{
	global $db, $output, $cache, $lang, $mybb;

	$output->print_header($lang->upgrade_datacache_building);

	$contents .= $lang->upgrade_building_datacache;
	require_once MYBB_ROOT."inc/class_datacache.php";
	$cache = new datacache;
	$cache->update_version();
	$cache->update_attachtypes();
	$cache->update_smilies();
	$cache->update_badwords();
	$cache->update_usergroups();
	$cache->update_forumpermissions();
	$cache->update_stats();
	$cache->update_moderators();
	$cache->update_forums();
	$cache->update_usertitles();
	$cache->update_reportedposts();
	$cache->update_mycode();
	$cache->update_posticons();
	$cache->update_update_check();
	$cache->update_tasks();
	$cache->update_spiders();
	$cache->update_bannedips();
	$cache->update_banned();
	$cache->update_birthdays();
	$cache->update_most_replied_threads();
	$cache->update_most_viewed_threads();

	$contents .= $lang->done."</p>";

	$output->print_contents("$contents<p>".$lang->upgrade_continue."</p>");
	$output->print_footer("finished");
}

function cnpack($string) {
	global $db;
	
	$arr = explode(',', $string);
	
	//设置日期时间格式
	if (in_array('datetime', $arr)) {
		$inserts = "UPDATE mybb_settings SET value = 'Y年m月d日' WHERE sid = 10 LIMIT 1 ;";
		$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
		$db->query($sql);
		echo '<li>设置日期格式......完成</li>';
		
		$inserts = "UPDATE mybb_settings SET value = 'H:i' WHERE sid = 11 LIMIT 1 ;";
		$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
		$db->query($sql);
		echo '<li>设置时间格式......完成</li>';
	}
	
	//设置注册日期格式
	if (in_array('regdate', $arr)) {
		$inserts = "UPDATE mybb_settings SET value = 'Y年m月' WHERE sid = 12 LIMIT 1 ;";
		$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
		$db->query($sql);
		echo '<li>设置注册日期格式......完成</li>';
	}
	
	//设置时区
	if (in_array('timezone', $arr)) {
		$inserts = "UPDATE mybb_settings SET value = '+8' WHERE sid = 13 LIMIT 1 ;";
		$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
		$db->query($sql);
		echo '<li>设置时区......完成</li>';
	}
	
	//安装QQ自定义字段
	if (in_array('qq', $arr)) {
		$query = $db->simple_select("profilefields", "fid", "name='QQ'");
		$result = $db->fetch_array($query);
		if ($result) {
			$inserts = "UPDATE mybb_profilefields SET name='QQ',description='输入您的QQ号',type='text',maxlength=13 WHERE fid = ".$result['fid']." LIMIT 1 ;";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			
			$inserts = "ALTER TABLE `mybb_userfields` MODIFY `fid".$result['fid']."` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置自定义字段QQ......完成</li>';
		}
		else {
			$query = $db->simple_select("profilefields", "COUNT(*) as rows");
			$rows = $db->fetch_field($query, "rows");
			$inserts = "INSERT INTO mybb_profilefields (name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES ('QQ', '输入您的QQ号', $rows+1, 'text', 0, 13, 0, 1, 0);";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			$gid = $db->insert_id();
		
			$inserts = "ALTER TABLE `mybb_userfields` ADD `fid".$gid."` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置自定义字段QQ......完成</li>';
		}
	}
	

	//安装搜搜蜘蛛
	if (in_array('sosobot', $arr)) {
		$query = $db->simple_select("spiders", "sid", "useragent='Sosospider'");
		$result = $db->fetch_array($query);
		if ($result) {
			$inserts = "UPDATE mybb_spiders SET name='SosoSpider',useragent='Sosospider' WHERE sid = ".$result['sid']." LIMIT 1 ;";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置搜搜蜘蛛机器人......完成</li>';
		}
		else {
			$inserts = "INSERT INTO mybb_spiders (name,useragent) VALUES ('SosoSpider','Sosospider');";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置搜搜蜘蛛机器人......完成</li>';
		}
	}
	
	//安装搜狗蜘蛛
	if (in_array('sogoubot', $arr)) {
		$query = $db->simple_select("spiders", "sid", "useragent='Sogou spider'");
		$result = $db->fetch_array($query);
		if ($result) {
			$inserts = "UPDATE mybb_spiders SET name='SogouSpider',useragent='Sogou spider' WHERE sid = ".$result['sid']." LIMIT 1 ;";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置搜狗蜘蛛机器人......完成</li>';
		}
		else {
			$inserts = "INSERT INTO mybb_spiders (name,useragent) VALUES ('SogouSpider','Sogou spider');";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置搜狗蜘蛛机器人......完成</li>';
		}
	}
	
	//安装有道蜘蛛
	if (in_array('yodaobot', $arr)) {
		$query = $db->simple_select("spiders", "sid", "useragent='YodaoBot'");
		$result = $db->fetch_array($query);
		if ($result) {
			$inserts = "UPDATE mybb_spiders SET name='YodaoBot',useragent='YodaoBot' WHERE sid = ".$result['sid']." LIMIT 1 ;";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置有道蜘蛛机器人......完成</li>';
		}
		else {
			$inserts = "INSERT INTO mybb_spiders (name,useragent) VALUES ('YodaoBot','YodaoBot');";
			$sql = preg_replace('#mybb_(\S+?)([\s\.,]|$)#', TABLE_PREFIX.'\\1\\2', $inserts);
			$db->query($sql);
			echo '<li>设置有道蜘蛛机器人......完成</li>';
		}
	}

/*
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入mp3','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入wma','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入mp3','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入mp3','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入mp3','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";
$inserts[] = "INSERT INTO mybb_mycode (title,description,regex,replacement) VALUES ('插入mp3','使用方式: [mp3]http://www.some-music-site.com/some/name.mp3[/mp3]','\[mp3\](.*?)\[/mp3\]','<object classid=\"clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6\" width=\"400\" height=\"64\"><param name=\"autostart\" value=\"0\" /><param name=\"url\" value=\"$1\" /><embed src=\"$1\" autostart=\"0\" type=\"application/x-mplayer2\" width=\"400\" height=\"64\"></embed></object>');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'MyCode', '学习如何使用 MyCode 增强您的帖子。', '您可以使用MyCode，一个简化版的HTML，以便在您的帖子中使用特定的效果。\r\n<p><br />\r\n[b]这是粗体[/b]<br />\r\n&nbsp;&nbsp;&nbsp;<b>这是粗体</b>\r\n<p>\r\n[i]这是斜体[/i]<br />\r\n&nbsp;&nbsp;&nbsp;<i>这是斜体</i>\r\n<p>\r\n[u]这是下划线[/u]<br />\r\n&nbsp;&nbsp;&nbsp;<u>这是下划线</u>\r\n<p><br />\r\n[url]http://www.mybbchina.net/[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">http://www.mybbchina.net/</a>\r\n<p>\r\n[url=http://www.mybbchina.net/]MyBBchina.net[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.mybbchina.net/\">MyBBchina.net</a>\r\n<p>\r\n[email]example@example.com[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">example@example.com</a>\r\n<p>\r\n[email=example@example.com]给我发E-mail！[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">给我发E-mail！</a>\r\n<p>\r\n[email=example@example.com?subject=spam]包含标题的 E-mail[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com?subject=spam\">包含标题的 E-mail</a>\r\n<p><br />\r\n[quote]这里是引用文字[/quote]<br />\r\n&nbsp;&nbsp;&nbsp;<quote>这里是引用文字</quote>\r\n<p>\r\n[code]这里是代码[/code]<br />\r\n&nbsp;&nbsp;&nbsp;<code>这里是代码</code>\r\n<p><br />\r\n[img]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">\r\n<p>\r\n[img=50x50]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">\r\n<p><br />\r\n[color=red]这是红色[/color]<br />\r\n&nbsp;&nbsp;&nbsp;<font color=\"red\">这是红色</font>\r\n<p>\r\n[size=3]这是3号字[/size]<br />\r\n&nbsp;&nbsp;&nbsp;<font size=\"3\">这是3号字</font>\r\n<p>\r\n[font=Tahoma]字体是Tahoma[/font]<br />\r\n&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">字体是Tahoma</font>\r\n<p><br />\r\n[align=center]这是居中[/align]<div align=\"center\">这是居中</div>\r\n<p>\r\n[align=right]这是右对齐[/align]<div align=\"right\">这是右对齐</div>\r\n<p><br />\r\n[list]<br />\r\n[*]列表项 #1<br />\r\n[*]列表项 #2<br />\r\n[*]列表项 #3<br />\r\n[/list]<br />\r\n<ul>\r\n<li>列表项 #1</li>\r\n<li>列表项 #2</li>\r\n<li>列表项 #3</li>\r\n</ul><p><font size=1>您也可以用 [list=1] 创建一个数字顺序列表，用 [list=a] 创建字母顺序列表。</size>', 1, 1, 3);";
*/
}

?>