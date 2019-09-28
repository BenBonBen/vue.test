<?php
//+----------------------------------------------------|
// | Description: _common.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/2
//+----------------------------------------------------|
## 禁止直接访问
if($uri['model'] == '_common') exit('No direct script access allowed');

## 引入工具包
require_once 'tool/run.php';




## ============================= ##
## 获取导航栏数据
## ============================= ##

## 初始化导航数据格式
$viewData['menuData'] = [];

## 获取产品分类
##$viewData['menuData'][] = getNavData('products',0, ['name' => 'Products']);
$viewData['menuData'][] = getNavData('products',1);
$viewData['menuData'][] = getNavData('products',2);
##$viewData['menuData'][] = getNavData('products',3);
$viewData['menuData'][] = getNavData('products',31);

## 获取RFID APPLICATION分类
$applicateData = getNavData('applicate',1);
$applicateData['link'] = '';
$viewData['menuData'][] = $applicateData;

## 获取关于我们页面
$viewData['menuData'][] = getNavData('page',1);

## 获取news分类
$viewData['menuData'][] = getNavData('articles',1);

## 获取联系我们页面
$viewData['menuData'][] = getNavData('page',5);






## ============================= ##
## 获取公共用页面数据
## ============================= ##

## 获取关于我们页面数据
$aboutPageData = $db->get_where('page',['id'=>1])->row_array();
$viewData['aboutPageData']['link'] = trim($aboutPageData['redirect_url'])? $aboutPageData['redirect_url'] : "/page/{$aboutPageData['url']}";
$viewData['aboutPageData']['name'] = $aboutPageData['title'];

## 获取联系我们页面数据
$contactPageData = $db->get_where('page',['id'=>5])->row_array();
$viewData['contactPageData']['link'] = trim($contactPageData['redirect_url'])? $contactPageData['redirect_url'] : "/page/{$contactPageData['url']}";
$viewData['contactPageData']['name'] = $contactPageData['title'];

##查询产品分类数据
$data = [];
$query = $db->order_by('sort','DESC')->get('products');
if($query->num_rows()) $data =  $query->result_array();
## 加工数据
foreach ($data as $index => $item) {
    $data[$index] = unifiedData($item, 'products');
}

## 加工成导航栏用的数据
$navData = buildNavData($data);
## 赋值
$productsNavData = $navData;
$viewData['productsNavData'] = $productsNavData;

##查询news分类数据
$data = [];
$query = $db->where('parent_id', 1)->order_by('sort','DESC')->get('articles');
if($query->num_rows()) $data =  $query->result_array();
## 加工数据
foreach ($data as $index => $item) {
    $data[$index] = unifiedData($item, 'articles');
}

## 加工成导航栏用的数据
$navData = buildNavData($data);
## 赋值
$articlesNavData = $navData;