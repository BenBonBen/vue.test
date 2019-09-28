<?php
//+----------------------------------------------------|
// | Description: footer.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/6
//+----------------------------------------------------|
include "footer_content.php";
?>
</div>
<!--End pagewrapper-->

<script type="text/javascript">

    var YOUR_KEY = "4f21d3e89231c93599ff1f8b7a82a008d03beed6ce46978d8e2816f13ad7e5c1";
    var theURL = "//api.ipinfodb.com/v3/ip-city/?key=" + YOUR_KEY + "&format=json&callback=?";

    $.ajax({
        type: "POST",
        url: theURL,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        method: 'GET',
        success: function (data) {
            $("#country").val(data.countryCode);
            $("#ipAddress").val(data.ipAddress);
            $("#countryName").val(data.countryName);
            $("#countryCode").val(data.countryCode);
            $("#regionName").val(data.regionName);
            $("#cityName").val(data.cityName);
            $("#zipCode").val(data.zipCode);
            $("#latitude").val(data.latitude);
            $("#longitude").val(data.longitude);
            $("#timeZone").val(data.timeZone);
        }
    });


    function recordSourceAddress(){
        window.onbeforeunload = function(e){
            window.sessionStorage.setItem('referer_page', window.location.href);
        };

        if($('input[name*="page"]').length){
            var referer_page = window.sessionStorage.getItem('referer_page') || '';
            $('input[name*="page"]').val(referer_page);
        }
    }
    $(function(){
        recordSourceAddress();
    });
</script>

<!-- Global site tag (gtag.js) - Google Ads: 750925838 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-750925838"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-750925838');
  gtag('config', 'UA-85696910-41');
</script>

<script src="<?=DG_FTP_PATH?>/assets/js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/jquery.fancybox.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/appear.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/wow.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/slick.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/jquery-ui.js"></script>
<!-- Master Slider -->
<script src="<?=DG_FTP_PATH?>/assets/js/masterslider/jquery.easing.min.js"></script>
<script src="<?=DG_FTP_PATH?>/assets/js/masterslider/masterslider.min.js"></script>
<!--End Master Slider -->

<script src="<?=DG_FTP_PATH?>/assets/js/script.js"></script>
<!--End Google Map APi-->

<script type="text/javascript" charset="utf-8">
    ;(function (W, D) {
        W.ec_corpid = '8554313';
        W.ec_cskey = 'LrwQRVPPjuEJZMbqP3';
        W.ec_scheme = '0';
        var s = D.createElement('script');
        s.charset = 'utf-8';
        s.src = '//1.staticec.com/kf/sdk/js/ec_cs.js';
        D.getElementsByTagName('head')[0].appendChild(s);
    })(window, document);
</script>

</body>

</html>
