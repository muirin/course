<?php
/* @var $this UniversityController */
/* @var $data University */

?>

<div class="view">

    <div class="left" style="float:left; width:150px; height:150px; border: 1px solid black;">


ocena: 5.4
    </div>

    <div class="right" style="float:left; width:400px; height:150px; border: 1px solid black">

	<b><?php echo CHtml::encode($data->name); ?></b>

	<br />

	<?php echo CHtml::encode($data->university->name); ?>
	<br />
    </div>
    <div class="clear"></div>






</div>