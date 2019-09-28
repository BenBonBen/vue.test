<?php
//+----------------------------------------------------|
// | Description: articles.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-22
//+----------------------------------------------------|
include 'common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/products.css">
<script src="<?=DG_FTP_PATH?>/assets/js/product.js"></script>
<style>
  .dg-single-project .text h4{
  	padding: 0;
  }
</style>
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
                <a href="/products/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
            <?php endforeach; ?>
            <a href="javascript:;"><?=Lang($pageData['name'])?></a>
        </div>
    </div>
</div>
<!-- / 面包屑导航-->

<section class="dg-products-section">
    <div class="container">
        <div class="dg-layout-wrapper dg-sider-left">
            <div class="dg-layout-main">
                <div class="theme-container">
                    <div class="about-title">
                        <h1 class="sub-title"><?=Lang($pageData['name'])?></h1>
                    </div>
                    <?php if(trim(Lang($pageData['detail']))): ?>
                        <div class="about-detail">
                            <p><?=Lang($pageData['detail'])?></p>
                        </div>
                    <?php endif; ?>
                    <hr/>
                </div>

                <div class="row">
                    <?php foreach ($listData as $index => $item): ?>
                        <?php
                        $name = Lang($item['name']);
                        $description = Lang($item['description']);
                        $image = Img($item['img']);
                        $url = "/product/{$item['url']}.html";
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div digood-id="list_product_item_3_oyh">
                                <div class="dg-single-project">
                                    <div class="image">
                                        <a href="<?=$url?>" title="<?=$name?>">
                                            <img src="<?=$image?>?imageView2/1/w/400/h/300" title="<?=$name?>" alt="<?=$name?>">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h4>
                                            <a class="tran3s" href="<?=$url?>" title="<?=$name?>"><?=$name?></a>
                                        </h4>
                                    </div>
                                    <!-- /.text -->
                                </div>
                                <!-- /.single-project -->
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?=$pageinationHtml?>
            </div>
            <div class="dg-layout-sider">
                <?php include 'section/product_sider.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'common/footer.php' ?>