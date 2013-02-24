<?php
/* @var $this TeacherRatingController */
/* @var $teacher TeacherRating */
/* @var $form CActiveForm */
?>

<div class="form teacher-form" style="display:none">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teacher-rating-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($teacher); ?>

	<div class="row">
		<?php echo $form->labelEx($teacher,'teacher_id'); ?>
		<?php echo $form->textField($teacher,'teacher_id'); ?>
		<?php echo $form->error($teacher,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'user_id'); ?>
		<?php echo $form->textField($teacher,'user_id'); ?>
		<?php echo $form->error($teacher,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'subject_id'); ?>
		<?php echo $form->textField($teacher,'subject_id'); ?>
		<?php echo $form->error($teacher,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'good_explanation'); ?>
		<?php echo $form->textField($teacher,'good_explanation'); ?>
		<?php echo $form->error($teacher,'good_explanation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'fairness'); ?>
		<?php echo $form->textField($teacher,'fairness'); ?>
		<?php echo $form->error($teacher,'fairness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'knowledge'); ?>
		<?php echo $form->textField($teacher,'knowledge'); ?>
		<?php echo $form->error($teacher,'knowledge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'availability'); ?>
		<?php echo $form->textField($teacher,'availability'); ?>
		<?php echo $form->error($teacher,'availability'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($teacher,'friendliness'); ?>
		<?php echo $form->textField($teacher,'friendliness'); ?>
		<?php echo $form->error($teacher,'friendliness'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($teacher->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->