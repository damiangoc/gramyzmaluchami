<?php
$this->breadcrumbs=array(
	'Recommendeds'=>array('index'),
	'Create',
);

?>

<h1>Create Recommended</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'games' => $games)); ?>