<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 11:42
 */
## ============================= ##
## 初始化
## ============================= ##
## 数据容器
$viewData = [];
## 引入公共文件
include '_common.php';

## 当前内容数据模型
##$model = '';
## 当前分类数据模型
$catModel = 'applicate';
## 页面分类id关联字段
##$catIdField = '';

## 判断是否为总览页
if(!$uri['url']) include '404.php';
$is_all = ($uri['url'] == 'all');

## 总览页数据
$allPageData = [
    'id' => 0,
    'name' => 'Applicate',
    'url' => 'all',
    'seo_title' => $site['title'],
    'seo_keywords' => $site['keywords'],
    'seo_description' => $site['description'],
];

## ============================= ##
## 常规逻辑部分
## ============================= ##



/**
 * ## 获取页面信息数据
 */
if($is_all) { // 总览页
    $pageData = $allPageData;
    $pageData['detail'] = $pageData['seo_description'];
} else {
    ##$pageData = $db->get_where($catModel, ['url'=>$uri['url']])->row_array();
    $pageData = $db->where('url', $uri['url'])->order_by('sort','DESC')->get($catModel)->row_array();
    ## 判断页面数据是否存在，不存在时则表示是404错误页
    if(!$pageData) include '404.php';
}
## 否则将数据入栈
$viewData['pageData'] = $pageData;



/**
 * ## 页面直系父级
 */
if($is_all) {
    $parentData = null;
} elseif(isset($pageData['level']) && $pageData['level'] == 1) {
    $parentData = null;
} else {
    $parentData = $db->get_where($catModel,['id'=>$pageData['parent_id']])->row_array();
}
## 数据入栈
$viewData['parentData'] = $parentData;





/**
 * ## 页面所有父级
 */
if($is_all) {
    $allParentData = null;
} elseif (isset($pageData['level']) && $pageData['level'] == 1) {
    $allParentData = null;
} else {
    ##$allParentData[] = $allPageData;
    ##$allParentData = array_merge($allParentData, getParents($parentData['id'],$catModel));
  	##$allParentData = getParents($parentData['id'],$catModel);
  	$allParentData = null;
}
## 数据入栈
$viewData['allParentData'] = $allParentData;




/**
 * ## 当前顶级页面
 */
if($is_all) {
    $topParentData = $allPageData;
} elseif (isset($pageData['level']) && $pageData['level'] == 1) {
    $topParentData = $pageData;
} else {
    foreach ($allParentData as $item) {
        if(!isset($item['level'])) continue;
        if($item['level'] == 1) {
            $topParentData = $item;
        }
    }
}
## 数据入栈
$viewData['topParentData'] = $topParentData;


/**
 * ## 面包屑导航
 */
$breadcrumbsData = $allParentData;
## 数据入栈
$viewData['breadcrumbsData'] = $breadcrumbsData;



## ============================= ##
## 自定义逻辑部分
## ============================= ##

## 获取并处理面包屑导航图片数据
$bread_img = Img($pageData['bread_img'])? Img($pageData['bread_img']) : Img($config['inside_default_banner']);
if(!$pageData['bread_img'] && @count($allParentData)){
    foreach($allParentData as $item){
        $imgData = @Img($item['bread_img']);
        if($imgData){
            $bread_img = $imgData;
            break;
        }
    }
}

$viewData['bread_img'] = $bread_img;



## 生成SEO代码
$seoInfoHtml = seoInfo($pageData);
$viewData['seoInfoHtml'] = $seoInfoHtml;


## ============================= ##
## 加载视图文件
## ============================= ##
loadView('applicate',$viewData);