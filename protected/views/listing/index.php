<?php
/* @var $this ListingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Listing Models',
);

$this->menu=array(
	array('label'=>'Create ListingModel', 'url'=>array('create')),
	array('label'=>'Manage ListingModel', 'url'=>array('admin')),
);
?>

<h1>Listing Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
