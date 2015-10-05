<?php
/* @var $this BookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Booking Models',
);

$this->menu=array(
	array('label'=>'Create BookingModel', 'url'=>array('create')),
	array('label'=>'Manage BookingModel', 'url'=>array('admin')),
);
?>
<h1>Listing Models</h1>

<?php 
foreach ($dataProvider as $data){
	$this->renderPartial('_view', array('data'=>$data));
}

?>