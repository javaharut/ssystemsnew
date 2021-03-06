<?php

$baseUrl = Yii::app()->baseUrl;
$this->renderPartial('_menu', false,false);
?>
<div class="wrapper col3">

    <div id="breadcrumb" style="text-align: left;">
        <ul>
            <li>
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/main/'?>"><?= Yii::t('language','main')?></a>
            </li>
            <li>»</li>
            <li class="current">
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/gallery/'?>"><?= Yii::t('language','gallery')?></a>
            </li>
        </ul>
    </div>
    <!--<script src="http://www.ssystems.am/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://www.ssystems.am/js/galleria.js" type="text/javascript" charset="utf-8"></script>-->

    <div class="bswr">

        <table id="min-content" cellpadding="0" cellspacing="0" border="0" style="width: 100%;">
            <tbody>
            <tr>
                <td class="album">
                    <a class="modal" id="29" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/albom/'?>">
                        <div width="200px" height="200px">   <div class="style_gallery"><?= Yii::t('language', 'img') ?></div>
                            <img src="<?=$baseUrl?>/images/images.png" class="images" width="205px" height="150px" style="margin-left: -15px; margin-top: 25px; margin-bottom: 60px;  ">
                        </div>

                    </a>
                </td>
                <td class="album">
                    <a class="modal" id="28" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/video/'?>">
                        <div width="200px" height="200px">   <div class="style_gallery"><?= Yii::t('language', 'vid') ?></div>
                            <img src="<?=$baseUrl?>/images/video.png" class="vid" width="205px" height="150px" style="margin-left: -25px; margin-top: 25px; margin-bottom: 60px;  ">

                        </div>
                        </a>
                </td>
                <td class="album">
                    <a class="modal" id="27" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/ppk/'?>">
                        <div width="200px" height="200px">  <div class="style_gallery"><?= Yii::t('language', 'pres') ?></div>
                            <img src="<?=$baseUrl?>/images/pres.png" class="pres" width="205px" height="150px" style="margin-left: -25px; margin-top: 25px; margin-bottom: 60px;">
                        </div>
                                            </a>
                </td>

                <td class="album">
                    <a class="modal" id="29" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/catalog/'?>">
                        <div width="200px" height="200px">   <div class="style_gallery"><?= Yii::t('language', 'catalog') ?></div>
                            <img src="<?=$baseUrl?>/images/catalog.png" class="images" width="205px" height="150px" style=" margin-left:-25px ; margin-top: 25px; margin-bottom: 60px;   ">
                        </div>

                    </a>
                </td>
            </tr></tbody></table>
    </div><br>
</div>