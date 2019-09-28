<?php
//+----------------------------------------------------|
// | Description: index.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-31
//+----------------------------------------------------|

## ============================= ##
## 初始化
## ============================= ##
if(!isset($viewData)) {
	## 数据容器
	$viewData = [];
	## 引入公共文件
	include '_common.php';
}



## ============================= ##
## 404逻辑部分
## ============================= ##



$seoInfoHtml = seoInfo();
$viewData['seoInfoHtml'];
## ==============================
## 加载视图文件，并将数据传入到视图中
header('HTTP/1.1 404 Not Found');
loadView('404', $viewData);
exit();