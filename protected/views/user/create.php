<?php
/* @var $this UserController */
/* @var $model UserModel */

$this->breadcrumbs=array(
	'User Models'=>array('index'),
	'Create',
);
?>

<h1>User Registration </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>