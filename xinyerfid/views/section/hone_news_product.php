<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 10:23
 */

/* 获取最新新闻数据 start */
$idArr = [];
$newsData = [];
$childsData = [];
$idArr[] = 1;
$childsData = getChilds($idArr[0], 'articles');

if(isset($childsData) && count($childsData) ){
    foreach($childsData as $item){
        $idArr[] = $item['id'];
    }
}

$news_all = $db->where_in('articles_id', $idArr)->limit(4)->order_by('id','DESC')->get('article');
if($news_all->num_rows()) $newsData = $news_all->result_array();
/* 获取最新新闻数据 end */

/* 获取产品数据 start */
$productData = [];
$q = $db->where('featured', 1)->order_by('sort','DESC')->limit(12)->get('product');
##$q = $db->order_by('id','DESC')->limit(12)->get('product');
if($q->num_rows()){
    $productData = $q->result_array();
}
/* 获取产品数据 end */
?>

<section digood-id="home_xy_latest_box">
    <div class="auto-container">
        <div class="row">
            <?php if(isset($newsData) && count($newsData)): ?>
            <div class="col-md-4">
                <div class="services-widget brands-widget sidebar">
                    <div class="sidebar-widget popular-posts">

                        <div class="widget-content">
                            <h2>LATEST NEWS</h2>
                            <?php foreach($newsData as $item): ?>
                            <article class="post">
                                <?php if($item['img']): ?>
                                <div class="post-thumb">
                                    <a href="/article/<?= $item['url'] ?>.html"><img src="<?= Img($item['img']) ?>?imageView2/1/w/70/h/70" alt="<?= Lang($item['title']) ?>"></a>
                                </div>
                                <?php endif; ?>
                                <div class="text"><a href="/article/<?= $item['url'] ?>.html"><?= Lang($item['title']) ?></a></div>
                            </article>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if(isset($productData) && count($productData)): ?>
            <div class="col-md-6 col-md-offset-1">
                <div digood-id="home_xy_gallery_box">
                    <div class="sec-title">
                        <div class="title-inner">
                            <h2><span class="theme_color">New PRODUCTS INFORMATION</span></h2>
                            <p>high-temperature, on-metal, animal, medical, hazardous, beacon, wristband, tamper proof, tire, nail. They are available in fixed, desktop</p>
                        </div>
                    </div>
                    <section class="gallery-section-two">
                        <div class="gallery-carousel owl-carousel owl-theme">
                            <?php foreach ($productData as $index => $item): ?>
                                <?php
                                $name = Lang($item['name']);
                                ##$description = Lang($item['description'], 'sub_string[58]').'...';
                                $image = Img($item['img']).'?imageView2/1/w/568/h/320';
                                $url = "/product/{$item['url']}.html";
                                ?>
                                <div class="gallery-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="<?=$image?>" alt="<?=$name?>"/>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <h3><a href="<?=$url?>"><?=$name?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>
                </div>
            </div>
            <?php endif; ?>
        </div>

    </div>
</section>
