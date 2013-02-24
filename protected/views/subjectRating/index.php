<?php
/* @var $this SubjectRatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subject Ratings',
);

$this->menu=array(
	array('label'=>'Create SubjectRating', 'url'=>array('create')),
	array('label'=>'Manage SubjectRating', 'url'=>array('admin')),
);
?>

<h1>Subject Ratings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
