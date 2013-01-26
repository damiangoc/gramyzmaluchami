<?php
$this->breadcrumbs=array(
	'Top5categories'=>array('index'),
	'Create',
);

?>

<h1>Create Top5category</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'agelevels' => $agelevels, 'categories' => $categories)); ?>