<?php
/* @var $this BookingController */
/* @var $model BookingModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_id'); ?>
		<?php echo $form->textField($model,'booking_id'); ?>
		<?php echo $form->error($model,'booking_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_listing_id'); ?>
		<?php echo $form->textField($model,'booking_listing_id'); ?>
		<?php echo $form->error($model,'booking_listing_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_user_id'); ?>
		<?php echo $form->textField($model,'booking_user_id'); ?>
		<?php echo $form->error($model,'booking_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'booking_amount'); ?>
		<?php echo $form->textField($model,'booking_amount',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'booking_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->