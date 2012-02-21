<?php
$this->breadcrumbs=array(
	'Top5categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Top5category', 'url'=>array('index')),
	array('label'=>'Manage Top5category', 'url'=>array('admin')),
);
?>

<h1>Create Top5category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>