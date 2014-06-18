<?php
/**
 * Created by PhpStorm.
 * User: mushegh.Yeghiazaryan
 * Date: 5/5/14
 * Time: 2:53 PM
 */
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style2.css');

?>
<!---->
<!---->
<!---->
<!--<div class="about_us_text">-->
<!--    This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu adlitora torquent per conubia nostra, perinceptos himenaeos.Mauris in eratjusto. Nullam ac urna eu felis dapibus zcondimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. um feugiat,  velit mauris egestas quam, neque.-->
<!--</div>-->
<!--<div class="pink_text">-->
<!--    <div style="color:#f26d86;margin-bottom:5px;">Nail enamel remover</div>-->
<!--    <div style="color:#4f4f4f;">With grapes seed oil</div>-->
<!--</div>-->
<?php $this->renderPartial('_menu', false,false); ?>

<div align="center">
    <div class="wrapper col3">

        <div id="breadcrumb" style="text-align: left;">
            <ul>
                <li class="current"><a href="<?=$baseUrl.'/'.Yii::t('language','prefix').'/site/about/'?>"><?= Yii::t('language','about')?></a></li>    </ul>
        </div>


        <div>


            <table border="0" cellspacing="5px">
                <tbody><tr>
                    <td valign="top">
                    </td>
                    <td valign="top">
                        <div id="intro"><div class="fl_left">
                                <div class="mail-content">
                                    <p>
                                    </p><p style="text-align: center;">&nbsp;</p>
                                    <h1 style="text-align: center;"><span style="color: #003366;">&nbsp;<strong><?=$main_by_id->ctitle?></strong></span></h1>
                                    <p style="float:right;margin-bottom: 50px "><?=$main_by_id->cmetadesc?></p><br/>
                                    <p> <?=$main_by_id->cdesc?></p>
                                </div>
                            </div></div>
                    </td>

                </tr>

                </tbody></table>


        </div></div>
</div>