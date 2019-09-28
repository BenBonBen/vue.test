<?php
//+----------------------------------------------------|
// | Description: 文章详情
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-23
//+----------------------------------------------------|

## ============================= ##
## 初始化
## ============================= ##
## 数据容器
$viewData = [];
## 引入公共文件
include '_common.php';

## 获取关键词
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$viewData['keyword'] = $keyword;
## 视图文件
$viewFile = null;


## ============================= ##
## 常规逻辑部分
## ============================= ##





/**
 * ## 文章搜索条件
 */
if($keyword != '' && $uri['url'] == 'articles') {
    
    ## 当前内容数据模型
    $model = 'article';
    ## 当前分类数据模型
    $catModel = 'articles';
    ## 页面分类id关联字段
    $catIdField = 'articles_id';
    ## 视图文件
    $viewFile = 'articles';

    ## 查询条件
    $db->like('title',$keyword);
    $db->or_like('content',$keyword);
    $db->or_like('seo_title',$keyword);
    $db->or_like('seo_keywords',$keyword);
    $db->or_like('seo_description',$keyword);
    $list_show = 5;
}





/**
 * ## 产品搜索条件
 */
if($keyword != '' && $uri['url'] == 'products') {
    ## 当前内容数据模型
    $model = 'product';
    ## 当前分类数据模型
    $catModel = 'products';
    ## 页面分类id关联字段
    $catIdField = 'products_id';
    ## 视图文件
    $viewFile = 'products';

    ## 查询条件
    $db->like('name',$keyword);
    $db->or_like('detail',$keyword);
    $db->or_like('seo_title',$keyword);
    $db->or_like('description',$keyword);
    $db->or_like('seo_keywords',$keyword);
    $db->or_like('seo_description',$keyword);
    $list_show = 12;
}



## 没有设置视图文件时抛出404
if(!$viewFile) include '404.php';



## 获取结果条数
$total = $db->count_all_results($model, false);

## 分页
$result = pagination([
    'nav_length' => 5, // 分页导航长度
    'total' => $total, // 总数
    'list_show' => $list_show, // 列表展示条数
    'suffix' => "?keyword={$keyword}"
]);
## 分页结构数据入栈
$viewData['pageinationHtml'] = $result['html'];
## 设置分页位置
$db->limit($result['data']['list_show'],$result['data']['start']);
## 获取列表结果数据并将数据存入视图数据栈内
$viewData['listData'] = $db->get()->result_array();



## 生成SEO代码
$seoInfoHtml = seoInfo();
$viewData['seoInfoHtml'] = $seoInfoHtml;


## ============================= ##
## 加载视图文件
## ============================= ##
loadView("search/{$viewFile}",$viewData);