<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/19
 * Time: 10:26
 */
?>

<?php
//+----------------------------------------------------|
// | Description: gallery.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/3
//+----------------------------------------------------|
include __DIR__.'/../common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/default-page.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
<link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/galleres.css">

<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= $bread_img ?>?imageView2/1/w/1920/h/300');">
    <div class="container">
        <div class="banner_content">
            <h3><?=Lang($pageData['title'])?></h3>
        </div>
    </div>
</section>
<div class="banner_link hidden-xs hidden-sm">
    <div class="container">
        <div class="b_crum_link_inner">
            <a href="/">Home</a>
            <?php foreach ($breadcrumbsData as $item): ?>
                <a href="/page/<?=$item['url']?>.html"><?=Lang($item['title'])?></a>
            <?php endforeach; ?>
            <a href="javascript:;"><?=Lang($pageData['title'])?></a>
        </div>
    </div>
</div>
<!-- / 面包屑导航-->

<section class="carrers_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php include __DIR__.'/../section/page_sider.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="service_content_right_col">
                    <div class="tab-content">
                        <div class="service_content_bx">
                            <h1><?=Lang($pageData['title'])?></h1>
                            <?php if(trim(Lang($pageData['detail']))): ?>
                                <p><?=Lang($pageData['detail'])?></p>
                            <?php endif; ?>
                        </div>
                        <div class="service_item_inner">
                            <main id="digood-galleres">
                                <div class="row">
                                    <?php foreach($listData as $item): ?>
                                        <div class="col-sm-4">
                                            <div digood-id="list_gallery_item_1_oyh">
                                                <div class="dg-single-gallery">
                                                    <img src="<?= Img($item['img']) ?>?imageView2/1" alt="<?=Lang($item['name'])?>">
                                                    <div class="dg-gallery-caption">
                                                        <p>
                                                            <a data-fancybox="gallery" href="<?= Img($item['img']) ?>">
                                                                <i class="fa fa-fw fa-search-plus"></i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?=$pageinationHtml?>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<?php include __DIR__.'/../common/footer.php' ?>
