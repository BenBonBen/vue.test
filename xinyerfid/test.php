<?php
//+----------------------------------------------------|
// | Description: test.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/2
//+----------------------------------------------------|

$file = __DIR__.'/'.$_SERVER['REQUEST_URI'];
if(file_exists($file)) {
    include_once $file;
} else {
    echo "{$_SERVER['REQUEST_URI']}预览页面不存在,请通过链接直接访问";
}
