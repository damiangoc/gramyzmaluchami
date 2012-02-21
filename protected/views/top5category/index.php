<?php
$this->breadcrumbs=array(
	'Top5categories',
);

$this->menu=array(
	array('label'=>'Create Top5category', 'url'=>array('create')),
	array('label'=>'Manage Top5category', 'url'=>array('admin')),
);
?>

<h1>Top5categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
