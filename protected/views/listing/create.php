<?php
/* @var $this ListingController */
/* @var $model ListingModel */

$this->breadcrumbs=array(
	'Listing Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ListingModel', 'url'=>array('index')),
	array('label'=>'Manage ListingModel', 'url'=>array('admin')),
);
?>

<h1>Create ListingModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>