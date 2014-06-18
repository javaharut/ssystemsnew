

<?php
/* @var $this SiteController */
/* @var $item Items */
$i = 0;
//
//foreach ($items as $item) :
//    $img = "default";
//    if($item->image == 1)
//        $img = $item->id;
//
//    $features = Features::model()->findAll("item_id=:pr_id", array(':pr_id'=>$item->id));
//    //$features =  $item->subproduct;
//
//    ?>
<!---->
<!--        <div class="subitem">-->
<!--            <a href="--><?//=Yii::app()->baseUrl."/".Yii::app()->language."/site/subitem/".  $item->id?><!--" >-->
<!--                <div class="subitem_image"><img src="--><?//=Yii::app()->baseUrl?><!--/images/items/--><?//=$img?><!--.png" width="206" height="206" /></div>-->
<!--            </a>-->
<!--            <div class="subitem_round"></div>-->
<!--            <div class="subitem_content">-->
<!--                <div class="subitem_content_header">--><?//=$item->name?><!--</div>-->
<!--                <div class="subitem_content_text">-->
<!--                    --><?php
//                    $item_img = "13.png";
//                    if($i%3 == 0)
//                        $item_img = "14.png";
//                    elseif($i%3 == 1)
//                        $item_img = "15.png";
//
//                    foreach ($features as $feature): ?>
<!--                        <div><img src="--><?//=Yii::app()->baseUrl?><!--/css/images/--><?//=$item_img?><!--" width="8" height="10" />--><?//=$feature->name?><!--</div>-->
<!--                   --><?php //endforeach ?>
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!-- --><?php //$i++; endforeach ?>
<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style2.css');
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


    <div>
        <table border="0" style="width: 800px;min-width: 800px; border: 0;" cellspacing="5px">
            <tbody><tr>
                <td valign="top" width="400">
                </td>
                <td valign="top">
                    <div id="intro"><div class="fl_left">
                            <h4><?=$product->ctitle?></h4>
                            <div style="padding: 25px;">
                                <img style="float: left; padding-right: 10px;max-width: 300px;" src="http://www.ssystems.am/thumb/products/1386148926.png" alt="">
                                <p></p><p>&nbsp;</p>
                                <p class="MsoNormal" style="margin-left: -31.5pt; text-align: center;" align="center"><span style="font-size: large; color: #000023; font-family: verdana, geneva;"><strong><?=$product->ctitle?></strong></span></p>
                                <p><?=$product->cdesc?></p>
                                <div>
                                </div></div>
                        </div></div></td>

            </tr>
            </tbody></table>

    </div>
</div>
