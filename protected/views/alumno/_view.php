<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->alu_rut), array('view', 'id'=>$data->alu_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->alu_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alu_carrera')); ?>:</b>
	<?php echo CHtml::encode($data->alu_carrera); ?>
	<br />


</div>