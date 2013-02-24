<?php
/* @var $this CourseRatingController */
/* @var $model CourseRating */

$this->breadcrumbs=array(
	'Course Ratings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CourseRating', 'url'=>array('index')),
	array('label'=>'Create CourseRating', 'url'=>array('create')),
	array('label'=>'View CourseRating', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CourseRating', 'url'=>array('admin')),
);
?>

<h1>Update CourseRating <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>