<?php
/* @var $this SiteController */
?>

<div class="wrapper col2">
    <div id="topbar1">
        <div id="topnav">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items'=>array(
                    // Important: you need to specify url as 'controller/action',
                    // not just as 'controller' even if default acion is used.
                    array('label'=>'Home', 'url'=>array('site/index')),
                    // 'Products' menu item will be selected no matter which tag parameter value is since it's not specified.
                    array('label'=>'Products', 'url'=>array('product/index'), 'items'=>array(
                        array('label'=>'New Arrivals', 'url'=>array('product/new', 'tag'=>'new')),
                        array('label'=>'Most Popular', 'url'=>array('product/index', 'tag'=>'popular')),
                    )),
                    array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                ),
            ));
            ?>
            <!--<ul>
                <li class="active"><a href="http://www.ssystems.am/home">Главное
                    </a></li>
                <li><a href="http://www.ssystems.am/products">Продукты
                    </a></li>
                <li><a href="http://www.ssystems.am/clients">Партнеры
                    </a></li>
                <li><a href="http://www.ssystems.am/certificates">Сертификаты
                    </a></li>
                <li><a href="http://www.ssystems.am/news">О НАС
                    </a></li>
                <li><a href="http://www.ssystems.am/gallery">Галерея
                    </a></li>
                <li><a href="http://www.ssystems.am/contacts">Контакты
                    </a></li>
            </ul>-->
        </div>
        <br class="clear">
    </div>
</div>