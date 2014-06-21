<?php
$baseUrl = Yii::app()->baseUrl;
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
                        <div class="bswr" style="width: 394px;height: 295px;float: left;text-align: center;margin-left: 70px;margin-bottom: 7px;background:black">
                            <iframe style="margin-top: 4px;" width="380" height="287" src="<?=$ppk->path?>" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    <?php endforeach;?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>