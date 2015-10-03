<?php
/* @var $this ListingController */
/* @var $model ListingModel */

$this->breadcrumbs=array(
	'Listing Models'=>array('index'),
	$model->listing_id,
);

$this->menu=array(
	array('label'=>'List ListingModel', 'url'=>array('index')),
	array('label'=>'Create ListingModel', 'url'=>array('create')),
	array('label'=>'Update ListingModel', 'url'=>array('update', 'id'=>$model->listing_id)),
	array('label'=>'Delete ListingModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->listing_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ListingModel', 'url'=>array('admin')),
);
?>

<h1>View ListingModel #<?php echo $model->listing_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'listing_id',
		'listing_owner_user_id',
		'listing_name',
		'listing_address',
		'listing_price',
	),
)); ?>
