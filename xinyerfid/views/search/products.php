<?php
//+----------------------------------------------------|
// | Description: product.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-22
//+----------------------------------------------------|
include __DIR__.'/../common/header.php';
$pageData['name'] = 'Search Info';
$bread_img = Img($config['inside_default_banner']);
?>

<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/products.css">
<style>
	.dg-sider-left .dg-layout-main{
		width:100%;
	}
</style>

<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= Img($config['inside_default_banner']) ?>?imageView2/1/w/1920/h/200/q/70');">
	<div class="container">
		<div class="banner_content">
			<h3><?=Lang($pageData['name'])?></h3>
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
		<div class="dg-layout-wrapper dg-sider-left dg-sider-search-left">
			<div class="dg-layout-main">
				<?php if(isset($listData) && count($listData)): ?>
					<div class="row">
						<?php foreach ($listData as $index => $item): ?>
							<?php
							$name = Lang($item['name']);
							$product_size = Lang($item['product_size']);
							$image = Img($item['img']);
							$url = "/product/{$item['url']}.html";
							?>
							<div class="col-md-3 col-sm-6">
								<div digood-id="list_product_item_3_oyh">
									<div class="dg-single-project">
										<div class="image">
											<a href="<?=$url?>">
												<img src="<?=$image?>?imageview2/1/w/400/h/300/q/70" alt="<?=$name?>">
											</a>
										</div>
										<div class="text">
											<h4>
												<a class="tran3s" href="<?=$url?>" title="<?=$name?>"><?=$name?></a>
											</h4>
										</div>
										<!-- /.text -->
									</div>
									<!-- /.single-project -->
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				<?php else: ?>
					<?php include __DIR__.'/../common/error_info.php';?>
				<?php endif; ?>

				<?=$pageinationHtml?>
			</div>
		</div>
	</div>
</section>

<?php include __DIR__.'/../common/footer.php' ?>