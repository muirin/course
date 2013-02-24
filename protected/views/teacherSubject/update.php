<?php
/* @var $this TeacherSubjectController */
/* @var $model TeacherSubject */

$this->breadcrumbs=array(
	'Teacher Subjects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeacherSubject', 'url'=>array('index')),
	array('label'=>'Create TeacherSubject', 'url'=>array('create')),
	array('label'=>'View TeacherSubject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TeacherSubject', 'url'=>array('admin')),
);
?>

<h1>Update TeacherSubject <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>