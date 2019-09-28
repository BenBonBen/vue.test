<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/11/30
 * Time: 10:42
 */
?>
<?php if(isset($aboutNavData) && count($aboutNavData)): ?>
    <div class="single-sidebar-widget">
        <ul class="nav nav-tabs" role="tablist">
            <?php foreach($aboutNavData as $item): ?>
                <li class="<?php if($uri['url'] == $item['url']) echo "active"?>"><a href="<?= $item['link'] ?>.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= Lang($item['name']) ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>