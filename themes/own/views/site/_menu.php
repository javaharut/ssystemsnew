<?php
/* @var $this SiteController */
?>

<div class="wrapper col2">
    <div id="topbar1">
        <div id="topnav">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items'=>array(
                    array('label'=>Yii::t('language','main'), 'url'=>array('site/index')),
                    array('label'=>Yii::t('language','about'), 'url'=>array('site/about')),
                    array('label'=>Yii::t('language','products'), 'url'=>array('site/product')),
                    array('label'=>Yii::t('language','partners'), 'url'=>array('site/partner')),
                    array('label'=>Yii::t('language','certificates'), 'url'=>array('site/certificates')),
                    array('label'=>Yii::t('language','gallery'), 'url'=>array('site/gallery')),
                    array('label'=>Yii::t('language','contacts'), 'url'=>array('site/contacts')),
                ),
            ));
            ?>
        </div>
        <br class="clear">
    </div>
</div>