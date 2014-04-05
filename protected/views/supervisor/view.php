<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->rut,
);

$this->menu=array(
	array('label'=>'List Supervisor', 'url'=>array('index')),
	array('label'=>'Create Supervisor', 'url'=>array('create')),
	array('label'=>'Update Supervisor', 'url'=>array('update', 'id'=>$model->rut)),
	array('label'=>'Delete Supervisor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supervisor', 'url'=>array('admin')),
);
?>

<h1>View Supervisor #<?php echo $model->rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut',
		'nombre',
		'cargo',
		'fono',
	),
)); ?>
