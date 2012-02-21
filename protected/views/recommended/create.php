<?php
$this->breadcrumbs=array(
	'Recommendeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recommended', 'url'=>array('index')),
	array('label'=>'Manage Recommended', 'url'=>array('admin')),
);
?>

<h1>Create Recommended</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>