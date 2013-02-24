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
?>


<div id="templatemo_middle_subpage">
    <h1 class="white">Przedmioty</h1>
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>
	
<div class="filter-form">

<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($user); ?>
 
<div class="simple">
<?php echo CHtml::activeLabel($user,'username'); ?>
<?php echo CHtml::activeTextField($user,'username'); ?>
</div>
 
<div class="simple">
<?php echo CHtml::activeLabel($user,'password'); ?>
<?php echo CHtml::activePasswordField($user,'password');
?>
</div>
 
<div class="action">
<?php echo CHtml::activeCheckBox($user,'rememberMe'); ?>
Remember me next time<br/>
<?php echo CHtml::submitButton('Login'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>

    
</div>	
	
	
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'id'=>'blogslistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'name',
        'description',
//        'enddate',
//        'user_id',
    ),
)); ?>
    
    <div class="cleaner"></div>
    </div></div>