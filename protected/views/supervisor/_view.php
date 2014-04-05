<?php
/* @var $this SupervisorController */
/* @var $data Supervisor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut), array('view', 'id'=>$data->rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fono')); ?>:</b>
	<?php echo CHtml::encode($data->fono); ?>
	<br />


</div>