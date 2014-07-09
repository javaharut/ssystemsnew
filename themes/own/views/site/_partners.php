<?php
/* @var $this SiteController */
/* @var $product Product */

$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/product.css');



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
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/about/'?>"><?=Yii::t('language','partners')?></a>»
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/partner/'.$partner->id ?>"><?=$partner->ctitle?></a>
            </li>
        </ul>
    </div>


    <div class="container">
        <div class="product_header"><?=$partner->ctitle?></div>
        <div class="img_wrap"><img class="product_img_main" src="<?=$baseUrl?>/images/partner/<?=$partner->id?>.png"/></div>
        <div class="product_title"><?=$partner->cdesc?></div>
        <div class="clear"></div>
        <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/partner/'.$partner->id ?>"><div class="more"><?=Yii::t('language','back')?></div></a>

        <div class="clear"></div>
    </div>
</div>
