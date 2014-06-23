<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
//$cs->registerCssFile($baseUrl.'/css/style3.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/contacts.css');
$this->renderPartial('_menu', false);
?>
<div class="col3">
<div class="container">
    <ul style="list-style: none;">
        <li >
            <img style="float: left; padding-right: 28px;" src="<?=$baseUrl?>/images/logo_.png" height="80" width="80" alt="">
        </li>
    </ul>
    <ul style="list-style: none;">
        <li>
           <?=Yii::t('language','address')?>: <span class="name" ><?=Yii::t('language','add')?></span>
        </li>
            <?=Yii::t('language','tel')?>: <span class="name"  >(+374) 60 50 07 06</span>
        </li>
        <li>
            <?=Yii::t('language','mob')?>: <span class="name" >(+374) 77 44 77 11; (+374) 95 10 03 01</span>
        </li>
        <li>
            E-mail: <span class="name" >info@ssystems.am</span>
        </li>
    </ul>
</div>
    <?php
    Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style4.css');
    Yii::app()->clientScript->registerScriptFile("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places");

    ?>


    <div class="map_round">
        <div class="map">
            <div id="map_canvas" style="width: 100%; height: 100%">
            </div>
        </div>
    </div>

    <script>

        var latlng = new google.maps.LatLng(40.177824, 44.512533);
        var options = {
            zoom: 13,
            center: latlng,
            labelClass: "labels",
            streetViewControl: false,
            scaleControl: false,
            navigationControl: false,
            disableDefaultUI: true
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"), options);

        var infowindow = new google.maps.InfoWindow();

<!--        --><?php //foreach($objects as $obj) : ?>
<!---->
<!---->
<!---->
<!--        --><?php //if($obj->type == 2)
//                  echo "var icon = 'ico_drug.png';";
//              else
//                  echo "var icon = 'ico_super.png';";
//        ?>
<!---->
<!---->
<!---->
<!--        addMarker(--><?//=$obj->latitude?><!--, --><?//=$obj->longitude?><!--, "--><?//=$obj->description?><!--", icon );-->
<!---->
<!--        --><?php //endforeach  ?>

        function addMarker(lat, lng, desc, ico) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat, lng),
                map: map,
                title: 'saninail',
                icon: '<?=Yii::app()->baseUrl?>/css/images/'+ ico
            });

            google.maps.event.addListener(marker, 'mouseover', function () {
                infowindow.setContent('<div class="noscrollbar">' + desc + '</div>');
                infowindow.open(map, this);
            });

            google.maps.event.addListener(marker, 'mouseout', function () {
                infowindow.close();
            });

        }

    </script>

</div>