<?php
$this->breadcrumbs=array(
	'Agelevels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Agelevel', 'url'=>array('index')),
	array('label'=>'Create Agelevel', 'url'=>array('create')),
	array('label'=>'Update Agelevel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Agelevel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Agelevel', 'url'=>array('admin')),
);
?>

<h1>View Agelevel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menuTitle',
	),
)); ?>
