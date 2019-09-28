<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 9:27
 */
$query = $db->where('id', 1)->get('products');
if($query->num_rows()) $rfid_tagsData = $query->result_array();

$query = $db->where('id', 2)->get('products');
if($query->num_rows()) $rfid_cardsData = $query->result_array();
?>
<style>
    .instalation-block .inner-block .instalation-text{
        min-height: 66px;
    }
</style>
<section class="windows-page-section">
    <div class="auto-container">
        <!--Title Box-->
        <div class="title-box">
            <h1><?=Lang($config['home_products_title'])?></h1>
            <div class="text">For free samples,pls email to <a href="mailto:sales@xinyerfid.com">sales@xinyerfid.com</a> or <a href="<?=$contactPageData['link']?>.html" title="<?=Lang($contactPageData['name'])?>">click here</a> to send us a message.</div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <!--Windows Blocks-->
                <div class="windows-blocks">
                    <div class="row clearfix">
                        <!--Window Block-->
                        <div class="window-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-block">
                                <div class="clearfix">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-window"></span>
                                        </div>
                                        <div class="window-heading"><a href="/products/<?=$rfid_cardsData[0]['url']?>.html"><?=Lang($rfid_cardsData[0]['name'])?></a></div>
                                        <a class="download" href="/products/<?=$rfid_cardsData[0]['url']?>.html"><span class="arrow flaticon-right-arrow-4"></span>Entrance</a>
                                    </div>
                                    <div class="image">
                                        <img src="<?=Img($rfid_cardsData[0]['img'])?>?imageView2/1/w/300/h/224" alt="<?=Lang($rfid_cardsData[0]['name'])?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Window Block-->
                        <div class="window-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-block">
                                <div class="clearfix">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon flaticon-doorway"></span>
                                        </div>
                                        <div class="window-heading"><a href="/products/<?=$rfid_tagsData[0]['url']?>.html"><?=Lang($rfid_tagsData[0]['name'])?></a></div>
                                        <a class="download" href="/products/<?=$rfid_tagsData[0]['url']?>.html"><span class="arrow flaticon-right-arrow-4"></span>Entrance</a>
                                    </div>
                                    <div class="image">
                                        <img src="<?=Img($rfid_tagsData[0]['img'])?>?imageView2/1/w/300/h/224" alt="<?=Lang($rfid_tagsData[0]['name'])?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Content Column-->
            <?php if(isset($config['home_product_introduction']) && count($config['home_product_introduction'])): ?>
            <div class="content-column col-md-12">
                <div class="inner-column">
                    <div class="row">
                        <?php foreach($config['home_product_introduction'] as $item): ?>
                        <div class="col-md-6">
                            <h2><?=Lang($item['title'])?></h2>
                            <div class="text">
                                <p><?=Lang($item['text'])?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <hr/>

                    <?php if(isset($config['home_features']) && count($config['home_features'])): ?>
                    <br/>
                    <div class="row clearfix">
                        <?php
                            foreach($config['home_features'] as $index => $item){
                                if($index%2 !== 0){
                                    $home_features_left[] = $item;
                                }else{
                                    $home_features_right[] = $item;
                                }
                            }
                        ?>
                        <?php if(isset($home_features_left) && count($home_features_left)): ?>
                        <div class="column col-md-6 col-sm-12">
                            <?php foreach($home_features_left as $item): ?>
                            <div class="instalation-block">
                                <div class="inner-block">
                                    <div class="icon-box">
                                        <span class="icon flaticon-check"></span>
                                    </div>
                                    <h4><?=Lang($item['title'])?></h4>
                                    <div class="instalation-text"><?=Lang($item['text'])?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <?php if(isset($home_features_right) && count($home_features_right)): ?>
                        <div class="column col-md-6 col-sm-12">
                            <?php foreach($home_features_right as $item): ?>
                                <div class="instalation-block">
                                    <div class="inner-block">
                                        <div class="icon-box">
                                            <span class="icon flaticon-check"></span>
                                        </div>
                                        <h4><?=Lang($item['title'])?></h4>
                                        <div class="instalation-text"><?=Lang($item['text'])?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php if( @trim(Lang($config['home_reason'])) ): ?>
                    <!--Chooser Section-->
                    <div class="choosing-section">
                        <div class="inner-section">
                            <h3>Reason for choice</h3>
                            <div class="inner-blocks">
                                <?php
                                $iconData= ['flaticon-award', 'flaticon-architecture-and-city', 'flaticon-law', 'flaticon-rating', 'flaticon-labor-man', 'flaticon-money'];
                                $home_reason = explode('|', Lang($config['home_reason']));
                                ?>
                                <div class="row clearfix">
                                    <?php foreach($home_reason as $index=>$item): ?>
                                    <div class="choose-block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner-block">
                                            <div class="icon-box">
                                                <span class="icon <?=$iconData[$index]?>"></span>
                                            </div>
                                            <div class="block-title"><?=$item?></div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
