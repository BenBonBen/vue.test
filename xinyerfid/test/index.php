<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/10
 * Time: 16:02
 */
#$assets = '//assets-test.digoodcms.com/peng/xinyerfid/v1';
define('DG_FTP_PATH', '//assets-test.digoodcms.com/peng/xinyerfid/v1');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Shutters HTML Template | Homepage</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!--MasterSlider-->
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/masterslider/style/masterslider.css"/>
    <link href="<?= DG_FTP_PATH ?>/assets/css/masterslider/skins/default/style.css" rel="stylesheet">
    <link href="<?= DG_FTP_PATH ?>/assets/css/masterslider/style/ms-caro3d.css" rel="stylesheet">
    <!--End MasterSlider-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- 首页需要动画效果开启animate -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/jquery.timepicker.min.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="<?= DG_FTP_PATH ?>/assets/css/jquery.mCustomScrollbar.min.css">

    <link href="<?= DG_FTP_PATH ?>/assets/css/new-style.css" rel="stylesheet">
    <link href="<?= DG_FTP_PATH ?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?= DG_FTP_PATH ?>/assets/css/responsive.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?= DG_FTP_PATH ?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?= DG_FTP_PATH ?>/assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Main Header-->
    <header class="main-header header-style-two">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <div class="text">Trusted by 50k customers around the world.</div>
                    </div>
                    <!--Top Right-->
                    <div class="top-right">
                        <!--Social Box-->
                        <ul class="social-box">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                        <!--Language-->
                        <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2"
                                                          data-toggle="dropdown" aria-haspopup="true"
                                                          aria-expanded="true" href="#"><span class="flag-icon"></span>En
                                &nbsp;<span class="icon fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                <li><a href="#">English</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Hindi</a></li>
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
                            <a href="/"><img src="http://iph.href.lu/220x54?text=[logo]220X54" alt="" title=""
                                             width="220"></a>
                        </div>
                    </div>

                    <!--Contact Number-->
                    <div class="contact-number">
                        <div class="number-inner">
                            <span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span> +32 89 4567
                            01
                        </div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-pin"></span></div>
                            <ul>
                                <li><strong>We are at</strong></li>
                                <li>718 Millon Str, Delaware 11226</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-email"></span></div>
                            <ul>
                                <li><strong>Mail Us On</strong></li>
                                <li>Support@examples.com</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!--<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="#">RFID TAGS</a></li>
                                <li><a href="#">RFID CARDS</a></li>
                                <li class="dropdown"><a href="#">RFID LABEL</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">RFID APPLICATION</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">ABOUT XINYE</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">NEWS CENTER</a></li>
                                <li><a href="#">CONTACT US</a></li>
                            </ul>
                        </div>-->

                        <style>
                            .mainmenu_xy_nav.no-margin {
                                margin: 0 !important;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li {
                                display: inline-block;
                                position: relative;
                                padding: 15px 0;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li > a {
                                color: #232323;
                                display: block;
                                font-size: 13px;
                                font-weight: 600;
                                text-decoration: none;
                                text-transform: uppercase;
                                transition: all 4ms linear 0s;
                                border-left: 1px solid #e1e1e1;
                                display: block;
                                padding: 5px 20px;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li:hover > a {
                                color: #f47115;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span > a {
                                color: #909090;
                                font-size: 1em;
                                font-weight: normal;
                                line-height: 22px;
                                text-transform: capitalize;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li:hover .megamenu {
                                margin-top: 0;
                                transform: rotateX(0deg);
                                visibility: visible;
                                z-index: 99999;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu {
                                left: 0;
                                margin: 0;
                                position: absolute;
                                text-align: left;
                                top: 60px;
                                visibility: hidden;
                                width: 500px;
                                z-index: -99;
                                background-color: #f5f5f5;
                                box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
                                padding: 30px 20px;
                                transform: rotateX(90deg);
                                transform-origin: center top 0;
                                transition: all 0.6s ease 0s;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span > a.mega-title {
                                color: #333333;
                                font-size: 1em;
                                font-weight: 600;
                                margin-bottom: 10px;
                                position: relative;
                                text-transform: uppercase;
                                line-height: 28px;
                                display: block;
                                text-decoration: none;
                                padding-right: 10px;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span {
                                float: left;
                                margin-right: 20px;
                                width: 149px;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span > a:hover,
                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span a.mega-title:hover {
                                color: #E03550;
                            }

                            .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span:nth-child(5) {
                                width: 180px;
                            }

                            .mainmenu_xy_nav .mega-banner {
                                display: none;
                            }

                            .mainmenu_xy_nav .mega-banner.mega-banner_block {
                                display: block;
                            }

                            .mainmenu_xy_nav .mega-banner img {
                                max-width: 100%;
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li a{
                                color: #7c7b7b;
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li a.{

                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li a:hover{
                                color: #f47115;
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li.download{
                                position: relative;
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li.download:after {
                                position: absolute;
                                left: -10px;
                                top: 6px;
                                width: 10px;
                                height: 10px;
                                font: normal normal normal 14px/1 FontAwesome;
                                content: '\f0da';
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li>ul{
                                text-indent: 1em;
                            }

                            .mainmenu_xy_nav .megamenu-list .menu_box li>ul>li>ul{
                                text-indent: 2em;
                            }

                            @media (min-width: 992px) and (max-width: 1169px) {
                                .mainmenu_xy_nav ul#nav_xy_list > li .megamenu {
                                    width: 760px;
                                }

                                .mainmenu_xy_nav ul#nav_xy_list > li .megamenu span {
                                    width: 120px;
                                }

                                .mainmenu_xy_nav ul#nav_xy_list > li > a {
                                    padding: 5px 15px;
                                }
                            }

                            @media (min-width: 768px) and (max-width: 991px) {
                                .mainmenu_xy_nav {
                                    display: none;
                                }
                            }
                        </style>
                        <div class="mainmenu_xy_nav">
                            <nav>
                                <ul id="nav_xy_list">
                                    <li><a href="shop-grid.html">Id Card</a>
                                        <div class="megamenu">
                                            <div class="megamenu-list clearfix">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="menu_box">
                                                            <ul>
                                                                <li class="download">
                                                                    <a href="#">Clothing</a>
                                                                    <ul>
                                                                        <li class="download">
                                                                            <a href="#">Blazers---1</a>
                                                                            <ul>
                                                                                <li><a href="#">Blazers---2</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Blazers</a></li>
                                                                <li><a href="#">Jackets</a></li>
                                                                <li><a href="#">Collections</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="megamenu-image-box">
                                                            <a href="#" class="banner mega-banner_block">
                                                                <img src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop-grid.html">Id Card</a>
                                        <div class="megamenu">
                                            <div class="megamenu-list clearfix">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="menu_box">
                                                            <ul>
                                                                <li class="download">
                                                                    <a href="#">Clothing</a>
                                                                    <ul>
                                                                        <li class="download">
                                                                            <a href="#">Blazers---1</a>
                                                                            <ul>
                                                                                <li><a href="#">Blazers---2</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Blazers</a></li>
                                                                <li><a href="#">Jackets</a></li>
                                                                <li><a href="#">Collections</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="megamenu-image-box">
                                                            <a href="#" class="banner mega-banner_block">
                                                                <img src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                     alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="shop-grid.html">Id Card</a>
                                        <div class="megamenu">
                                            <div class="megamenu-list clearfix">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="menu_box">
                                                            <ul>
                                                                <li class="download">
                                                                    <a href="#">Clothing</a>
                                                                    <ul>
                                                                        <li class="download">
                                                                            <a href="#">Blazers---1</a>
                                                                            <ul>
                                                                                <li><a href="#">Blazers---2</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                        <li><a href="#">Blazers---1</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Blazers</a></li>
                                                                <li><a href="#">Jackets</a></li>
                                                                <li><a href="#">Collections</a></li>
                                                                <li><a href="#">T-Shirts</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="megamenu-image-box">
                                                            <a href="#" class="banner mega-banner_block">
                                                                <img src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                     alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="mega-banner">
                                                                <img
                                                                    src="//www.xinyerfid.com/uploads/201806/5b15fa23d107e.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">
                        <!--Option Box-->
                        <ul class="option-box">
                            <!--Search Box-->
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                            class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value=""
                                                               placeholder="Search Here" required>
                                                        <button type="submit" class="search-btn"><span
                                                                class="fa fa-search"></span></button>
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
        <!--End Header Lower-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" class="img-responsive"><img src="http://iph.href.lu/220x54?text=[logo]220X54" alt=""
                                                            title="" width="220"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="#">RFID TAGS</a></li>
                                <li><a href="#">RFID CARDS</a></li>
                                <li class="dropdown"><a href="#">RFID LABEL</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">RFID APPLICATION</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">ABOUT XINYE</a>
                                    <ul>
                                        <li><a href="#">default Page 01</a></li>
                                        <li><a href="#">default Page 02</a></li>
                                        <li class="dropdown"><a href="#">default Styles</a>
                                            <ul>
                                                <li><a href="#">Header Style 01</a></li>
                                                <li><a href="#">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">NEWS CENTER</a></li>
                                <li><a href="#">CONTACT US</a></li>
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

    <style>
        /*[digood-id="home_banner_box"] .main-slider-carousel .slide .content{*/
        /*position: absolute;*/
        /*top: 0;*/
        /*left: 0;*/
        /*height: 100%;*/
        /*width: 100%;*/
        /*display: flex;*/
        /*align-items: center;*/
        /*}*/
        /*[digood-id="home_banner_box"] .main-slider-carousel .slide .content .alternate{*/
        /*width: 100%;*/
        /*}*/
    </style>
    <!--Main Slider-->
    <section digood-id="home_banner_box" class="main-slider margin-top"
             data-responsive="[[1600,1400,640,480],[600,540,480,160]]">

        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide image" style="background-image:url('http://iph.href.lu/1920x600?text=banner1')">
                <!--                <div class="auto-container">-->
                <!--                    <div class="content">-->
                <!--                        <h2 class="alternate">Doors</h2>-->
                <!--                        <h3 class="alternate">That Open For You All.</h3>-->
                <!--                        <div class="text alternate">Must explain to you how all this mistaken idea of denouncing <br> pleasure and praising pain was born & will give you a completed.</div>-->
                <!--                        <div class="link-box">-->
                <!--                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>

            <div class="slide image" style="background-image:url('http://iph.href.lu/1920x600?text=banner2')">
                <!--                <div class="auto-container clearfix">-->
                <!--                    <div class="content alternate">-->
                <!--                        <h2 class="light">Prices</h2>-->
                <!--                        <h3 class="light">We Will Give Lowest Quote.</h3>-->
                <!--                        <div class="text light">Must explain to you how all this mistaken idea of denouncing pleasure and <br> praising pain was born and I will give you a completed.</div>-->
                <!--                        <div class="link-box">-->
                <!--                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>

            <div class="slide image" style="background-image:url('http://iph.href.lu/1920x600?text=banner3')">
                <!--                <div class="auto-container">-->
                <!--                    <div class="content">-->
                <!--                        <h2 class="alternate">Windows</h2>-->
                <!--                        <h3 class="alternate">Available in Wide Range of <span class="theme_color">Colors</span></h3>-->
                <!--                        <div class="text alternate">Must explain to you how all this mistaken idea of denouncing pleasure and <br> praising pain was born and I will give you a completed.</div>-->
                <!--                        <div class="link-box">-->
                <!--                            <a href="#" class="theme-btn btn-style-three"><span class="arrow flaticon-right-arrow-4"></span>About Company</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
            </div>

        </div>
    </section>
    <!--End Main Slider-->
    <script type="text/javascript">
        var $mains = $('[digood-id="home_banner_box"]');
        $mains.each(function (index) {
            var $main = $(this);
            var $images = $main.find('.image');
            var responsive = $main.data('responsive');
            responsive[0] = responsive[0].reverse();
            responsive[1] = responsive[1].reverse();

            var width = $(window).width();
            var len = responsive[0].length;
            var height = 0;
            for (var i = 0; i < len; i++) {
                if (responsive[0][i] < width) {
                    height = responsive[1][i];
                }
            }
            if (!height) height = responsive[1][0];
            $images.height(height);
            $(window).resize(function () {
                width = $(window).width();
                for (var i = 0; i < len; i++) {
                    if (responsive[0][i] < width) {
                        height = responsive[1][i];
                    }
                }
                if (!height) height = responsive[1][0];
                $images.height(height);
            });

            $images.width('100%');
        });
    </script>

    <!--  产品分类介绍  -->
    <section class="windows-page-section">
        <div class="auto-container">
            <!--Title Box-->
            <div class="title-box">
                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suitable for RFID TAGS
                            and RFID CARDS</font></font></h2>
                <div class="text">For a free estimate, please call <a href="#">18888</a> or <a href="#">click here</a>
                    to send us a message.
                </div>
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
                                            <div class="window-heading"><a href="#"><font
                                                        style="vertical-align: inherit;"><font
                                                            style="vertical-align: inherit;">RFID TAGS</font></font></a>
                                            </div>
                                            <a class="download" href="#"><span
                                                    class="arrow flaticon-right-arrow-4"></span><font
                                                    style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;"> Entrance</font></font></a>
                                        </div>
                                        <div class="image">
                                            <img src="http://iph.href.lu/300x224?text=[分类图片]300x224" alt="">
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
                                            <div class="window-heading"><a href="#"><font
                                                        style="vertical-align: inherit;"><font
                                                            style="vertical-align: inherit;">RFID
                                                            CARDS</font></font></a></div>
                                            <a class="download" href="#"><span
                                                    class="arrow flaticon-right-arrow-4"></span><font
                                                    style="vertical-align: inherit;"><font
                                                        style="vertical-align: inherit;"> Entrance</font></font></a>
                                        </div>
                                        <div class="image">
                                            <img src="http://iph.href.lu/300x224?text=[分类图片]300x224" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-12">
                    <div class="inner-column">
                        <h2>RFID COMPANY WITH OVER 20 YEARS OF INNOVATION</h2>
                        <div class="text">
                            <p>When choosing GAO RFID as your RFID system, hardware and software provider you gain the
                                benefit of our experience. With over 20 years of experience and over 1000 RFID systems
                                deployed in more than 40 countries, we bring you peace of mind knowing our engineers
                                right down to our sales staff are knowledgeable and can provide you with a reliable RFID
                                system, quality RFID hardware and customized software, quicker than our competitors.</p>
                        </div>

                        <h2>OUR RFID SYSTEMS</h2>
                        <div class="text">
                            <p>An RFID system is an integration of RFID readers, paired tags and software designed to
                                meet the need of a business or industry. RFID systems offer a number of benefits
                                including saving time and money, increasing productivity, securing and tracking
                                important assets and much more.<br/>

                                We offer a number of core systems that can be adapted to your specific needs, in your
                                part of the world. Whether you need to control access to your building or parking lot,
                                need to track assets in your building, monitor your employees or contractors on a job
                                site or track items along an assembly line we have an RFID system to help you. Learn
                                more about our systems by Industry – click here. Learn more about our RFID Systems in
                                general – click here.</p>
                        </div>

                        <div class="row clearfix">
                            <div class="column col-md-6 col-sm-12">

                                <!--Instalation Block-->
                                <div class="instalation-block">
                                    <div class="inner-block">
                                        <div class="icon-box">
                                            <span class="icon flaticon-check"></span>
                                        </div>
                                        <h4>RFID READERS</h4>
                                        <div class="instalation-text">adapted to your specific needs, in your part of
                                            the world.adapted to your specific needs, in your part of the world.adapted
                                            to your specific needs, in your part of the world.
                                        </div>
                                    </div>
                                </div>

                                <!--Instalation Block-->
                                <div class="instalation-block">
                                    <div class="inner-block">
                                        <div class="icon-box">
                                            <span class="icon flaticon-check"></span>
                                        </div>
                                        <h4>RFID TAGS</h4>
                                        <div class="instalation-text">adapted to your specific needs, in your part of
                                            the world.adapted to your specific needs, in your part of the world.adapted
                                            to your specific needs, in your part of the world.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="column col-md-6 col-sm-12">

                                <!--Instalation Block-->
                                <div class="instalation-block">
                                    <div class="inner-block">
                                        <div class="icon-box">
                                            <span class="icon flaticon-check"></span>
                                        </div>
                                        <h4>RFID PERIPHERALS</h4>
                                        <div class="instalation-text">adapted to your specific needs, in your part of
                                            the world.adapted to your specific needs, in your part of the world.adapted
                                            to your specific needs, in your part of the world.
                                        </div>
                                    </div>
                                </div>

                                <!--Instalation Block-->
                                <div class="instalation-block">
                                    <div class="inner-block">
                                        <div class="icon-box">
                                            <span class="icon flaticon-check"></span>
                                        </div>
                                        <h4>RFID PERIPHERALS & ANTENNAS</h4>
                                        <div class="instalation-text">adapted to your specific needs, in your part of
                                            the world.adapted to your specific needs, in your part of the world.adapted
                                            to your specific needs, in your part of the world.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--Chooser Section-->
                        <div class="choosing-section">
                            <div class="inner-section">
                                <h3>Reason for choice</h3>
                                <div class="inner-blocks">
                                    <div class="row clearfix">

                                        <!--Choose Block-->
                                        <div class="choose-block col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-award"></span>
                                                </div>
                                                <div class="block-title">Quality products</div>
                                            </div>
                                        </div>

                                        <!--Choose Block-->
                                        <div class="choose-block col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-architecture-and-city"></span>
                                                </div>
                                                <div class="block-title">Full insurance</div>
                                            </div>
                                        </div>

                                        <!--Choose Block-->
                                        <div class="choose-block col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-law"></span>
                                                </div>
                                                <div class="block-title">lifetime warranty</div>
                                            </div>
                                        </div>

                                        <!--Choose Block-->
                                        <div class="choose-block alternate col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-rating"></span>
                                                </div>
                                                <div class="block-title">100% satisfaction</div>
                                            </div>
                                        </div>

                                        <!--Choose Block-->
                                        <div class="choose-block alternate col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-labor-man"></span>
                                                </div>
                                                <div class="block-title">Expert installer</div>
                                            </div>
                                        </div>

                                        <!--Choose Block-->
                                        <div class="choose-block alternate col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner-block">
                                                <div class="icon-box">
                                                    <span class="icon flaticon-money"></span>
                                                </div>
                                                <div class="block-title">Huimin price</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Sidebar Column-->
                <!--<div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column"></div>
                </div>-->

            </div>
        </div>
    </section>
    <!--   /产品分类介绍  -->

    <!--  about us  -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="http://iph.href.lu/500x420?text=[About]500x420" alt=""/>
                            <a href="#" class="lightbox-image play-box"><span class="flaticon-play-arrow"></span></a>
                        </div>
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title alternate">
                            <h2>About <span class="theme_color">Company</span></h2>
                        </div>
                        <div class="text">Guangdong Xinye RFID Label Application Co., Ltd, a leading manufacturer of
                            smart cards and RFID labels, was founded by Shenzhen Xinye Intelligence Card Co., Ltd in
                            2017. With 10 years’ experience in RFID industry, Xinye has rich experience in the
                            production and development of RFID products, concentrating on the characteristics of RFID
                            applications for various industries. With profound knowledge about the application of RFID
                            products in various scenarios, Xinye can provide RFID product design ideas, technologies and
                            production support for various industries.
                        </div>
                        <ul class="list-style-one">
                            <li>Leader for custom door and RFID solutions.</li>
                            <li>Quality, performance & value.</li>
                            <li>Provide you with a convenient life</li>
                        </ul>
                        <a href="about.html" class="theme-btn btn-style-three"><span
                                class="arrow flaticon-right-arrow-4"></span>Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="services-section-two">
        <div class="auto-container">
            <div class="services-item-carousel-two owl-carousel owl-theme">

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-door-4"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">76 Yrs <br> of Experience</a></h3>
                            <div class="text">Great explorer of the truth, thats master-builder off human happiness.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-award"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">We <br> Care Quality</a></h3>
                            <div class="text">There anyone who loves or pursues or desires to obtain works of itself.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html"> $50 <br> Million Sales</a></h3>
                            <div class="text">Toil and pain can procure him some great pleasure to take a trivial
                                example.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-labor-man"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">Trained <br> Service Team</a></h3>
                            <div class="text">Who loves or pursues or desires obtain pain off itself, in toil to
                                exercise.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-door-4"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">76 Yrs <br> of Experience</a></h3>
                            <div class="text">Great explorer of the truth, thats master-builder off human happiness.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-award"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">We <br> Care Quality</a></h3>
                            <div class="text">There anyone who loves or pursues or desires to obtain works of itself.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-money"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html"> $50 <br> Million Sales</a></h3>
                            <div class="text">Toil and pain can procure him some great pleasure to take a trivial
                                example.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-labor-man"></span>
                        </div>
                        <div class="content-box">
                            <h3><a href="window-services.html">Trained <br> Service Team</a></h3>
                            <div class="text">Who loves or pursues or desires obtain pain off itself, in toil to
                                exercise.
                            </div>
                            <a href="doors-brands.html" class="read-more">Know More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  about us  -->

    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="inner-section"
             style="background-image: url(<?= DG_FTP_PATH ?>/assets/images/background/pattern-2.png)">
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
                            <!--Slide-->
                            <div class="ms-slide">
                                <div class="content-layer">
                                    <div class="image">
                                        <a href="http://iph.href.lu/670x450?text=[Gallery]670x450"
                                           class="lightbox-image" data-fancybox="latest-gallery"><img
                                                src="http://iph.href.lu/570x350?text=[Gallery]570x350" alt=""/></a>
                                    </div>
                                    <h3><a href="gallery.html">Multipoint Lock System</a></h3>
                                </div>
                            </div>
                            <!--Slide-->
                            <div class="ms-slide">
                                <div class="content-layer">
                                    <div class="image">
                                        <a href="http://iph.href.lu/670x450?text=[Gallery]670x450"
                                           class="lightbox-image" data-fancybox="latest-gallery"><img
                                                src="http://iph.href.lu/570x350?text=[Gallery]570x350" alt=""/></a>
                                    </div>
                                    <h3><a href="gallery.html">Multipoint Lock System</a></h3>
                                </div>
                            </div>
                            <!--Slide-->
                            <div class="ms-slide">
                                <div class="content-layer">
                                    <div class="image">
                                        <a href="http://iph.href.lu/670x450?text=[Gallery]670x450"
                                           class="lightbox-image" data-fancybox="latest-gallery"><img
                                                src="http://iph.href.lu/570x350?text=[Gallery]570x350" alt=""/></a>
                                    </div>
                                    <h3><a href="gallery.html">Multipoint Lock System</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- end of masterslider -->
                    </div>
                    <!-- end of Slider -->

                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->

    <!--  -------------------------------  -->
    <section digood-id="home_xy_latest_box">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-widget brands-widget sidebar">
                        <div class="sidebar-widget popular-posts">

                            <div class="widget-content">
                                <h2>LATEST NEWS</h2>
                                <article class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img
                                                src="http://iph.href.lu/70x70?text=[News]" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">5 reasons why uPVC is a better
                                            fenestration material.</a></div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img
                                                src="http://iph.href.lu/70x70?text=[News]" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Distinctive designs for unique homes:
                                            Weatherseal uPVC</a></div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img
                                                src="http://iph.href.lu/70x70?text=[News]" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Fill your home with happiness with uPVC
                                            windows!</a></div>
                                </article>

                                <article class="post">
                                    <figure class="post-thumb"><a href="blog-single.html"><img
                                                src="http://iph.href.lu/70x70?text=[News]" alt=""></a></figure>
                                    <div class="text"><a href="blog-single.html">Fill your home with happiness with uPVC
                                            windows!</a></div>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div digood-id="home_xy_gallery_box">
                        <div class="sec-title">
                            <div class="title-inner">
                                <h2>Latest <span class="theme_color">Products</span></h2>
                                <p>high-temperature, on-metal, animal, medical, hazardous, beacon, wristband, tamper
                                    proof, tire, nail. They are available in fixed, desktop, and Bluetooth.</p>
                            </div>
                        </div>
                        <section class="gallery-section-two">
                            <div class="gallery-carousel owl-carousel owl-theme">
                                <!--Gallery Block-->
                                <div class="gallery-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="http://iph.href.lu/600x460?text=[product images]" alt=""/>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <h3><a href="#">ICODE SLI-X RFID CARD</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Gallery Block-->
                                <div class="gallery-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="http://iph.href.lu/600x460?text=[product images]" alt=""/>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <h3><a href="#">ICODE SLI-X RFID CARD</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Gallery Block-->
                                <div class="gallery-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="http://iph.href.lu/600x460?text=[product images]" alt=""/>
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <h3><a href="#">ICODE SLI-X RFID CARD</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--  -------------------------------  -->

    <!--Estimate Section-->
    <section class="estimate-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Contact <span class="theme_color">Us</span></h2>
            </div>
            <div class="row clearfix">

                <!--Form Column-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--Estimate Form-->
                        <div class="estimate-form">

                            <form method="post" action="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="name" value="" placeholder="Name">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" value="" placeholder="Email *" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea placeholder="Message *" name="message" required></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-two"><span
                                                class="arrow flaticon-right-arrow-4"></span>Get Estimation
                                        </button>
                                    </div>
                                </div>
                        </div>
                        </form>

                    </div>
                </div>

                <!--Info Column-->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="row clearfix">

                            <!--Column-->
                            <div class="column col-lg-6 col-md-6 col-sm-12">

                                <!--Info Block-->
                                <div class="info-block">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-place"></span>
                                        </div>
                                        <h3>Visit Our Place</h3>
                                        <ul>
                                            <li>75014 Paris, France <br> 48 Boulevard Jourdan Candiate.</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!--Column-->
                            <div class="column col-lg-6 col-md-6 col-sm-12">

                                <!--Info Block-->
                                <div class="info-block padd-left">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-mail"></span>
                                        </div>
                                        <h3>Phone & Mail</h3>
                                        <ul>
                                            <li>+0 789.0123.456</li>
                                            <li>supportyou@example.com</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Estimate Section-->

    <!--Main Footer-->
    <footer class="main-footer">

        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <h2>Usefull Links</h2>
                            <div class="row clearfix">

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="footer-link">
                                        <li><a href="#">Window Styles</a></li>
                                        <li><a href="#">Door Styles</a></li>
                                        <li><a href="#">Maintenance</a></li>
                                        <li><a href="#">uPVC Features</a></li>
                                        <li><a href="#">Work Gallery</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Our Products</a></li>
                                    </ul>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="footer-link">
                                        <li><a href="#">About Company</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Appointment</a></li>
                                        <li><a href="#">Get Free Estimate</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget news-widget">
                            <h2>Latest News</h2>

                            <!--News Widget Block-->
                            <div class="news-widget-block">
                                <div class="widget-inner">
                                    <div class="image">
                                        <img src="http://iph.href.lu/80x80?text=[news]" alt=""/>
                                    </div>
                                    <h3><a href="blog-single.html">5 reasons why uPVC is a better fenestration
                                            material.</a></h3>
                                    <div class="post-date">14th August, 2018</div>
                                </div>
                            </div>

                            <!--News Widget Block-->
                            <div class="news-widget-block">
                                <div class="widget-inner">
                                    <div class="image">
                                        <img src="http://iph.href.lu/80x80?text=[news]" alt=""/>
                                    </div>
                                    <h3><a href="blog-single.html">Shape your dream house with uPVC doors!.</a></h3>
                                    <div class="post-date">21st June, 2018</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget newsletter-widget">
                            <h2>SEO keyword title at the bottom of the footer</h2>
                            <div class="widget-content">
                                <div class="message-icon"></div>
                                <div class="text">high-temperature, on-metal, animal, medical, hazardous, beacon,
                                    wristband, tamper proof, tire, nail. They are available in fixed, desktop, handheld,
                                    or mobile and are compatible with Android, iOS, GPS, 1D/2D barcode, and Bluetooth.
                                </div>
                                <!--Social Icon One-->
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="icon fa fa-facebook"></span>facebook</a></li>
                                    <li><a href="#"><span class="icon fa fa-twitter"></span>twitter</a></li>
                                    <li><a href="#"><span class="icon fa fa-linkedin"></span>linkedin</a></li>
                                    <li><a href="#"><span class="icon fa fa-google-plus"></span>google +</a></li>
                                    <li><a href="#"><span class="icon fa fa-vimeo"></span>vimeo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="text-center">
                    <div class="copyright">Copyright 2018 All Right Reserved. Powered by <a href="#">DIGOOD</a></div>
                </div>
            </div>
        </div>

    </footer>
    <!--End Main Footer-->
</div>
<!--End pagewrapper-->

<script src="<?= DG_FTP_PATH ?>/assets/js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/jquery.fancybox.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/appear.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/owl.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/wow.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/slick.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/jquery-ui.js"></script>
<!-- Master Slider -->
<script src="<?= DG_FTP_PATH ?>/assets/js/masterslider/jquery.easing.min.js"></script>
<script src="<?= DG_FTP_PATH ?>/assets/js/masterslider/masterslider.min.js"></script>
<!--End Master Slider -->

<script src="<?= DG_FTP_PATH ?>/assets/js/script.js"></script>
<!--End Google Map APi-->


</body>

</html>


