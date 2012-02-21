<?php
$this->breadcrumbs=array(
	'Games'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Game', 'url'=>array('index')),
	array('label'=>'Create Game', 'url'=>array('create')),
	array('label'=>'View Game', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Game', 'url'=>array('admin')),
);
?>

<h1>Update Game <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>