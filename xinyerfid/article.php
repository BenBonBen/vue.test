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

## 当前内容数据模型
$model = 'article';
## 当前分类数据模型
$catModel = 'articles';
## 页面分类id关联字段
$catIdField = 'articles_id';

## ============================= ##
## 常规逻辑部分
## ============================= ##


/**
 * ## 获取页面信息数据
 */
## 当url为空时，抛出404
if(!$uri['url']) include '404.php';
## 获取数据
$pageData = $db->get_where($model, ['url'=>$uri['url']])->row_array();
## 判断页面数据是否存在，不存在时则表示是404错误页
if(!$pageData) include '404.php';
## 否则将数据入栈
$viewData['pageData'] = $pageData;

/**
 * ## 获取上一条和下一条数据
 */
$sql = "SELECT * FROM c_{$model} WHERE id IN((SELECT id FROM c_{$model} WHERE id<{$pageData['id']} ORDER BY id DESC LIMIT 1),(SELECT id FROM c_{$model} WHERE id>{$pageData['id']} ORDER BY id LIMIT 1)) ORDER BY id";
$data = $db->query($sql)->result_array();
$prevPageData = @$data[0];
$nextPageData = @$data[1];
$viewData['prevPageData'] = $prevPageData;
$viewData['nextPageData'] = $nextPageData;

/**
 * ## 获取当前分类数据
 */
$parentData = $db->get_where($catModel, ['id' => $pageData[$catIdField]])->row_array();
## 数据入栈
$viewData['parentData'] = $parentData;

/**
 * ## 获取当前页面所有父级数据
 */
$allParentData = getParents($parentData['id'],$catModel);
## 数据入栈
$viewData['allParentData'] = $allParentData;


/**
 * ## 获取当前页面最顶级分类数据
 */
$topParentData = null;
foreach ($allParentData as $item) {
    if($item['level'] == 1) {
        $topParentData = $item;
    }
}
## 数据入栈
$viewData['topParentData'] = $topParentData;


/**
 * ## 页面侧边栏导航数据（源数据）
 */
## 通过顶级分类获取下面的子级
$categorysData = getChilds($topParentData['id'], $catModel, ['sort' => 'DESC']);
## 判断顶级分类下是否有子级，如果没有，则使用第一级分类
if(count($categorysData) == 0) {
    ##$categorysData = $db->order_by('sort','DESC')->get($catModel)->result_array();
    $categorysData = $db->where('id', $topParentData['id'])->order_by('sort','DESC')->get($catModel)->result_array();
}
## 数据入栈
$viewData['categorysData'] = $categorysData;


/**
 * ## 页面侧边栏导航数据(处理后)
 */
$sideNavData = [];
/*foreach ($categorysData as $index => $item) {
    ## 处理过后的数据会添加一个 link 字段，并且将title 和 name 统一成 neme ； 其它字段保持不变
    $sideNavData[$index] = unifiedData($item,$catModel);
}
## 将数据递归成带有层级关系的数据，默认下级字段为 children
$sideNavData = buildNavData($sideNavData);*/

$sideNavData = $articlesNavData;

## 数据入栈
$viewData['sideNavData'] = $sideNavData;



/**
 * ## 获取推荐内容数据
 */
## 先拿到当前总分类下所有子级的ID
$idArr = [];
foreach ($categorysData as $item) {
    $idArr[] = $item['id'];
}
## 通过ID来查询推荐数据
$recommData = $db->where_in($idArr)->where('featured',1)->order_by('sort','DESC')->limit(5)->get($model)->result_array();
## 没有查到推荐数据时获取最新数据
if(!count($recommData)) {
    $recommData = $db->where_in($idArr)->order_by('sort','DESC')->limit(5)->get($model)->result_array();
}
## 数据入栈
$viewData['recommData'] = $recommData;



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
loadView('article',$viewData);


