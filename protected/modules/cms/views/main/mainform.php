<?php
/* @var $this MainController */
/* @var $model Main */
/* @var $form CActiveForm */
?>

<div class="form">
        <?php echo Yii::app()->user->getFlash("success")?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'main-mainform-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>80,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_ru'); ?>
		<?php echo $form->textField($model,'keyword_ru',array('size'=>80,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keyword_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_en'); ?>
		<?php echo $form->textField($model,'keyword_en',array('size'=>80,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'keyword_en'); ?>
	</div>

    <hr />

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc'); ?>
		<?php echo $form->textArea($model,'meta_desc',array('rows'=>6, 'cols'=>78)); ?>
		<?php echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_ru'); ?>
		<?php echo $form->textArea($model,'meta_desc_ru',array('rows'=>6, 'cols'=>78)); ?>
		<?php echo $form->error($model,'meta_desc_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_en'); ?>
		<?php echo $form->textArea($model,'meta_desc_en',array('rows'=>6, 'cols'=>78)); ?>
		<?php echo $form->error($model,'meta_desc_en'); ?>
	</div>

    <hr />
    <div class="row">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'title_ru'); ?>
        <?php echo $form->textField($model,'title_ru',array('size'=>80,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'title_ru'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'title_en'); ?>
        <?php echo $form->textField($model,'title_en',array('size'=>80,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'title_en'); ?>
    </div>

    <hr />

    <?php
    $this->widget('CTabView',array(
        'activeTab'=>'tab1',
        'tabs'=>array(

            'dtab1'=>array('title'=>'Description AM',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>''),true
                    )),

            'dtab2'=>array('title'=>'Description RU',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_ru'),true
                    )),
            'dtab3'=>array('title'=>'Description EN',
                'content'=>$this->renderPartial(
                        '_form_desc',
                        array('form'=>$form, 'model'=>$model, 'attr'=>'_en'),true
                    )),
        ),
        'htmlOptions'=>array(
        )
    ));
    ?>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

    <?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>

    <script type="text/javascript">

        tinymce.init({
            selector: "textarea.desc",
            theme: "modern",
            width: 700,
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
            content_css: "css/content.css",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    </script>


    <?php $this->endWidget(); ?>

</div><!-- form -->