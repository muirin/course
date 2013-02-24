<?php
/* @var $this SubjectRatingController */
/* @var $model SubjectRating */

$this->breadcrumbs=array(
	'Subject Ratings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubjectRating', 'url'=>array('index')),
	array('label'=>'Create SubjectRating', 'url'=>array('create')),
	array('label'=>'View SubjectRating', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubjectRating', 'url'=>array('admin')),
);
?>

<h1>Update SubjectRating <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>