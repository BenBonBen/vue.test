<?php
//+----------------------------------------------------|
// | Description: header.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-23
//+----------------------------------------------------|
?>
<!DOCTYPE html>
<html lang="<?= $site['lang_sign'] ?>" dir="<?= $site['dir'] ?>">

<head>
    <meta name="google-site-verification" content="xstogzkF8yjNbuN__zOG368h7oMY8MMIfKfz_kCW9oE" /> 
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=$seoInfoHtml?>
    <!-- Favicon -->
    <?php if($config['site_favicon']): ?>
        <link rel="shortcut icon" type="image/png" href="<?=Img($config['site_favicon'])?>" />
    <?php endif; ?>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!--MasterSlider-->
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/masterslider/style/masterslider.css" />
    <link href="<?=DG_FTP_PATH?>/assets/css/masterslider/skins/default/style.css" rel="stylesheet">
    <link href="<?=DG_FTP_PATH?>/assets/css/masterslider/style/ms-caro3d.css" rel="stylesheet">
    <!--End MasterSlider-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//assets.digoodcms.com/ouyang/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/owl.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/jquery.timepicker.min.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/jquery.mCustomScrollbar.min.css">

    <link href="<?=DG_FTP_PATH?>/assets/css/new-style.css" rel="stylesheet">
    <link href="<?=DG_FTP_PATH?>/assets/css/slick.css" rel="stylesheet">
    <link href="<?=DG_FTP_PATH?>/assets/css/responsive.css" rel="stylesheet">
  	<style>
	  .main-menu .navigation>li>a{ font-weight: 500; font-size: 14px;}
	  
	  .main-header .top-left .outer-box .option-list li a{
		  font-size: 13px;
	  }
	  .main-header .top-language-box .option-list li{
		  padding-right: 8px;
		  margin-right: 8px;
	  }
	  .header-top .social-box li{
		  margin-left: 6px;
	  }
	  .header-top .social-box li:first-child{
		  margin-left: 15px;
	  }
	  @media (max-width:768px) {
	  	.header-top .top-left .text {
			padding: 0;
		}
	  	.main-header .outer-box .option-list li {
			font-size: 9px;
			padding-right: 10px;
			margin-right: 5px;
		}
		.main-header .outer-box .option-list li .icon {
			font-size: 14px;
		}
		.main-header .top-language-box .option-list li {
			padding-right: 4px;
			margin-right: 4px;
		}
		.main-header .header-upper > .auto-container {
			padding: 0;
		}
		
		.main-menu .navbar-header {
    		padding: 5px 0;
		}
		
		.main-header .outer-box .option-box {
			margin-top: 16px;
			margin-right: 25px;
		}
		
		.main-menu .navbar-header .navbar-toggler {
    		margin-top: 5px;
		}
		.header-style-two .nav-outer {
			box-shadow: 0 0 5px #ddd;
		}
		
		.windows-page-section {
			padding: 25px 0px 40px;
		}
		.window-block .inner-block .content {
			width: 50%;
		}
		.window-block .inner-block .image {
			float: left;
			width: 50%;
			margin-top: 10%;
		}
		
		.window-block .inner-block .icon-box {
			font-size: 31px;
			margin-bottom: 8px;
		}
		.window-block .inner-block .icon-box {
			font-size:31px;
		}
		.window-block .inner-block .window-heading {
		  font-size: 15px;
		  line-height: 1.4em;
		  margin-bottom: 10px;
    	  margin-left: -1px;
		}
		
		.window-block .inner-block .window-heading a {
			font-size: 16px;
		}
		
		.window-block .inner-block .download {
		  font-size: 14px;
		}
		
	  }
	  
  	</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
  	<script src="<?=DG_FTP_PATH?>/assets/js/owl.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="page-wrapper">
<?php include "header_content.php"; ?>