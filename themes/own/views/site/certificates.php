<?php

$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/lightbox.css');
//Yii::app()->clientScript->registerCssFile('http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700');
$this->renderPartial('_menu', false,false);
?>
<div class="wrapper col3">

    <div id="breadcrumb" style="text-align: left;">
        <ul>
            <li>
                <a href="<?=$baseUrl?>"><?=Yii::t('language','main')?></a>
            </li>
            <li>»</li>
            <li class="current">
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/certificates/'?>"><?=Yii::t('language','certificates')?></a>
            </li>
        </ul>
    </div>
    <div align="center">
        <table border="0" style="width: 993px;min-width: 800px; border: 0;" cellspacing="5px">
            <tbody>
                <tr>
                <td valign="top">
                    <div id="container">
                        <div id="content">
                            <div id="comments">

<!--                                <div class="bswr bgfon" style="margin-bottom:11px;">Сертификаты</div>-->
                                <?php foreach($certificates as $certificate):?>
                                <div style="width: 130px; height: 180px; overflow: hidden; padding: 10px; margin: 5px; float: left; ">
                                    <a href="<?=$baseUrl?>/images/up/certificates/<?=$certificate->CER_PHOTO?>" rel="lightbox[plants]">
                                        <img width="130" src="<?=$baseUrl?>/images/up/certificates/<?=$certificate->CER_PHOTO?>" alt="<?=$certificate->CER_TITLE?>" title="<?=$certificate->CER_TITLE?>">
                                    </a>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
    </div>
    <?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery-1.11.0.min.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/lightbox.js');
    ?>
</div>