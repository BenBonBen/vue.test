<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 9:27
 */
?>

<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/banner.css">
<style>
    @media only screen and (max-width: 767px){
        .main-slider .slide {
            padding-top: 20px;
            padding-bottom: 0;
        }
        .main-header.header-style-two .header-upper .upper-right,
        .main-header .header-upper{
            padding-bottom: 0;
        }
        [digood-id="home_banner_box"] .main-slider .owl-dots .owl-dot{
            width: 10px;
            height: 10px;
        }
        [digood-id="home_banner_box"] .main-slider .owl-dots{
            bottom: 0px;
        }
    }
  	
	@media only screen and (min-width: 1360px){
	  [digood-id="home_banner_box"] .main-slider .content.offset-center{
	  	padding-top: 60px;	
	  }
	}
  
  	@media only screen and (min-width: 1600px){
	  [digood-id="home_banner_box"] .main-slider .content.offset-center{
	  	padding-top: 80px;	
	  }
	}
  
    @media only screen and (max-width: 599px){
        [digood-id="home_banner_box"] .main-slider h2 {
            font-size: 14px;
        }
        [digood-id="home_banner_box"] .main-slider h3.alternate {
            font-size: 12px;
        }
    }

</style>
<section digood-id="home_banner_box">
    <div class="main-slider margin-top" data-responsive="[[1600,1200,1000,960,700,320,180],[600,390,380,320,310,140,120]]">
        <div class="main-slider-carousel owl-carousel owl-theme">
            <?php
            $bannerData = [];
            foreach($config['home_banner'] as $item){
                if($item['switch'] == '1') $bannerData[] = $item;
            }

            foreach($bannerData as $index => $item){
                switch($item['align']){
                    case 'center':
                        $bannerData[$index]['result_align'] = 'text-center';
                        $bannerData[$index]['offset'] = 'offset-center';
                        break;
                    case 'right':
                        $bannerData[$index]['result_align'] = 'text-right';
                        $bannerData[$index]['offset'] = 'offset-right';
                        break;
                    default:
                        $bannerData[$index]['result_align'] = 'text-left';
                        $bannerData[$index]['offset'] = '';
                        break;
                }
            }
            ?>

            <?php foreach($bannerData as $index => $item): ?>
                <?php
                $image = Img($item['image']);
                $title = Lang($item['title']);
                $sub_title = Lang($item['sub_title']);
                $text = Lang($item['text']);
                $link = Lang($item['link'])? Lang($item['link']) : 'javascript:;';
                $align = $item['result_align'];
                $offset = $item['offset'];
                ?>
                <a href="<?=$link?>" target="_blank">
                    <div class="slide digood-banner-slide"
                         style="background-image:url('<?=$image?>')">
                        <div class="auto-container">
                            <div class="digood-banner_content_box">
                                <div class="content <?=$align?> <?=$offset?>">
                                    <h2 class="alternate"><?=$title?></h2>
                                    <h3 class="alternate"><?=$sub_title?></h3>
                                    <div class="text alternate"><?=$text?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="<?=DG_FTP_PATH?>/assets/js/banner.js"></script>