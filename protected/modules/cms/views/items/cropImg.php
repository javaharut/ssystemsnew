<?php
/* @var $this ItemsController */


?>


<?php
$this->widget('ext.jcrop.EJcrop', array(
    //
    // Image URL
    'url' => $imageUrl,
    // ALT text for the image
    'alt' => 'Crop This Image',
    //
    // options for the IMG element
    'htmlOptions' => array('id' => 'imageId'),
    //
    // Jcrop options (see Jcrop documentation)
    'options' => array(
        'minSize' => array(50, 50),
        'aspectRatio' => 1,
        'onRelease' => "js:function() {ejcrop_cancelCrop(this);}",
    ),
    // if this array is empty, buttons will not be added
    'buttons' => array(
        'start' => array(
            'label' => Yii::t('promoter', 'Adjust thumbnail cropping'),
            'htmlOptions' => array(
                'class' => 'myClass',
                'style' => 'color:red;' // make sure style ends with « ; »
            )
        ),
        'crop' => array(
            'label' => Yii::t('promoter', 'Apply cropping'),
        ),
        'cancel' => array(
            'label' => Yii::t('promoter', 'Cancel cropping')
        )
    ),
    // URL to send request to (unused if no buttons)
    'ajaxUrl' => $this->createUrl("ajaxcrop"),
    //
    // Additional parameters to send to the AJAX call (unused if no buttons)
    'ajaxParams' => array('someParam' => 'someValue'),
));


?>