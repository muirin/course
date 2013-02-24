<?php
/* @var $this TeacherSubjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teacher Subjects',
);

$this->menu=array(
	array('label'=>'Create TeacherSubject', 'url'=>array('create')),
	array('label'=>'Manage TeacherSubject', 'url'=>array('admin')),
);
?>

<h1>Teacher Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
