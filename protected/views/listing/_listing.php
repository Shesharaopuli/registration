<?php
/* @var $this ListingController */
/* @var $data ListingModel */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_name')); ?>:</b>
	<?php echo CHtml::encode($data->listing_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_address')); ?>:</b>
	<?php echo CHtml::encode($data->listing_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listing_price')); ?>:</b>
	<?php echo CHtml::encode($data->listing_price); ?>
	<br />
	
	<form method="post" action="<?php echo Yii::app()->createUrl("booking/BookIt"); ?>">
	<input type='hidden' name='listing_id' value="<?php echo $data->listing_id ?>">
	<input type='hidden' name='listing_price' value=<?php echo $data->listing_price ;?>>
	<input type='submit' value='Book it'>
	</form>
	
	
	

</div>