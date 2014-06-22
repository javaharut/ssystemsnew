
<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style2.css');
$this->renderPartial('_menu', false,false);
?>
<div class="wrapper col3">

    <div id="breadcrumb" style="text-align: left;">
        <ul>
            <li><a href="<?=$baseUrl?>"><?=Yii::t('language','main')?></a></li><li>»</li><li class="current"><a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/about/'?>"><?=Yii::t('language','products')?></a></li>    </ul>
    </div>

    <div align="center">


        <table border="0" style="width: 993px; min-width: 800px; border: 0;" cellspacing="5px">
            <tbody>
                <tr>

                <td valign="top">
                    <div id="container">
                        <div id="content" style="width:997px">
                            <div id="comments">

                                <ul class="commentlist">
                                    <?php foreach($products as $product):?>
                                    <li class="comment_even bswr">

                                        <img style="float: left; padding-right: 10px;bottom: 7px;position: relative;" src="http://www.ssystems.am/thumb/products/1386148926.png" height="80" width="80" alt="">
                                        <div class="author">
                                            <span class="name"><?=$product->ctitle?>
                                              <div><p>  </p></div>
                                              <p>
                                                  <a style="margin-left: 230px;margin-top: 16px;position: absolute;z-index: 1;" class="bgfon" href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/products/'.$product->id ?>"><?=Yii::t('language','more')?></a>
                                              </p>
                                            </span>
                                        </div>
                                    </li>
                                    <?php  endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </td>

             </tr>
            </tbody></table>


    </div>

</div>