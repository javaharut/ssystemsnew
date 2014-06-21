<?php
/* @var $this CertificatesController */
/* @var $data Certificates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CER_ID), array('view', 'id'=>$data->CER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CER_TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->CER_TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CER_PHOTO')); ?>:</b>
	<?php echo CHtml::encode($data->CER_PHOTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CER_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CER_DATE); ?>
	<br />


</div>