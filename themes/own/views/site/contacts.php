<?php
Yii::app()->clientScript->registerScriptFile("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places");
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/contacts.css');
$this->renderPartial('_menu', false);
?>
<div class="col3">
    <div class="container">
        <ul style="list-style: none;">
            <li>
                <img style="float: left; padding-right: 28px;" src="<?= Yii::app()->baseUrl ?>/css/images/logo_about.png" height="80"
                     width="80" alt="">
            </li>
        </ul>
        <ul style="list-style: none;">
            <li>
                <?= Yii::t('language', 'address') ?>: <span class="name"><?= Yii::t('language', 'add') ?></span>
            </li>
            <?= Yii::t('language', 'tel') ?>: <span class="name">(+374) 60 50 07 06</span>
            </li>
            <li>
                <?= Yii::t('language', 'mob') ?>: <span class="name">(+374) 77 44 77 11; (+374) 95 10 03 01</span>
            </li>
            <li>
                E-mail: <span class="name">info@ssystems.am</span>
            </li>
        </ul>

        <div class="map">
            <div id="map_canvas" style="width: 100%; height: 100%">
            </div>
        </div>

    </div>

    <script>

        var latlng = new google.maps.LatLng(40.196118,44.498247);
        var options = {
            zoom: 15,
            center: latlng,
            labelClass: "labels",
            streetViewControl: false,
            scaleControl: false,
            navigationControl: false,
            disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), options);

        var infowindow = new google.maps.InfoWindow();

        var marker = new google.maps.Marker({
            position: latlng,
            animation:google.maps.Animation.BOUNCE,
            map: map,
            title: 'ssystems',
            icon: '<?=Yii::app()->baseUrl?>/css/images/pin.png'
        });
   </script>

</div>