<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Omnicomm Armenia">
    <meta name="language" content="ru" />
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
    <script>
        var baseUrl = '<?=Yii::app()->request->baseUrl?>';
    </script>
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.validate.pack.js"></script>
    <!--<script type="text/javascript" src="<?/*=Yii::app()->request->baseUrl*/?>/js/jquery.contactable.min.js"></script>-->
    <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/jquery.contactable.js"></script>

    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl?>/css/contactable.css" type="text/css" />
    <!--   my important css files -->

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body id="top">

<a href="http://online.omnicomm.ru/logon" target="_blank" > <div class="test_icon" >  <span style="color: #ffffff">Monitoring</span>
    </div></a>


<!--start contactable -->
<div id="contactable"></div>

<script>$(function(){$('#contactable').contactable({subject: 'feedback URL:'+location.href});});</script>
<!--end contactable -->

<div id="content">
<div class="logo1">
    <div class='logo'>
        <a href="<?=Yii::app()->request->baseUrl?>"><img src="<?=Yii::app()->request->baseUrl?>/css/images/<?= Yii::t('language','logo')?>" class="logo" alt="" /></a>
    </div>


    <div class='contact_head'>
        <div class="contact_head_name">Solid Systems</div>
    </div>


    <div class="langs">
        <?php
        $links = Yii::app()->urlManager->getLanguageImageLinks(array(), true, array(),array("class"=>"lang"));
        foreach($links as $link)
            echo $link;
        ?>
    </div>


    <div class="icon"><a href="https://www.facebook.com/pages/Omnicomm-Armenia-Ssystems-LLC/185143808253373"target="_blank">
            <img src="<?=Yii::app()->baseUrl?>/css/images/fb.png" alt="facebook" class="fb_icon" width="25px" height="25px"> </a>
        <a href="http://omnicomm.ru/" target="_blank">
            <img src="<?=Yii::app()->baseUrl?>/css/images/omn.png" alt="omnicomm" class="om_icon" width="25px" height="25px" style="margin-left: 4px"> </a>

    </div>


    <div class="contact_head_text">
        <?= Yii::t('language','header')?>
    </div>


    <div class="clear" ></div>

</div>
<?php echo $content; ?>
</div>
    <div class="wrapper col7" style="background: rgb(53,106,160); /* Old browsers */
background: -moz-linear-gradient(-45deg,  rgba(53,106,160,1) 0%, rgba(53,106,160,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(53,106,160,1)), color-stop(100%,rgba(53,106,160,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* IE10+ */
background: linear-gradient(135deg,  rgba(53,106,160,1) 0%,rgba(53,106,160,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#356aa0', endColorstr='#356aa0',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
 background-repeat: repeat-x;">
        <div id="copyright" align="center">
            <p class="fl_left"><?= Yii::t('language','footer')?></p>
            <br class="clear">
        </div>
    </div>
<!--</div> --> <!-- page -->
</body>
</html>
