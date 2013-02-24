<?php
/* @var $this CourseRatingController */
/* @var $model CourseRating */

?>


<div id="templatemo_middle_subpage">
    <h1 class="white">Oceń kierunek</h1>
</div>

<div id="templatemo_main">
    
    <div class="col_w900 col_w900_last">

	<?php echo $this->renderPartial('_form', array('model'=>$model, 'radioOptions'=>$radioOptions)); ?>
    
    <div class="cleaner"></div>
    </div></div>
