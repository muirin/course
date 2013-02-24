<?php
/* @var $this TeacherRatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teacher Ratings',
);

$this->menu=array(
	array('label'=>'Create TeacherRating', 'url'=>array('create')),
	array('label'=>'Manage TeacherRating', 'url'=>array('admin')),
);
?>

<h1>Teacher Ratings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
