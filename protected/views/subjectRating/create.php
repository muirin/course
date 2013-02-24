<?php
/* @var $this CourseRatingController */
/* @var $model CourseRating */
Yii::app()->clientScript->registerScript('search', "
$('.rate_teacher').click(function(){
	$('.teacher-form').toggle();
	var selected = $('#teacher_select').find(':selected').val();
	$('#teacher_id').val(selected);
	return false;
});

$('#teacher_select').change(function(){
	var selected = $('#teacher_select').find(':selected').val();
	$('#teacher_id').val(selected);
	return false;
});

");
?>


<div id="templatemo_middle_subpage">
    <h1 class="white">Oceń przedmiot</h1>
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

	<?php 
	
	echo $this->renderPartial('_form', array('subjectRating'=>$subjectRating,
		    //'subject'=>$subject,
	    //'teacherRating'=>$teacherRating,
		    'teachers'=>$teachers,
	    'subject_id' => $subject_id,
		        'radioOptions'=>$radioOptions)); 
	?>
	
    <div class="cleaner"></div>
    </div></div>
