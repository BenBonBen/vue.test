<?php
//+----------------------------------------------------|
// | Description: default.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-22
//+----------------------------------------------------|
include __DIR__.'/../common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/default-page.css">
<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= Img($config['inside_default_banner']) ?>?imageView2/1/w/1920/h/200');">
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
            <div class="col-md-10 col-md-offset-1">
                <div class="service_content_right_col">
                    <div class="tab-content">
                        <div class="service_content_bx">
                            <h1><?=Lang($pageData['title'])?></h1>
                            <?php if(trim(Lang($pageData['detail']))): ?>
                                <p><?=Lang($pageData['detail'])?></p>
                            <?php endif; ?>
                        </div>
                        <div class="service_item_inner">
                            <?=Lang($pageData['content'])?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__.'/../common/footer.php' ?>