<?php

$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style2.css');
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

        <table id="min-content" cellpadding="0" cellspacing="0" border="0" style="width: 993px;">
            <tbody>
            <tr>
                <td class="album">
                    <a class="modal" id="29" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/albom/'?>">
                        <div width="200px" height="200px">
                            <img src="<?=$baseUrl?>/images/wide-wallpaper-1920x1080-069.jpg" width="190px" height="154px" style="margin-left: -16px; margin-top: 49px">
                        </div>
                        <div width="200px" height="20px" class="album_title"><center>Images</center></div>
                    </a>
                </td>
                <td class="album">
                    <a class="modal" id="28" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/video/'?>">
                        <div width="200px" height="200px">
                            <img src="<?=$baseUrl?>/images/video-player-icon.jpg" width="190px" height="154px" style="margin-left: -16px; margin-top: 49px">
                        </div>
                        <div width="200px" height="20px" class="album_title"><center>Videos</center></div></a>
                </td>
                <td class="album">
                    <a class="modal" id="27" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/ppk/'?>">
                        <div width="200px" height="200px">
                            <img src="<?=$baseUrl?>/images/11.png" width="190px" height="154px" style="margin-left: 35px; margin-top: 49px">
                        </div>
                        <div width="200px" height="20px" class="album_title"><center>Video advertisement</center></div>
                    </a>
                </td>
            </tr></tbody></table>
    </div><br>
</div>