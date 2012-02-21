<?php
$this->breadcrumbs=array(
	'Top5games'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Top5game', 'url'=>array('index')),
	array('label'=>'Create Top5game', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('top5game-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Top5games</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'top5game-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'categoryId',
		'gameId',
		'position',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
