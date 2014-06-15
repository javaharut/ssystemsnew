<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="form">
    <?=Yii::app()->user->getFlash('error')?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banner-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'desc'); ?>
        <?php echo $form->textField($model,'desc',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'desc'); ?>
    </div>

    <hr />

    <div class="row">
		<?php echo $form->labelEx($model,'url_ru'); ?>
		<?php echo $form->textField($model,'url_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_ru'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'desc_ru'); ?>
        <?php echo $form->textField($model,'desc_ru',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'desc_ru'); ?>
    </div>
    <hr/>

	<div class="row">
		<?php echo $form->labelEx($model,'url_en'); ?>
		<?php echo $form->textField($model,'url_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url_en'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'desc_en'); ?>
        <?php echo $form->textField($model,'desc_en',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'desc_en'); ?>
    </div>
    <hr />

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