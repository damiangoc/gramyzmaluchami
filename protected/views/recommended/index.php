<?php
$this->breadcrumbs=array(
	'Recommendeds',
);

$this->menu=array(
	array('label'=>'Create Recommended', 'url'=>array('create')),
	array('label'=>'Manage Recommended', 'url'=>array('admin')),
);
?>

<h1>Recommendeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
