<?php
$this->breadcrumbs=array(
	'Top5games'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Top5game', 'url'=>array('index')),
	array('label'=>'Create Top5game', 'url'=>array('create')),
	array('label'=>'Update Top5game', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Top5game', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Top5game', 'url'=>array('admin')),
);
?>

<h1>View Top5game #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'categoryId',
		'gameId',
		'position',
	),
)); ?>
