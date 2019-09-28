<?php
/**
 * Created by PhpStorm.
 * User: ChuangPeng
 * Date: 2018/12/17
 * Time: 10:25
 */
?>
<style>
    .mp_0 {
        padding: 0!important;
        margin: 0!important;
    }
</style>
<section class="estimate-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Contact <span class="theme_color">Us</span></h2>
        </div>
        <div class="row clearfix">

            <!--Form Column-->
            <div class="form-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!--Estimate Form-->
                    <div class="estimate-form">

                        <form action="//inquiry.digoodcms.com/api/<?= $user['username'] ?>" method="post">
                            <div class="row clearfix">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="contact[name]" placeholder="Full Name">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="email" placeholder="Email *" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="contact[phone]" placeholder="Phone">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="contact[whats_app]" placeholder="WhatsApp">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" placeholder="Message *" required></textarea>
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

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-two"><span class="arrow flaticon-right-arrow-4"></span> Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Info Column-->
            <div class="info-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="info-block">
                        <div class="inner-box">
                            <ul>
                                <?php
                                $pur_contactData = strip_tags(Lang($config['home_contact_text']));
                                $result_contactItem = explode(';', $pur_contactData);
                                ?>
                                <?php foreach($result_contactItem as $item): ?>
								<?php
								  $filterData_1 = explode(':', $item);
								  $filterData_2 = explode('|', $filterData_1[1]);
								  $result_name = $filterData_1[0];
								  $result_phone = $filterData_2[0];
								  $result_email = $filterData_2[1];
								?>
							  	<?php if($result_name && $result_phone && $result_email): ?>
                                    <li>
                                        <div class="row mp_0">
                                            <div class="col-sm-2 mp_0">
                                                <?=$result_name?>:
                                            </div>
                                            <div class="col-sm-5 mp_0">
                                                Tel/Whatsapp: <a href="tel:<?=$result_phone?>"><?=$result_phone?></a>
                                            </div>
                                            <div class="col-sm-5 mp_0">
                                                E-mail: <a href="mailto:<?=$result_email?>"><?=$result_email?></a>
                                            </div>
                                        </div>
                                    </li>
							  	<?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
