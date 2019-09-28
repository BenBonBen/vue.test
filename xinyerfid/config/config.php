<?php
//+----------------------------------------------------|
// | Description: 
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-7-13
//+----------------------------------------------------|

return [
    
    ## 网站调试 true|false
    'site_debug' => false,

    ## 作者
    'author' => 'ChuangPeng',

    ## ftp路径
    'ftp_path' => 'peng/xinyerfid/v5',

    ## AMP 地址
    'amp_url' => $config['site_amp_url'],

    ## 分页配置
    'pagination' => [
        ## 外部容器
        'wrap_html' => '<nav aria-label="Page navigation" class="blog_pagination text-center"><ul class="pagination">%s</ul></nav>',
        ## 上一页
        'prev_html' => '<li><a href="%s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>',
        ## 下一页
        'next_html' => '<li><a href="%s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>',
        ## 第一页
        'first_html' => '<li><a href="%s"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a> </li>',
        ## 最后一页
        'last_html' => '<li><a href="%s"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>',
        ## 当前页
        'now_html' => '<li class="active"><a href="javascript:;">%s</a></li>',
        ## 数字
        'number_html' => '<li><a href="%s">%s</a></li>'
    ],

];