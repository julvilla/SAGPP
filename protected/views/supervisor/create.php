<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Supervisor', 'url'=>array('index')),
	array('label'=>'Manage Supervisor', 'url'=>array('admin')),
);
?>

<h1>Create Supervisor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>