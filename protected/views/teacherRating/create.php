<?php
/* @var $this TeacherRatingController */
/* @var $model TeacherRating */

$this->breadcrumbs=array(
	'Teacher Ratings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherRating', 'url'=>array('index')),
	array('label'=>'Manage TeacherRating', 'url'=>array('admin')),
);
?>

<h1>Create TeacherRating</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>