<?php
/* @var $this SupervisorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supervisors',
);

$this->menu=array(
	array('label'=>'Create Supervisor', 'url'=>array('create')),
	array('label'=>'Manage Supervisor', 'url'=>array('admin')),
);
?>

<h1>Supervisors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
