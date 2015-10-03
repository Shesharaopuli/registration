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
	
	<button>Book it</button>

</div>