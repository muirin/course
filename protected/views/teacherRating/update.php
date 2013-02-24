<?php
/* @var $this TeacherRatingController */
/* @var $model TeacherRating */

$this->breadcrumbs=array(
	'Teacher Ratings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherRating', 'url'=>array('index')),
	array('label'=>'Create TeacherRating', 'url'=>array('create')),
	array('label'=>'View TeacherRating', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherRating', 'url'=>array('admin')),
);
?>

<h1>Update TeacherRating <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>