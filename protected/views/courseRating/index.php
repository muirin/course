<?php
/* @var $this CourseRatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Course Ratings',
);

$this->menu=array(
	array('label'=>'Create CourseRating', 'url'=>array('create')),
	array('label'=>'Manage CourseRating', 'url'=>array('admin')),
);
?>

<h1>Course Ratings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
