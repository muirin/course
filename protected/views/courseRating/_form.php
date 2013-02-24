<?php
/* @var $this CourseRatingController */
/* @var $model CourseRating */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-rating-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
<!--	<div class="row">
	    
		<?php echo $form->labelEx($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'job'); ?>
		<?php echo $form->radioButtonList($model, 'job', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($model,'job'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attractiveness'); ?>
		<?php echo $form->radioButtonList($model, 'attractiveness', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($model,'attractiveness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organization'); ?>
		<?php echo $form->radioButtonList($model, 'organization', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($model,'organization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipment'); ?>
		<?php echo $form->radioButtonList($model, 'equipment', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($model,'equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'difficulty'); ?>
		<?php echo $form->radioButtonList($model, 'difficulty', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($model,'difficulty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->