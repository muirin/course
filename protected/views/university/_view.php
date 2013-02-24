<?php
/* @var $this UniversityController */
/* @var $data University */

?>

<div class="view">

    <div class="left" style="float:left; width:150px; height:150px; border: 1px solid black;">


    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/university/<?php echo CHtml::encode($data->id); ?>/main.jpg" alt="" style="max-width: 100%">

    </div>

    <div class="right" style="float:left; width:400px; height:150px; border: 1px solid black">

	<b><?php echo CHtml::encode($data->name); ?></b>

	<br />

	<?php echo CHtml::encode($data->locality); ?>
	<br />
    </div>
    <div class="clear"></div>






</div>