<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/11/24
 * Time: 9:59
 */
?>
<!-- Main Header-->
<header class="main-header header-style-two">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    <div class="text">
                        <div class="outer-box clearfix">
                            <ul class="option-list">
                                <li><span class="icon flaticon-phone-call"></span>+86 (0769) 83181213</li>
                                <li><span class="icon flaticon-email"></span><a href="mailto:sales@xinyerfid.com">sales@xinyerfid.com</a></li>
                            </ul>
                        </div>
                        <ul class="social-box hidden-xs hidden-sm">
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
                                <li><a href="<?= Lang($config['soc_youtube']) ?>" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
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
                <!--Top Right-->
                <div class="top-right">
                    <!--Language-->
                    <div class="top-language-box outer-box clearfix">
                        <ul class="option-list">
                            <?php foreach($sites_list as $item): ?>
                                <li><a href="<?=$item['scheme']?>://<?= $item['domain'] ?>"><span class="flag-icon flag-icon-<?= $item['iso'] ?>"></span> <?= $item['lang_view'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-box">
                    <div class="logo">
                        <?php if($config['site_main_logo']): ?>
                            <a href="/" title="<?= Lang($site['title']) ?>"><img src="<?= Img($config['site_main_logo']) ?>" alt="logo" width="200"></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <div class="header-lower">
						<div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="/">HOME</a></li>
                                            <?php function initMenu($items) { ?>
                                                <?php foreach($items as $index => $item): ?>
                                                    <li <?php if(isset($item['children']) && count($item['children'])) echo 'class="dropdown"' ?>>
                                                        <a href="<?=$item['link']? $item['link'].'.html' : 'javascript:;'?>"><?=Lang($item['name'])?></a>
                                                        <?php if(isset($item['children']) && count($item['children'])): ?>
                                                            <ul>
                                                                <?= initMenu($item['children']); ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php } ?>
                                            <?= initMenu($menuData); ?>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                                <div class="outer-box clearfix">
                                    <!--Option Box-->
                                    <ul class="option-box">
                                        <!--Search Box-->
                                        <li class="search-box-outer">
                                            <div class="dropdown">
                                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                    <li class="panel-outer">
                                                        <div class="form-container">
                                                            <form action="/search/products" method="get">
                                                                <div class="form-group">
                                                                    <input type="search" name="keyword" placeholder="Search Product..." required>
                                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <?php if($config['site_main_logo']): ?>
                    <a href="/" class="img-responsive"><img src="<?= Img($config['site_main_logo']) ?>" alt="logo" title="<?= Lang($site['title']) ?>" width="200"></a>
                <?php endif; ?>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li><a href="/">HOME</a></li>
                            <?= initMenu($menuData); ?>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->

</header>
<!--End Main Header -->
