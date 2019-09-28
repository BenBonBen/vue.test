<?php
//+----------------------------------------------------|
// | Description: article.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-22
//+----------------------------------------------------|
include __DIR__.'/../common/header.php';
$pageData['name'] = 'Search Info';
$bread_img = Img($config['inside_default_banner']);
?>

<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/articles.css">
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
				<a href="/articles/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
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
							$title = Lang($item['title']);
							$image = Img($item['img']);
							$url = "/article/{$item['url']}.html";
							$itemCategory = $db->get_where('articles',['id' => $item['articles_id']])->row_array();
							$description = Lang($item['content'],'sub_string:220');
							?>
							<div class="col-md-12">
								<div class="blog-wrapper clearfix">
									<div class="entry-thumbnail col-md-4 col-sm-4 col-xs-12">
										<?php if($item['img']): ?>
											<a href="<?=$url?>">
												<img src="<?=$image?>?imageView2/1/w/400/h/300/q/70" alt="<?=$title?>">
											</a>
										<?php endif; ?>
										<div class="entry-time">
											<?php $time = strtotime($item['posted_time']); ?>
											<div class="col-md-12"><i class="fa fa-calendar"></i> <?=date('Y-m-d',$time)?></div>
										</div>
									</div>
									<div class="col-md-8 col-sm-8 col-xs-12">
										<div class="entry-header">
											<h2 class="entry-title"><a href="<?=$url?>"><?=$title?></a></h2>
										</div>
										<div class="entry-content">
											<p><?=$description?>...</p>
										</div>
									</div>
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