<?php
//+----------------------------------------------------|
// | Description: product.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-23
//+----------------------------------------------------|
include 'common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/product.css">
<script src="<?=DG_FTP_PATH?>/assets/js/product.js"></script>
<style>
  .dg-tab .dg-tab-content *{
	font-family: 'Roboto', sans-serif !important;
  	font-size: 16px !important;
  }
  
</style>
<script type="text/javascript">
	$(function () {
		if($('.dg-products-section .dg-tab-panel').length){
			$('.dg-products-section .dg-tab-panel table').each(function () {
				$(this).addClass('table table-bordered table-striped').wrap("<div class=\"table-responsive\"></div>");
			});
			$('.dg-products-section .dg-tab-panel img').each(function () {
				$(this).addClass('img-responsive');
			});
		}
	});
</script>

<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= $bread_img ?>?imageView2/1/w/1920/h/300');">
	<div class="container">
		<div class="banner_content">
			<h3><?=Lang($topParentData['name'])?></h3>
		</div>
	</div>
</section>
<div class="banner_link hidden-xs hidden-sm">
	<div class="container">
		<div class="b_crum_link_inner">
			<a href="/">Home</a>
			<?php foreach ($breadcrumbsData as $item): ?>
				<a href="/products/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
			<?php endforeach; ?>
			<a href="javascript:;"><?=Lang($pageData['name'])?></a>
		</div>
	</div>
</div>
<!-- / 面包屑导航-->

<section class="dg-products-section">
	<div class="container">
		<div class="dg-layout-wrapper dg-sider-left">
			<div class="dg-layout-main">
				<div class="row">
					<div class="col-sm-5">
						<div class="dg-product-images-slider">
							<?php
							$images = [];
							$image = Img($pageData['img']);
							$album = json_decode($pageData['album']);
							$name = Lang($pageData['name']);
							?>
							<div class="dg-image-main">
								<div class="dg-image">
									<img src="<?=$image?>?imageView2/2/w/600/h/450" alt="<?=$name?>">
									<div class="dg-mark"></div>
								</div>
								<div class="dg-zoom">
									<img src="<?=$image?>?imageView2/2/w/600/h/450" alt="<?=$name?>">
								</div>
							</div>
							<?php if(count($album)): ?>
								<?php
								array_unshift($album, $pageData['img']);
								?>
								<div class="dg-image-list">
									<div class="dg-list-wrap">
										<ul class="dg-list">
											<?php foreach ($album as $index => $albumImage): ?>
												<?php $albumImage = Img($albumImage); ?>
												<li class="dg-image <?php if($index === 0) echo 'active'?>"><img data-src="<?=$albumImage?>?imageView2/2/w/600/h/450" src="<?=$albumImage?>?imageView2/2/w/400/h/300" alt="<?=$name?>"></li>
											<?php endforeach; ?>
										</ul>
									</div>
									<button class="dg-button dg-prev"><i class="fa fa-arrow-left"></i></button>
									<button class="dg-button dg-next"><i class="fa fa-arrow-right"></i></button>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="dg-product-description">
							<div class="dg-des-header">
								<h1 class="dg-des-title"><?=$name?></h1>
								<hr>
							</div>
							<div class="dg-des-content">
								<div class="dg-des-price"><p><?=Lang($pageData['description'])?></p></div>
								<hr>
							</div>
							<div class="dg-des-buttons">
								<a class="dg-btn dg-theme" href="<?= $contactPageData['link'] ?>.html">Request Quote</a>
								<?php if($pageData['product_download']): ?>
									<a class="dg-btn" href="<?=outFile($pageData['product_download'])?>" download="<?=$name?>" target="_blank">PDF Download</a>
								<?php endif; ?>
							</div>
							<div class="dg-des-buttons">
								<div class="dg-des-share">
									<div class="addthis_inline_share_toolbox_fq1z"></div>
									<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b9ed729183ea96"></script>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="dg-layout-content">
					<div class="dg-tab">
						<div class="dg-tab-nav">
							<div class="dg-tab-action active">Product Details</div>
						</div>
						<div class="dg-tab-panel">
							<?php if(trim($pageData['detail'])): ?>
								<div class="dg-tab-content active">
									<?=Lang($pageData['detail'], 'unescape')?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="dg-layout-sider">
				<?php include 'section/product_sider.php'; ?>
			</div>
		</div>
	</div>
</section>

<?php include 'common/footer.php' ?>