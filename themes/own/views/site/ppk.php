<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/lightbox.css');
$this->renderPartial('_menu', false, false);
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
    <div align="center">
        <table border="0" style="width: 993px;min-width: 800px; border: 0;" cellspacing="5px">
            <tbody>
            <tr>
                <td valign="top">
                    <?php foreach($ppks as $ppk):?>
                    <div class="hovergallery" style="width: 210px; height: 300px; overflow: hidden; padding: 10px; margin: 5px; float: left;">
                        <a href="<?=$baseUrl?>/images/files/<?=$ppk->path?>" rel="lightbox[plants]">
                            <img width="210" src="<?=$baseUrl?>/images/files/<?=$ppk->path?>" alt="<?=$ppk->ctitle?>" title="<?=$ppk->ctitle?>">
                        </a>
                    </div>

                        </div>
                    <?php endforeach;?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>