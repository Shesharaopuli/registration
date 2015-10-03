<?php
/* @var $this ListingController */
/* @var $model ListingModel */

$this->breadcrumbs=array(
	'Listing Models'=>array('index'),
	$model->listing_id=>array('view','id'=>$model->listing_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ListingModel', 'url'=>array('index')),
	array('label'=>'Create ListingModel', 'url'=>array('create')),
	array('label'=>'View ListingModel', 'url'=>array('view', 'id'=>$model->listing_id)),
	array('label'=>'Manage ListingModel', 'url'=>array('admin')),
);
?>

<h1>Update ListingModel <?php echo $model->listing_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>