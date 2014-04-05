<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->rut=>array('view','id'=>$model->rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supervisor', 'url'=>array('index')),
	array('label'=>'Create Supervisor', 'url'=>array('create')),
	array('label'=>'View Supervisor', 'url'=>array('view', 'id'=>$model->rut)),
	array('label'=>'Manage Supervisor', 'url'=>array('admin')),
);
?>

<h1>Update Supervisor <?php echo $model->rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>