<?php
//+----------------------------------------------------|
// | Description:
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-28
//+----------------------------------------------------|

## ============================= ##
## 初始化
## ============================= ##
## 数据容器
$viewData = [];
## 引入公共文件
include '_common.php';

## 当前内容数据模型
$model = 'page';
## 当前分类数据模型
$catModel = 'page';
## 页面分类id关联字段
$catIdField = 'parent_id';

## ============================= ##
## 常规逻辑部分
## ============================= ##


/**
 * ## 获取页面信息数据
 */
$pageData = $db->get_where($model, ['url'=>$uri['url']])->row_array();
## 判断页面数据是否存在，不存在时则表示是404错误页
if(!$pageData) include '404.php';
## 否则将数据入栈
$viewData['pageData'] = $pageData;
## 判断页面是否需要跳转
if($pageData['redirect_url']) header("Location: {$pageData['redirect_url']}");


/**
 * ## 获取所有父级页面
 */
$pageParentsData = getParents($pageData['parent_id'],$model);
## 将当前分类压入父级分类数据栈
##array_push($pageParentsData, $pageData);
## 数据入栈
$viewData['pageParentsData'] = $pageParentsData;



/**
 * ## 获取当前顶级页面数据
 */
foreach ($pageParentsData as $item) {
    if($item['parent_id'] == 0) $topPageData = $item;
}
## 数据入栈
$viewData['topPageData'] = $topPageData;




/**
 * ## 面包屑导航
 */
$breadcrumbsData = $pageParentsData;
## 数据入栈
$viewData['breadcrumbsData'] = $breadcrumbsData;



## 获取并处理面包屑导航图片数据
$bread_img = @Img($pageData['bread_img'])? Img($pageData['bread_img']) : Img($config['inside_default_banner']);
$allParentData = $breadcrumbsData;
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


/*
 * ## About侧边分类
 * */
##查询About子分类数据
$data = [];
$query = $db->where('parent_id', 1)->order_by('sort','DESC')->get('page');
if($query->num_rows()) $data =  $query->result_array();
## 加工数据
foreach ($data as $index => $item) {
    $data[$index] = unifiedData($item, 'page');
}

## 加工成导航栏用的数据
$navData = buildNavData($data);
## 赋值
$aboutNavData = $navData;
$viewData['aboutNavData'] = $aboutNavData;



## ============================= ##
## About Us 页面视图
## ============================= ##
if($pageData['url'] == 'about-xinye' || $pageData['url'] == 'company-profile' || $pageData['url'] == 'our-story') {
    ## 加载视图文件
    loadView('page/page-theme-content',$viewData);
    exit;
}



## ============================= ##
## Contact Us 页面视图
## ============================= ##
if($pageData['url'] == 'contact-us') {
    ## 加载视图文件
    loadView('page/contact-us',$viewData);
    exit;
}

## ============================= ##
## Certification 页面视图
## ============================= ##
if($pageData['url'] == 'certification') {
    ## 获取图册数据
    $listData = $db->where('galleries_id', 1)->order_by('sort','DESC')->get('gallery')->result_array();
    $viewData['listData'] = $listData;
    ## 加载视图文件
    loadView('page/page-theme-gallery',$viewData);
    exit;
}

## ============================= ##
## Factory view 页面视图
## ============================= ##
if($pageData['url'] == 'factory-view') {
    ## 获取图册数据
    $listData = $db->where('galleries_id', 3)->order_by('sort','DESC')->get('gallery')->result_array();
    $viewData['listData'] = $listData;
    ## 加载视图文件
    loadView('page/page-theme-gallery-1',$viewData);
    exit;
}



## ============================= ##
## 加载默认视图文件
## ============================= ##
if(file_exists(__DIR__."/views/page/{$uri['url']}.php")) {
    loadView("page/{$uri['url']}",$viewData);
} else {
    loadView('page/default',$viewData);
}



