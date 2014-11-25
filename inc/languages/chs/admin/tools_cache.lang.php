<?php
/**
 * MyBB 1.6 简体中文语言包
 * Copyright © 2010 MyBB Group, All Rights Reserved
 * 翻译制作: MyBB中文化团队 MyBB中文化官方网站: http://www.mybbchina.net/
 * 
 * $Id: tools_cache.lang.php 5016 2010-06-12 00:24:02Z RyanGordon MyBB中文化团队 $
 */

$l['cache'] = "缓存:";
$l['cache_manager'] = "缓存管理";
$l['cache_manager_description'] = "在这里您可以管理缓存用来作为一种优化MyBB的方式。重建缓存，将所有必须的使用的数据建立缓存并且同步它们。重载缓存，将重新载入缓存到缓存管理器 (磁盘, eaccelerator, memcache, 等)。当从数据库或者文件系统到 xcache, eaccelerator, 或者其它缓存管理器时，重载是非常有用的。";
$l['rebuild_cache'] = "重建缓存";
$l['reload_cache'] = "重载缓存";

$l['error_cannot_rebuild'] = "这个缓存无法重建。";
$l['error_empty_cache'] = "缓存为空。";
$l['error_incorrect_cache'] = "指定缓存不正确。";
$l['error_no_cache_specified'] = "你没有指定一个缓存以便查看。";

$l['success_cache_rebuilt'] = "缓存已经重建成功。";
$l['success_cache_reloaded'] = "缓存已经重载成功。";

?>