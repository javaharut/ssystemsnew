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
                <?php foreach($albom as $val):?>
                <td class="album">
                    <a class="modal" id="29" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/image/'.$val->id?>">
                        <div width="200px" height="200px">
                            <img src="<?=$baseUrl?>/images/albom/<?=$val->path?>" width="190px" height="154px" style="margin-left: -16px; margin-top: 49px">
                        </div>
                        <div width="200px" height="20px" class="album_title"><center><?=$val->ctitle?></center></div>
                    </a>
                </td>
                <?php endforeach;?>
            </tr></tbody></table>
    </div><br>
</div>