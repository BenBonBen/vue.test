<?php
//+----------------------------------------------------|
// | Description: contact-us.php
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018/8/3
//+----------------------------------------------------|
include __DIR__.'/../common/header.php';
?>
<link href="<?=DG_FTP_PATH?>/assets/css/contact-3.css" rel="stylesheet">
<!--面包屑导航-->
<section class="banner_area_plane" style="background-image: url('<?= $bread_img ?>?imageView2/1/w/1920/h/300');">
    <div class="container">
        <div class="banner_content">
            <h3><?=Lang($pageData['title'])?></h3>
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
            <a href="javascript:;"><?=Lang($pageData['title'])?></a>
        </div>
    </div>
</div>
<!-- / 面包屑导航-->


<div digood-id="main_contact_box_cp">
    <div class="site-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="fp-section-title clearfix">
                        <h2>Contact details</h2>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version">
                        <span class="fp-icon"><i class="fa fa-phone-square"></i></span>
                        <div class="desc">
                            <p>+86(0769)83181213</p>
                        </div>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-envelope"></i></span>
                        <div class="desc">
                            <p><a href="mailto:sales@xinyerfid.com">sales@xinyerfid.com</a></p>
                        </div>
                    </div>
                    <div class="fp-icon-box-5 icon-center dark-version ">
                        <span class="fp-icon"><i class="fa fa-map-marker"></i></span>
                        <div class="desc">
                            <p><?=Lang($config['com_address'])?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="fp-section-title clearfix custom-title ">
                        <h1><?=Lang($pageData['title'])?></h1>
                    </div>
                    <div class="fp-form fp-form-3  paddtop40">
                        <form novalidate="novalidate" action="//inquiry.digoodcms.com/api/<?=$user['username']?>" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="contact[Name]" placeholder="Your Name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="email" placeholder="Email Address *" type="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="contact[phone]" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field">
                                        <input name="address" placeholder="Your Address" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message *" required></textarea>
                                    </div>
                                </div>

                                <input name="page" type="hidden">
                                <input id="ipAddress" name="geoip[ipAddress]" type="hidden" value="">
                                <input id="countryName" name="geoip[countryName]" type="hidden" value="">
                                <input id="countryCode" name="geoip[countryCode]" type="hidden" value="">
                                <input id="regionName" name="geoip[regionName]" type="hidden" value="">
                                <input id="cityName" name="geoip[cityName]" type="hidden" value="">
                                <input id="zipCode" name="geoip[zipCode]" type="hidden" value="">
                                <input id="latitude" name="geoip[latitude]" type="hidden" value="">
                                <input id="longitude" name="geoip[longitude]" type="hidden" value="">
                                <input id="timeZone" name="geoip[timeZone]" type="hidden" value="">
                                <input name="useragent[browser]" type="hidden" value="Chrome[64.0.3282.167]">
                                <input name="useragent[platform]" type="hidden" value="Windows 10">
                                <input name="useragent[lang]" type="hidden" value="zh-CN,zh;q=0.9,en;q=0.8">
                                <input name="useragent[mobile]" type="hidden" value="No">
                                <input name="useragent[agent_string]" type="hidden" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.167 Safari/537.36">

                                <div class="col-sm-12 submit text-center paddtop30">
                                    <input type="submit" value="Submit Now" class="fh-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if(Lang($config['com_map_marker'])): ?>
    <!-- Google Map JS -->
    <script src="//ditu.google.cn/maps/api/js?key=AIzaSyDYaYW3Votwa53NEf3kXbv0cvPBP0tiU4Y&sensor=false&language=en"></script>
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', initialize);
        var myCenter = new google.maps.LatLng(<?= Lang($config['com_map_marker']) ?>);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
                title: "<?= $config['com_address']? Lang($config['com_address']) : '' ?>"
            });
            var infowindow = new google.maps.InfoWindow({
                content: "<?= $config['com_address']? Lang($config['com_address']) : '' ?>"
            });
            marker.setMap(map);
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="googleMap" style="width:100%; height:400px;"></div>
    <!-- End Google Map JS -->
<?php endif; ?>

<?php include __DIR__.'/../common/footer.php' ?>