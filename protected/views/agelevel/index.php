<?php
$this->breadcrumbs=array(
	'Agelevels',
);

$this->menu=array(
	array('label'=>'Create Agelevel', 'url'=>array('create')),
	array('label'=>'Manage Agelevel', 'url'=>array('admin')),
);
?>

<h1>Agelevels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
