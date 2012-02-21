<?php
$this->breadcrumbs=array(
	'Top5categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Top5category', 'url'=>array('index')),
	array('label'=>'Create Top5category', 'url'=>array('create')),
	array('label'=>'Update Top5category', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Top5category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Top5category', 'url'=>array('admin')),
);
?>

<h1>View Top5category #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'agelevelId',
		'categoryId',
		'position',
	),
)); ?>
