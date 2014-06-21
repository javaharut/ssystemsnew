<?php
/* @var $this CertificatesController */
/* @var $model Certificates */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->CER_ID=>array('view','id'=>$model->CER_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Certificates', 'url'=>array('index')),
	array('label'=>'Create Certificates', 'url'=>array('create')),
	array('label'=>'View Certificates', 'url'=>array('view', 'id'=>$model->CER_ID)),
	array('label'=>'Manage Certificates', 'url'=>array('admin')),
);
?>

<h1>Update Certificates <?php echo $model->CER_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>