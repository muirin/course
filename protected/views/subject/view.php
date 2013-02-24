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
		'course_id',
	),
)); ?>
	
    <div class="cleaner"></div>
    </div></div>

