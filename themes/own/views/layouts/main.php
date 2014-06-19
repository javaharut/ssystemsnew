<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Omnicomm Armenia, Solid Systems">
    <meta name="keywords" content="Omnicomm,Armenia,Solid,Systems">
    <meta name="author" content="Omnicomm Armenia">
    <meta name="language" content="en" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/images/favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery-1.11.1.js"></script>

    <script type="text/javascript">
        var lang = "<?=Yii::app()->language?>";
    </script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/script.js"></script>

    <!-- from omn -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl?>/css/layout.css" type="text/css" />
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl?>/css/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery1.js"></script>

    <script type="text/javascript">var _siteRoot='index.php',_root='index.php';</script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/scripts.js"></script>

    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.validate.pack.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.contactable.min.js"></script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.contactable.js"></script>

    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl?>/css/contactable.css" type="text/css" />
    <!--   my important css files -->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="top">

        

<!--start contactable -->
<div id="contactable"></div>


<script>$(function(){$('#contactable').contactable({subject: 'feedback URL:'+location.href});});</script>
<!--end contactable -->

<div id="content">
<div class="logo1">
    <div class='logo'>
        <a href="<?=Yii::app()->request->baseUrl?>"><img src="<?=Yii::app()->request->baseUrl?>/css/images/<?= Yii::t('language','logo')?>" class="logo" alt="" /></a>
    </div>

    <div class="langs">
        <?php
        $links = Yii::app()->urlManager->getLanguageImageLinks(array(), true, array(),array("class"=>"lang"));
        foreach($links as $link)
            echo $link;
        ?>
    </div>

    <div class='contact_head'>
        <span class="name" style="margin: 0px 150px 10px 0px;font-size: 30px;font-weight: bold;">Solid Systems</span><br />
        <div class="author_head" style="font-size: 13px">Адрес: <span class="name"> Армения,0048, г.Ереван, Бекназарян 5/7</span></div><br />
        <div class="author_head" style="font-size: 13px">Телефон: <span class="name">+374(77)-44-77-11; +374(95)-10-03-01; +374(60)-50-07-06</span></div>
        <div class="author_head" style="font-size:13px;margin-left:85px;">E-mail: <span class="name">info@ssystems.am</span></div>
    </div>


    <div class="clear"></div>

</div>

<?php echo $content; ?>
</div>
    <div class="wrapper col7" style="background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#A3D4F5), to(#1A3450));
        background-image: -webkit-linear-gradient(top, #A3D4F5, #1A3450);
        background-image: -moz-linear-gradient(top, #A3D4F5, #1A3450);
        background-image: -ms-linear-gradient(top, #A3D4F5, #1A3450);
        background-image: -o-linear-gradient(top, #A3D4F5, #1A3450);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#A3D4F5', endColorstr='#1A3450'); background-repeat: repeat-x;">
        <div id="copyright" align="center">
            <p class="fl_left">© 2012 «Ssystems — контроль расхода топлива». Все права защищены.</p>
            <br class="clear">
        </div>
    </div>
<!--</div> --> <!-- page -->
</body>
</html>
