<?php
/* @var $this CourseRatingController */
/* @var $model CourseRating */

$this->breadcrumbs=array(
	'Course Ratings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CourseRating', 'url'=>array('index')),
	array('label'=>'Create CourseRating', 'url'=>array('create')),
	array('label'=>'Update CourseRating', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CourseRating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CourseRating', 'url'=>array('admin')),
);
?>

<h1>View CourseRating #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'course_id',
		'user_id',
		'job',
		'attractiveness',
		'organization',
		'equipment',
		'difficulty',
	),
)); ?>
