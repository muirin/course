<?php
/* @var $this TeacherRatingController */
/* @var $model TeacherRating */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teacher-rating-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'teacher_id'); ?>
		<?php echo $form->textField($model,'teacher_id'); ?>
		<?php echo $form->error($model,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'good_explanation'); ?>
		<?php echo $form->textField($model,'good_explanation'); ?>
		<?php echo $form->error($model,'good_explanation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fairness'); ?>
		<?php echo $form->textField($model,'fairness'); ?>
		<?php echo $form->error($model,'fairness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'knowledge'); ?>
		<?php echo $form->textField($model,'knowledge'); ?>
		<?php echo $form->error($model,'knowledge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'availability'); ?>
		<?php echo $form->textField($model,'availability'); ?>
		<?php echo $form->error($model,'availability'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friendliness'); ?>
		<?php echo $form->textField($model,'friendliness'); ?>
		<?php echo $form->error($model,'friendliness'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->