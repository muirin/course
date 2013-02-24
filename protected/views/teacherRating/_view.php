<?php
/* @var $this TeacherRatingController */
/* @var $data TeacherRating */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('good_explanation')); ?>:</b>
	<?php echo CHtml::encode($data->good_explanation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fairness')); ?>:</b>
	<?php echo CHtml::encode($data->fairness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('knowledge')); ?>:</b>
	<?php echo CHtml::encode($data->knowledge); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('availability')); ?>:</b>
	<?php echo CHtml::encode($data->availability); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friendliness')); ?>:</b>
	<?php echo CHtml::encode($data->friendliness); ?>
	<br />

	*/ ?>

</div>