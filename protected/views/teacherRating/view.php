<?php
/* @var $this TeacherRatingController */
/* @var $model TeacherRating */

$this->breadcrumbs=array(
	'Teacher Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeacherRating', 'url'=>array('index')),
	array('label'=>'Create TeacherRating', 'url'=>array('create')),
	array('label'=>'Update TeacherRating', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherRating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherRating', 'url'=>array('admin')),
);
?>

<h1>View TeacherRating #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'user_id',
		'subject_id',
		'good_explanation',
		'fairness',
		'knowledge',
		'availability',
		'friendliness',
	),
)); ?>
