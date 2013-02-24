
<div class="form">

	 <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subject-rating-form',
	      'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
	      'clientOptions' => array('validateOnSubmit'=>true),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($subjectRating);  ?>
	<?php //echo $form->errorSummary($teacherRating); ?>
	
	<?php //var_dump($subjectRating->subject); ?>
	
	<?php echo $form->hiddenField($subjectRating,'subject_id',array('value'=>$subject_id)); ?>
	<?php //echo $form->hiddenField($teacherRating,'subject_id',array('value'=>$subject->id)); ?>
	<?php echo $form->hiddenField($subjectRating,'user_id',array('value'=>Yii::app()->user->getId())); ?>
	<?php //echo $form->hiddenField($teacherRating,'user_id',array('value'=>Yii::app()->user->getId())); ?>
	
	<?php //echo $form->hiddenField($teacherRating,'teacher_id', array('id'=>'teacher_id')); ?>
	
	<div class="left" style="float:left; width:49%; border: 1px solid black;">
	<div class="row">
		<?php echo $form->labelEx($subjectRating,'teacher_id'); ?>
		<?php echo $form->checkBoxList($subjectRating,'teacher_id',$teachers,array('id'=>'teacher_select')); ?> 
<!--		<span class="rate_teacher">A może chcesz ocenić również tego nauczyciela?</span>-->
		<?php //echo $form->error($subjectRating,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($subjectRating,'usefulness'); ?>
		<?php echo $form->radioButtonList($subjectRating, 'usefulness', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($subjectRating,'usefulness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($subjectRating,'attractiveness'); ?>
		<?php echo $form->radioButtonList($subjectRating, 'attractiveness', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($subjectRating,'attractiveness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($subjectRating,'equipment'); ?>
		<?php echo $form->radioButtonList($subjectRating, 'equipment', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($subjectRating,'equipment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($subjectRating,'clear_rules'); ?>
		<?php echo $form->radioButtonList($subjectRating, 'clear_rules', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($subjectRating,'clear_rules'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($subjectRating,'difficulty'); ?>
		<?php echo $form->radioButtonList($subjectRating, 'difficulty', $radioOptions, array('separator' => ' ')); ?>
		<?php echo $form->error($subjectRating,'difficulty'); ?>
	</div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($subjectRating->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

	</div>