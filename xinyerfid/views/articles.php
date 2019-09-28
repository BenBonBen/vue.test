<?php
//+----------------------------------------------------|
// | Description: articles.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-22
//+----------------------------------------------------|
include 'common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/articles.css">
<script src="<?=DG_FTP_PATH?>/assets/js/product.js"></script>

<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= $bread_img ?>?imageView2/1/w/1920/h/300');">
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
				<a href="/articles/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
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
				<div class="theme-container">
					<div class="about-title">
						<h1 class="sub-title"><?=Lang($pageData['name'])?></h1>
					</div>
					<?php if(trim(Lang($pageData['detail']))): ?>
						<div class="about-detail">
							<p><?=Lang($pageData['detail'])?></p>
						</div>
					<?php endif; ?>
					<hr/>
				</div>

				<div class="row">
					<?php foreach ($listData as $index => $item): ?>
						<?php
						$title = Lang($item['title']);
						$image = Img($item['img']);
						$url = "/article/{$item['url']}.html";
						$description = Lang($item['content'],'sub_string:220');
						$time = date( 'M d Y', strtotime($item['posted_time']) );
						?>
						<div class="col-md-12">
							<div class="blog-wrapper clearfix">
								<div class="entry-thumbnail col-md-4 col-sm-4 col-xs-12">
									<?php if($item['img']): ?>
										<a href="<?=$url?>">
											<img src="<?=$image?>?imageView2/1/w/400/h/300" title="<?=$title?>" alt="<?=$title?>">
										</a>
										<div class="entry-time">
											<?php  ?>
											<div class="col-md-12"><i class="fa fa-calendar"></i> <?=$time?></div>
										</div>
									<?php endif; ?>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="entry-header">
										<h2 class="entry-title"><a href="<?=$url?>" title="<?=$title?>"><?=$title?></a></h2>
									</div>
									<div class="entry-content">
										<p><?=$description?>...</p>
										<a href="<?=$url?>" class="read-more">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?=$pageinationHtml?>
			</div>
			<div class="dg-layout-sider">
				<?php include 'section/article_sider.php'; ?>
			</div>
		</div>
	</div>
</section>

<?php include 'common/footer.php' ?>