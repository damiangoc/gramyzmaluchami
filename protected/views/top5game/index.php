<?php
$this->breadcrumbs=array(
	'Top5games',
);

$this->menu=array(
	array('label'=>'Create Top5game', 'url'=>array('create')),
	array('label'=>'Manage Top5game', 'url'=>array('admin')),
);
?>

<h1>Top5games</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
