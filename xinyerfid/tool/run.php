<?php
//+----------------------------------------------------|
// | Description:
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-7-7
//+----------------------------------------------------|

## 引入前置文件
require 'core/begin.php';

## 引入方法文件
require 'core/functions.php';


/**
 * 配置资源路径常量
 */
## 加载配置
$tool_config = getConfig('config');
## 判断环境
if($tool_config['site_debug']) {
    $assetsDomain = '//assets-test.digoodcms.com/';
    $domain = $site['domain_test'];
} else {
    $assetsDomain = '//assets.digoodcms.com/';
    $domain = $site['domain'];
}
## 获取相对路径并拼接
$path = $tool_config['ftp_path'];
$path = trim($path,'/');
$path = $assetsDomain.$path;

## 定义ftp资源服务器路径常量
defined('DG_FTP_PATH') or define('DG_FTP_PATH',$path);
## 获取完整的url
defined('DG_URL') or define('DG_URL',"{$site['scheme']}://{$site['domain']}{$_SERVER['REQUEST_URI']}");