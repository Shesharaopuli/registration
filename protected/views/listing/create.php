<?php
/* @var $this ListingController */
/* @var $model ListingModel */

$this->breadcrumbs=array(
	'Listing Models'=>array('index'),
	'Create',
);

?>

<h1>Add A Listing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>