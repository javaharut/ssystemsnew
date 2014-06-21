<?php
/* @var $this CertificatesController */
/* @var $model Certificates */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->CER_ID,
);

$this->menu=array(
	array('label'=>'List Certificates', 'url'=>array('index')),
	array('label'=>'Create Certificates', 'url'=>array('create')),
	array('label'=>'Update Certificates', 'url'=>array('update', 'id'=>$model->CER_ID)),
	array('label'=>'Delete Certificates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CER_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificates', 'url'=>array('admin')),
);
?>

<h1>View Certificates #<?php echo $model->CER_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CER_ID',
		'CER_TITLE',
		'CER_PHOTO',
		'CER_DATE',
	),
)); ?>
