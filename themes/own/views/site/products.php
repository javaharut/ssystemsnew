<?php
/* @var $this SiteController */

$baseUrl = Yii::app()->baseUrl;

Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/product.css');

$this->renderPartial('_menu', false,false);
?>
<div class="wrapper col3">

    <div id="breadcrumb" style="text-align: left;">
        <ul>
            <li><a href="<?=$baseUrl?>">/<?=Yii::t('language','main')?></a></li><li>»</li>
            <li class="current"><a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/product/'?>"><?=Yii::t('language','products')?></a></li>    </ul>
    </div>


    <div class="container">
        <!----------------------------pricelist------------------->
       <div class="pricelist" style="height: 50px ; width: 100%">

           nkjdnfkjdnsgfkjdsnfvkjd


       </div>
        <?php foreach($products as $product):?>
        <div class="product">
            <div class="img_wrap"><img class="product_img" src="<?=$baseUrl?>/images/product/<?=$product->id?>.png"/></div>
            <div class="product_title"><?=$product->ctitle?></div>
            <div class="clear"></div>
            <a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/products/'.$product->id ?>"><div class="more"><?=Yii::t('language','more')?></div></a>
        </div>
        <?php endforeach;?>
    </div>

   <!-- <div align="center">
                    <div id="container">
                        <div id="content">
                            <div id="comments">

                                <ul class="commentlist">
                                    <?php /*foreach($products as $product):*/?>
                                    <li class="comment_even bswr">

                                        <img style="float: left; padding-right: 10px;bottom: 7px;position: relative;" src="http://www.ssystems.am/thumb/products/1386148926.png" height="80" width="80" alt="">
                                        <div class="author">
                                            <span class="name"><?/*=$product->ctitle*/?>
                                              <div><p>  </p></div>
                                              <p>
                                                  <a href="<?/*=$baseUrl.'/'.Yii::t('language','prefix').'/site/products/'.$product->id */?>"><?/*=Yii::t('language','more')*/?></a>
                                              </p>
                                            </span>
                                        </div>
                                    </li>
                                    <?php /* endforeach;*/?>
                                </ul>
                            </div>
                        </div>
                    </div>



    </div>-->

</div>
<div class="clear"></div>