
<div id="templatemo_middle_subpage">
    <h1 class="white">Universities</h1>
    
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

<?php 
echo 'm';
echo 'gf';


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'university-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'photos',
		'name',
		//'description',
		//'public',
		//'street',
		/*
		'postal_code',
		'post',
		'city',
		'locality',
		'latitude',
		'longitude',
		'mail',
		'www',
		'phone1',
		'phone2',
		*/
//		array(
//			'class'=>'CButtonColumn',
//		),
	),
    //'viewfile'=>'custom-view-file'
)); ?>

    
    <div class="cleaner"></div>
    </div></div>