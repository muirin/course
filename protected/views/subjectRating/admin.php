<?php
/* @var $this SubjectRatingController */
/* @var $model SubjectRating */

$this->breadcrumbs=array(
	'Subject Ratings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SubjectRating', 'url'=>array('index')),
	array('label'=>'Create SubjectRating', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subject-rating-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subject Ratings</h1>

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
	'id'=>'subject-rating-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'subject_id',
		'user_id',
		'teacher_id',
		'usefulness',
		'attractiveness',
		/*
		'equipment',
		'clear_rules',
		'difficulty',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
