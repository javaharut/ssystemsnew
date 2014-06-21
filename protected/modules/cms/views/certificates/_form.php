<?php
/* @var $this CertificatesController */
/* @var $model Certificates */
/* @var $form CActiveForm */
?>

<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'CER_TITLE'); ?>
        <?php echo $form->hiddenField($model,'CER_TITLE',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'CER_TITLE'); ?>
    </div>



    <hr />
    <?php if(!$model->isNewRecord): ?>
        <?php echo CHtml::image(Yii::app()->baseUrl."/images/certificates/".$model->CER_PHOTO,
            null,array("width"=>400)); ?>
    <?php endif ?>
    <br>


        <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
            array(
                'id'=>'uploadFile',
                'config'=>array(
                    'action'=>Yii::app()->createUrl('/cms/banner/upload'),
                    'allowedExtensions'=>array("jpg", "jpeg", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                    'sizeLimit'=>5*1024*1024,// maximum file size in bytes
                    'minSizeLimit'=>0*1024*1024,// minimum file size in bytes
                    'onComplete'=>"js:function(id, fileName, responseJSON){ }",
                    'messages'=>array(
                        'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                        'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                        'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                        'emptyError'=>"{file} is empty, please select files again without it.",
                        'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                    ),
                    'showMessage'=>"js:function(message){ //console.log(message);
                }"
                )
            )); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->