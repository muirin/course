<?php
/* @var $this SubjectRatingController */
/* @var $model SubjectRating */

$this->breadcrumbs=array(
	'Subject Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubjectRating', 'url'=>array('index')),
	array('label'=>'Create SubjectRating', 'url'=>array('create')),
	array('label'=>'Update SubjectRating', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubjectRating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubjectRating', 'url'=>array('admin')),
);
?>

<h1>View SubjectRating #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subject_id',
		'user_id',
		'teacher_id',
		'usefulness',
		'attractiveness',
		'equipment',
		'clear_rules',
		'difficulty',
	),
)); ?>
