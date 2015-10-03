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

<?php 
foreach ($dataProvider as $data){
	$this->renderPartial('_view', array('data'=>$data));
}

?>
