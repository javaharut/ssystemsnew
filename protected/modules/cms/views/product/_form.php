<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_ru'); ?>
		<?php echo $form->textField($model,'keyword_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keyword_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword_en'); ?>
		<?php echo $form->textField($model,'keyword_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keyword_en'); ?>
	</div>

    <hr />

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc'); ?>
		<?php echo $form->textField($model,'meta_desc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'meta_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_ru'); ?>
		<?php echo $form->textField($model,'meta_desc_ru',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'meta_desc_ru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meta_desc_en'); ?>
		<?php echo $form->textField($model,'meta_desc_en',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'meta_desc_en'); ?>
	</div>

    <hr />

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

	<hr />

    <?php if(!$model->isNewRecord): ?>
        <?php echo CHtml::image(Yii::app()->baseUrl."/images/product/".$model->id.".png",
            null,array("width"=>300)); ?>
    <?php endif ?>
    <br>

    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
        array(
            'id'=>'uploadFile',
            'config'=>array(
                'action'=>Yii::app()->createUrl('/cms/product/upload'),
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

    <?php $this->widget('application.extensions.tinymce.SladekTinyMce'); ?>

    <script type="text/javascript">

        tinymce.init({
            selector: "textarea",
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