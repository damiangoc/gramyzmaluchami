<?php
$this->breadcrumbs=array(
	'Recommendeds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Recommended', 'url'=>array('index')),
	array('label'=>'Create Recommended', 'url'=>array('create')),
	array('label'=>'Update Recommended', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recommended', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recommended', 'url'=>array('admin')),
);
?>

<h1>View Recommended #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gameId',
	),
)); ?>
