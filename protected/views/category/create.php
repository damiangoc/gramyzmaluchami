<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

 ?>

<h1>Create Category</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'agelevels' => $agelevels)); ?>