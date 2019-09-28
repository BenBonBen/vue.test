<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/11/24
 * Time: 10:00
 */

/* 产品分类数据结构加工 start */
/*$products_categorysData = [];
$products_categorysDataLeft = [];
$products_categorysDataRight = [];
$query = $db->order_by('sort','DESC')->limit(24)->get('products');
if($query->num_rows()){
    $products_categorysData = $query->result_array();

    $result_productsData = array_chunk($products_categorysData, 12);
}*/

$result_productsData = array_chunk($config['footer_list_1'], 12);
/* 产品分类数据结构加工 end */

/* 获取推荐新闻数据 start */

$news_all = $db->where('featured', 1)->limit(5)->order_by('sort','DESC')->get('article');
if($news_all->num_rows()) $newsData = $news_all->result_array();
/* 获取推荐新闻数据 end */
?>

<!--Main Footer-->
<footer class="main-footer">

    <div class="auto-container">

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Footer Column-->
                <div class="footer-column col-lg-5 col-md-6">
                    <div class="footer-widget newsletter-widget">
                        <h2>Provider of RFID Products</h2>
                        <div class="widget-content">
                            <div class="message-icon"></div>
                            <div class="text"><p><?=Lang($config['site_footer_slogan'])?></p></div>
                        </div>
                        <!--Social Icon One-->

                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-3 col-md-6">
                    <div class="footer-widget news-widget">
                        <h2>Hot News</h2>
                        <?php foreach($newsData as $item): ?>
                            <?php
                            $title = Lang($item['title']);
                            ##$image = Img($item['img']);
                            $url = "/article/{$item['url']}.html";
                            $description = Lang($item['content'],'sub_string:220');
                            $time = date( 'M d, Y', strtotime($item['posted_time']) );
                            ?>
                            <div class="news-widget-block">
                                <div class="widget-inner">
                                    <h3><a href="<?=$url?>"><?= $title ?></a></h3>
                                    <div class="post-date"><?=$time?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!--Footer Column-->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget links-widget">
                        <h2><?=Lang($config['footer_list_title_1'])?></h2>
                        <div class="row clearfix">

                            <?php foreach($result_productsData as $item1): ?>
                            <div class="column col-lg-6 col-md-6 col-xs-6">
                                <ul class="footer-link">
                                    <?php foreach($item1 as $item2): ?>
                                    <li><a href="<?=Lang($item2['link'])? Lang($item2['link']) : 'javascript:;'?>" title="<?=Lang($item2['title'])?>"><?=Lang($item2['title'])?> </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="footer-widget newsletter-widget">
                        <ul class="social-icon-one text-right">
                            <?php if($config['soc_facebook']): ?>
                                <li><a href="<?= Lang($config['soc_facebook']) ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <?php endif; ?>
                            <?php if($config['soc_linkedin']): ?>
                                <li><a href="<?= Lang($config['soc_linkedin']) ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <?php endif; ?>
                            <?php if($config['soc_twitter']): ?>
                                <li><a href="<?= Lang($config['soc_twitter']) ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <?php endif; ?>
                            <?php if($config['soc_youtube']): ?>
                                <li><a href="<?= Lang($config['soc_youtube']) ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <?php endif; ?>
                            <?php if($config['soc_google']): ?>
                                <li><a href="<?= Lang($config['soc_google']) ?>" target="_blank"><i class="fa fa-google"></i></a></li>
                            <?php endif; ?>
                            <?php if($config['soc_pinterest']): ?>
                                <li><a href="<?= Lang($config['soc_pinterest']) ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="text-center">
                <div class="copyright"><p style="margin: 0;">© 2018 Guangdong Xinye RFID Label Application Co.,ltd. Guangdong ICP No. 14029285. Powered by <a href="//www.digood.com">DIGOOD</a></p></div>
            </div>
        </div>
    </div>

</footer>
<!--End Main Footer-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

