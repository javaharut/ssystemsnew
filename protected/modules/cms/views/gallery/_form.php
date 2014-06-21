<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gallery-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'type'); ?>
        <?php echo $form->dropDownList($model,'type',
            array('1'=>'image','2'=>'video', '3'=>'ppt','4'=>'album'), array()); ?>
        <?php echo $form->error($model,'type'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_ru'); ?>
		<?php echo $form->textField($model,'title_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_en'); ?>
		<?php echo $form->textField($model,'title_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_en'); ?>
	</div>

    <hr />

    <p>Use path when inserting video!!!</p>
	<div class="row">
        <?php echo $form->labelEx($model,'path'); ?>
        <?php echo $form->textField($model,'path',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'path'); ?>
    </div>

    Or

    <div class="row">
        <?php echo $form->labelEx($model,'image'); ?>
        <?php echo $form->fileField($model,'image', array()); ?>
        <?php echo $form->error($model,'image'); ?>
    </div>

    <?php

    ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->dropDownList($model,'parent_id', $parent); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->