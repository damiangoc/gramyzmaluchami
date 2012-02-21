<?php
$this->breadcrumbs=array(
	'Agelevels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agelevel', 'url'=>array('index')),
	array('label'=>'Create Agelevel', 'url'=>array('create')),
	array('label'=>'View Agelevel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Agelevel', 'url'=>array('admin')),
);
?>

<h1>Update Agelevel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>