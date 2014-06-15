<?php
/* @var $this BannerController */
/* @var $model Banner */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Create Banner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#banner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Banners</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'type' => 'raw',
            'value' => 'CHtml::image(Yii::app()->baseUrl . "/images/banner/" . $data->id.".png","",
                        array("width"=>"60px"))'

        ),
        array(
            'name'=>'url',
            'value'=>'$data->url',
            'htmlOptions'=>array('style'=>'max-width:50px;word-break:break-all;'),
        ),
        array(
            'name'=>'url_ru',
            'value'=>'$data->url_ru',
            'htmlOptions'=>array('style'=>'max-width:50px;word-break:break-all;'),
        ),
        array(
            'name'=>'url_en',
            'value'=>'$data->url_en',
            'htmlOptions'=>array('style'=>'max-width:50px;word-break:break-all;'),
        ),
        'desc',
        'desc_ru',
		'desc_en',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
