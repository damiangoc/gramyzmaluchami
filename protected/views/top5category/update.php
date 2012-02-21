<?php
$this->breadcrumbs=array(
	'Top5categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Top5category', 'url'=>array('index')),
	array('label'=>'Create Top5category', 'url'=>array('create')),
	array('label'=>'View Top5category', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Top5category', 'url'=>array('admin')),
);
?>

<h1>Update Top5category <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>