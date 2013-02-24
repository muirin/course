<?php
/* @var $this SubjectRatingController */
/* @var $data SubjectRating */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usefulness')); ?>:</b>
	<?php echo CHtml::encode($data->usefulness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attractiveness')); ?>:</b>
	<?php echo CHtml::encode($data->attractiveness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment')); ?>:</b>
	<?php echo CHtml::encode($data->equipment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('clear_rules')); ?>:</b>
	<?php echo CHtml::encode($data->clear_rules); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('difficulty')); ?>:</b>
	<?php echo CHtml::encode($data->difficulty); ?>
	<br />

	*/ ?>

</div>