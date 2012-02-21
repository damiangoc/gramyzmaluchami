<?php
$this->breadcrumbs=array(
	'Top5games'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Top5game', 'url'=>array('index')),
	array('label'=>'Manage Top5game', 'url'=>array('admin')),
);
?>

<h1>Create Top5game</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>