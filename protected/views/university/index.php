<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('blogslistview', { 
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");

if(Yii::app()->user->isAdmin())
     echo 'Is administrator';
else
    echo 'Its Magda';
?>


<div id="templatemo_middle_subpage">
    <h1 class="white">Uczelnie</h1>
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'id'=>'blogslistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'name',
        'locality',
//        'enddate',
//        'user_id',
    ),
)); ?>
    
    <div class="cleaner"></div>
    </div></div>