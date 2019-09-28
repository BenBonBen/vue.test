<?php
//+----------------------------------------------------|
// | Description: article.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-8-23
//+----------------------------------------------------|
include 'common/header.php';
?>
<link rel="stylesheet" href="<?=DG_FTP_PATH?>/assets/css/article.css">
<script src="<?=DG_FTP_PATH?>/assets/js/product.js"></script>
<script type="text/javascript">
$(function () {
	if($('[digood-id="article_page_hd_cp"] .entry-content').length){
		$('[digood-id="article_page_hd_cp"] .entry-content table').each(function () {
			$(this).addClass('table table-bordered table-striped').wrap("<div class=\"table-responsive\"></div>");
		});
		$('[digood-id="article_page_hd_cp"] .entry-content img').each(function () {
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
			<a href="/articles/<?=$item['url']?>.html"><?=Lang($item['name'])?></a>
		<?php endforeach; ?>
		<a href="javascript:;"><?=Lang($pageData['title'])?></a>
	</div>
</div>
</div>
<!-- / 面包屑导航-->
<section digood-id="article_page_hd_cp" class="dg-products-section">
<div class="container">
	<div class="dg-layout-wrapper dg-sider-left">
		<div class="dg-layout-main">
			<div class="row">
				<div class="blog-wrapper">
					<div class="col-md-12">
						<div class="article-title">
							<br/>
							<h1><?=Lang($pageData['title'])?></h1>
						</div>
					</div>
					<div class="col-md-12">
						<div class="entry-content no-title">
							<?=Lang($pageData['content'])?>
							<br/><br/>
						</div>
					</div>
					<div class="col-md-12 share" >
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="addthis_inline_share_toolbox_fq1z"></div>
							<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b9ed729183ea96"></script>
						</div>
						<?php $time = strtotime($pageData['posted_time']); ?>
						<div class="col-md-6 col-sm-6 col-xs-6" style="text-align: right"><i class="fa fa-calendar"></i> <?=date('M d Y',$time)?></div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6 col-sm-6 col-xs-6 pre">
							<a href="<?= $prevPageData['url']? "/article/{$prevPageData['url']}.html": 'javascript:;' ?>"
								<?php if($prevPageData['title']) echo 'disabled="true"'; ?>
							   title="<?= $prevPageData['title']? Lang($prevPageData['title']): 'No data' ?>">&lt;&lt; Previous Page</a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 next">
							<a href="<?= $nextPageData['url']? "/article/{$nextPageData['url']}.html": 'javascript:;' ?>"
								<?php if($nextPageData['title']) echo 'disabled="true"'; ?>
							   title="<?= $nextPageData['title']? Lang($nextPageData['title']): 'No data' ?>">Next Page &gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dg-layout-sider">
			<?php include 'section/article_sider.php'; ?>
		</div>
	</div>
</div>
</section>

<?php include 'common/footer.php' ?>