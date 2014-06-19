<?php

$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/style2.css');
 $this->renderPartial('_menu', false,false);
?>

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