<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 10:13
 */
/* 获取GALLERY数据 */
$idArr = [];
$galleryData = [];
$childsData = [];
$idArr[] = 2;
$childsData = getChilds($idArr[0], 'galleries');

if(isset($childsData) && count($childsData) ){
    foreach($childsData as $item){
        $idArr[] = $item['id'];
    }
}

$data_all = $db->where_in('galleries_id', $idArr)->limit(12)->order_by('sort','DESC')->get('gallery');
if($data_all->num_rows()) $galleryData = $data_all->result_array();
?>

<?php if(isset($galleryData) && count($galleryData)): ?>
<section class="gallery-section">
    <div class="inner-section" style="background-image: url(<?=DG_FTP_PATH?>/assets/images/background/pattern-2.png)">
        <!--Title Box-->
        <div class="title-box">
            <div class="sec-title centered">
                <div class="title-inner">
                    <h2>Latest From <span class="theme_color">Gallery</span></h2>
                </div>
            </div>
        </div>
        <!--Carousel Box-->
        <div class="carousel-box">
            <div class="auto-container">

                <!-- Slider -->
                <div class="ms-caro3d-template">
                    <!-- masterslider -->
                    <div class="master-slider ms-skin-default" id="master-gallery-slider">
                        <?php foreach ($galleryData as $item): ?>
                        <div class="ms-slide">
                            <div class="content-layer">
                                <div class="image">
                                    <a href="<?= Img($item['img']) ?>" class="lightbox-image" data-fancybox="latest-gallery"><img src="<?= Img($item['img'])?>?imageView2/1/w/570/h/350" alt="<?= Lang($item['name']) ?>"/></a>
                                </div>
                                <h3><a href="javascript:;"><?= Lang($item['name']) ?></a></h3>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- end of masterslider -->
                </div>
                <!-- end of Slider -->

            </div>
        </div>
    </div>
</section>
<?php endif; ?>