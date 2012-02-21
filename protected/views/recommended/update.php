<?php
$this->breadcrumbs=array(
	'Recommendeds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recommended', 'url'=>array('index')),
	array('label'=>'Create Recommended', 'url'=>array('create')),
	array('label'=>'View Recommended', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recommended', 'url'=>array('admin')),
);
?>

<h1>Update Recommended <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>