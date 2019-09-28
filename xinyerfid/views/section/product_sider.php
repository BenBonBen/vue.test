<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/11/24
 * Time: 10:03
 */
?>


<div class="mg-b-10 search-product">
    <div>
        <form action="/search/products" method="GET">
            <input type="search" placeholder="Search product..." name="keyword" required/>
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
</div>

<?php if(isset($sideNavData) && $sideNavData && count($sideNavData)): ?>
    <div class="dg-side-weight dg-weight-category-menu">
        <h2 class="dg-sider-title">Categorys</h2>
        <?php
        $items = $sideNavData;
        ## 验证必填参数
        if(!isset($items)) {
            echo "<code>参数不完整：必须传入 items , items 是一个具有层级关系的数组</code>";
            return;
        }
        ?>
        <?php function navInit($items, $level=1) { ?>
            <ul class="<?= ($level > 1)? 'dg-sub-items' : 'dg-list-items' ?>">
                <?php foreach ($items as $index => $item): ?>
                    <li class="dg-item">
                <span>
                    <a href="<?= $item['link'] ?>.html"><?= Lang($item['name']) ?> </a>
                    <?php if(@$item['children']): ?>
                        <i class="fa fa-sort-down"></i>
                    <?php endif; ?>
                </span>
                        <?php if(@$item['children']): ?>
                            <?= navInit($item['children'], $level+1); ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php } ?>
        <?php navInit($items, $level=1); ?>
    </div>
<?php endif; ?>

<?php if(isset($recommData) && count($recommData)): ?>
    <div class="dg-side-weight dg-weight-hot-product">
        <h2 class="dg-sider-title">Hot Product</h2>
        <ul class="dg-list-items">
            <?php foreach ($recommData as $item): ?>
                <?php
                $name = Lang($item['name']);
                $image = Img($item['img']);
                $url = "/product/{$item['url']}.html";
                ?>
                <li class="dg-item">
                    <div class="dg-image">
                        <a href="<?=$url?>" title="<?=$name?>"><img src="<?=$image?>?imageView2/1/w/80/h/80" alt="<?=$name?>"></a>
                    </div>
                    <div class="dg-content">
                        <h3 class="dg-title"><a href="<?=$url?>" title="<?=$name?>"><?=$name?></a></h3>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
