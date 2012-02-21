<?php
$this->breadcrumbs=array(
	'Agelevels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Agelevel', 'url'=>array('index')),
	array('label'=>'Manage Agelevel', 'url'=>array('admin')),
);
?>

<h1>Create Agelevel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>