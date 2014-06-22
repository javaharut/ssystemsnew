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
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/about/'?>"><?=Yii::t('language','products')?></a>»
                <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/products/'.$product->id ?>"><?=$product->ctitle?></a>
            </li>
        </ul>
    </div>


    <div class="container">
        <div class="product_header"><?=$product->getctitle()?></div>
            <div class="img_wrap"><img class="product_img_main" src="<?=$baseUrl?>/images/product/<?=$product->id?>.png"/></div>
            <div class="product_title"><?=$product->cdesc?></div>
            <div class="clear"></div>
            <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/products/'.$product->id ?>"><div class="more"><?=Yii::t('language','more')?></div></a>

        <div class="clear"></div>
    </div>
</div>
