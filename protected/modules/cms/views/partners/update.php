<?php
/* @var $this PartnersController */
/* @var $model Partners */

$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Partners', 'url'=>array('index')),
	array('label'=>'Create Partners', 'url'=>array('create')),
	array('label'=>'View Partners', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Partners', 'url'=>array('admin')),
);
?>

<h1>Update Partners <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>