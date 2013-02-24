
<?php

Yii::app()->clientScript->registerScript('search', "
    
    $('.comment-widget>.comments-list>li').children('.comments-list').hide();

$('.comment-widget>.comments-list>li').each(function() { 

$(this).prepend(($(this).find('li').length)+' comments');
  
});


    $('.comment-widget>.comments-list>li>div').click(function() { console.log('fds');
  $(this).nextAll('.comments-list').toggle();
});

");
?>

<div id="templatemo_middle_subpage">
    <h1 class="white"><?php echo $model->name; ?></h1>
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'photos',
		'university_id',
	),
)); ?>
	
	<div class="form">

	    <?php
	    $this->widget('comments.widgets.ECommentsListWidget', array(
    'model' => $model,
));
	    ?>


</div><!-- form -->


	
    <div class="cleaner"></div>
    </div></div>


