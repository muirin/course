<?php
/* @var $this TeacherSubjectController */
/* @var $model TeacherSubject */

$this->breadcrumbs=array(
	'Teacher Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherSubject', 'url'=>array('index')),
	array('label'=>'Manage TeacherSubject', 'url'=>array('admin')),
);
?>

<h1>Create TeacherSubject</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>