<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 13:52
 */
include 'common/header.php';
?>

<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= $bread_img ?>?imageView2/1/w/1920/h/300');">
    <div class="container">
        <div class="banner_content">
            <h3><?=Lang($pageData['name'])?></h3>
        </div>
    </div>
</section>
<div class="banner_link hidden-xs hidden-sm">
    <div class="container">
        <div class="b_crum_link_inner">
            <a href="/">Home</a>
            <?php foreach ($breadcrumbsData as $item): ?>
                <a href="/applicate/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
            <?php endforeach; ?>
            <a href="javascript:;"><?=Lang($pageData['name'])?></a>
        </div>
    </div>
</div>
<!-- / 面包屑导航-->

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-md-12">
                <div class="blog-single">
                    <div class="inner-box">
                        <div class="upper-box">
                            <h1><?=Lang($pageData['name'])?></h1>
                            <ul class="post-date">
                                <li><?=Lang($pageData['seo_keywords'])?></li>
                            </ul>
                        </div>
                        <div class="text"><?=Lang($pageData['content'])?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $related_product =[];
    $arr_id = explode('|', $pageData['product_ids']);
    $q = $db->where_in('id', $arr_id)->order_by('sort','DESC')->limit(4)->get('product');

    if($q->num_rows()){
        $related_product = $q->result_array();
    }
?>

<?php if(count($related_product)): ?>
<div class="shop-single">
    <div class="container">
        <div class="related-products">
            <h2>Related products</h2>
            <div class="row clearfix">
                <?php foreach($related_product as $item): ?>
                    <?php
                    $name = Lang($item['name']);
                    ##$description = Lang($item['description'], 'sub_string[58]').'...';
                    $image = Img($item['img']).'?imageView2/1/w/568/h/426';
                    $url = "/product/{$item['url']}.html";
                    ?>
                <div class="product-block alternate col-md-3">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?=$url?>" title="<?=$name?>"><img src="<?=$image?>" alt="<?=$name?>"/></a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="<?=$url?>" title="<?=$name?>"><?=$name?></a></h3>
                            <div class="buy-btn-box text-center">
                                <a href="<?=$url?>" class="theme-btn buy-btn">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php
include 'common/footer.php';
?>


