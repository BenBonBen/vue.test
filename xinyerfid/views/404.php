<?php
//+----------------------------------------------------|
// | Description: 404.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/3
//+----------------------------------------------------|
include 'common/header.php';
?>
<style>
    *{box-sizing:border-box}#container{background:#f2f3f7;border:30px solid #FFF;position:relative;height:680px;width:100%;left:0;top:0}#container .overlay{position:absolute;background-repeat:repeat;opacity:.1;width:100%;height:100%}#container .item-title{position:absolute;z-index:0;left:0;padding:0;top:30vh;width:100%;padding:0 5%;-webkit-transition:all .3s cubic-bezier(0, 0, .58, 1);-moz-transition:all .3s cubic-bezier(0, 0, .58, 1);-ms-transition:all .3s cubic-bezier(0, 0, .58, 1);-o-transition:all .3s cubic-bezier(0, 0, .58, 1);transition:all .3s cubic-bezier(0, 0, .58, 1);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;opacity:1;visibility:visible}#container .item-title #message{max-width:600px;min-height:150px;margin:0 auto}#container .item-title #message p:first-child{font-size:80px;font-weight:200;color:#000;line-height: normal;}#container .item-title .link-bottom{margin:0 auto;max-width:600px}#container .item-title .link-bottom .link-icon{margin-right:10px;font-size:22px;color:#888;text-decoration:none}@media only screen and (max-width: 480px){#container{min-height:100%;height:auto}#container .overlay{min-height:100%;height:auto}#container .item-title{padding:100px 5%;position:relative;top:0;-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}#container .item-title #message{min-height:240px}#container .item-title #message p:first-child{font-size:50px;font-weight:200}}
</style>
<script>
    setTimeout(function() {
        window.location.href = "/";
    },3500);
</script>
<div id="container">
    <div class="overlay"></div>
    <div class="item-title">
        <div id="message">
            <p>ERROR 404 NOT FOUND</p>
        </div>
        <div class="link-bottom">
            <a class="link-icon" href="/"> HOME</a>
            <span>Return to the home page after 5 seconds</span>
        </div>
    </div>
</div>

<?php include 'common/footer.php' ?>
