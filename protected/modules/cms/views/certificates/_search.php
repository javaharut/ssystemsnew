<?php
/* @var $this CertificatesController */
/* @var $model Certificates */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CER_ID'); ?>
		<?php echo $form->textField($model,'CER_ID',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CER_TITLE'); ?>
		<?php echo $form->textField($model,'CER_TITLE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CER_PHOTO'); ?>
		<?php echo $form->textField($model,'CER_PHOTO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CER_DATE'); ?>
		<?php echo $form->textField($model,'CER_DATE',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->