<?php
/* @var $this SubjectRatingController */
/* @var $model SubjectRating */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teacher_id'); ?>
		<?php echo $form->textField($model,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usefulness'); ?>
		<?php echo $form->textField($model,'usefulness'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attractiveness'); ?>
		<?php echo $form->textField($model,'attractiveness'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'equipment'); ?>
		<?php echo $form->textField($model,'equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clear_rules'); ?>
		<?php echo $form->textField($model,'clear_rules'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'difficulty'); ?>
		<?php echo $form->textField($model,'difficulty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->