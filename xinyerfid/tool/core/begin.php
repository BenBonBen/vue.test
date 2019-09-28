<?php
//+----------------------------------------------------|
// | Description: 前置文件，工具包需要依赖的文件可以放在这里
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-7-7
//+----------------------------------------------------|

## 系统全局变量
global $DG;
$DG = [
    'db' => $db,
    'ci' => $this,
    'uri' => $uri,
    'user' => $user,
    'lang' => $lang,
    'config' => $config,
    'site' => $site,
    'sites_list' => $sites_list,
    'site_setting' => $site_setting,
];
