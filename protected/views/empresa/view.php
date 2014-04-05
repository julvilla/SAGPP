<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->emp_codigo,
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->emp_codigo)),
	array('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->emp_codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>View Empresa #<?php echo $model->emp_codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'emp_codigo',
		'rut',
		'emp_nombre',
		'emp_rubro',
		'emp_direccion',
		'emp_fono',
	),
)); ?>
