<?php
/* @var $this TeacherSubjectController */
/* @var $model TeacherSubject */

$this->breadcrumbs=array(
	'Teacher Subjects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeacherSubject', 'url'=>array('index')),
	array('label'=>'Create TeacherSubject', 'url'=>array('create')),
	array('label'=>'Update TeacherSubject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherSubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherSubject', 'url'=>array('admin')),
);
?>

<h1>View TeacherSubject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'subject_id',
	),
)); ?>
