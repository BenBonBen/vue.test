<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 10:13
 */
?>
<style>
.about-section .content-column .text p{
    text-align: justify;
}
</style>
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Image Column-->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <?php if($config['home_video_image']): ?>
                        <img src="<?=Img($config['home_video_image'])?>?imageView2/1/w/500/h/320" alt="<?=Lang($config['home_video_title'])?>" />
                        <?php endif; ?>

                        <?php if($config['home_video_link']): ?>
                        <a href="<?=$config['home_video_link']?>" class="lightbox-image play-box"><span class="flaticon-play-arrow"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!--Content Column-->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title alternate">
                        <?php
                        $title = Lang($config['home_video_title']);
                        $title = str_replace('{', '<span class="theme_color">', $title);
                        $title = str_replace('}', '</span>', $title);
                        ?>
                        <h2><?=$title?></h2>
                    </div>
                    <div class="text"><p><?=Lang($config['home_video_text'])?></p></div>

                    <?php if($aboutPageData): ?>
                    <a class="theme-btn btn-style-three" href="<?=$aboutPageData['link']?>.html" title="<?=$aboutPageData['name']?>"><span class="arrow flaticon-right-arrow-4"></span>Read More</a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php if(isset($config['home_video']) && count($config['home_video'])): ?>
<section class="services-section-two">
    <div class="auto-container">
        <div class="services-item-carousel-two owl-carousel owl-theme">
            <?php
                $iconData = ['flaticon-door-4', 'flaticon-award', 'flaticon-money', 'flaticon-labor-man'];
            ?>
            <?php foreach($config['home_video'] as $index => $item): ?>
            <div class="services-block-two">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon <?=$iconData[$index-1]?>"></span>
                    </div>
                    <div class="content-box">
                        <h3><a href="JavaScript:;"><?=Lang($item['title'])?></a></h3>
                        <div class="text"><?=Lang($item['text'])?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>