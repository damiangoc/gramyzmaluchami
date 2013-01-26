<?php
$this->breadcrumbs=array(
	'Top5games'=>array('index'),
	'Create',
);

?>

<h1>Create Top5game</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categories' => $categories, 'games' => $games)); ?>