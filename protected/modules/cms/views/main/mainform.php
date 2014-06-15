<?php
/* @var $this MainController */
/* @var $model Main */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'main-mainform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword'); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_ru'); ?>
		<?php echo $form->textField($model,'keyword_ru'); ?>
		<?php echo $form->error($model,'keyword_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_en'); ?>
		<?php echo $form->textField($model,'keyword_en'); ?>
		<?php echo $form->error($model,'keyword_en'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc'); ?>
		<?php echo $form->textField($model,'meta_desc'); ?>
		<?php echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_ru'); ?>
		<?php echo $form->textField($model,'meta_desc_ru'); ?>
		<?php echo $form->error($model,'meta_desc_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_en'); ?>
		<?php echo $form->textField($model,'meta_desc_en'); ?>
		<?php echo $form->error($model,'meta_desc_en'); ?>
	</div>

    
	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textField($model,'desc'); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_ru'); ?>
		<?php echo $form->textField($model,'desc_ru'); ?>
		<?php echo $form->error($model,'desc_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_en'); ?>
		<?php echo $form->textField($model,'desc_en'); ?>
		<?php echo $form->error($model,'desc_en'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->