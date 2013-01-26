<?php
$this->breadcrumbs=array(
	'Games'=>array('index'),
	'Create',
);

?>

<h1>Create Game</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'categories' => $categories)); ?>