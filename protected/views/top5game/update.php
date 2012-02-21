<?php
$this->breadcrumbs=array(
	'Top5games'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Top5game', 'url'=>array('index')),
	array('label'=>'Create Top5game', 'url'=>array('create')),
	array('label'=>'View Top5game', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Top5game', 'url'=>array('admin')),
);
?>

<h1>Update Top5game <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>