<?php
/* @var $this AdminSkpiController */
/* @var $model AdminSkpi */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	$model->userId=>array('view',	'Update'));

$this->menu=array(
	// array('label'=>'List AdminSkpi', 'url'=>array('index')),
	// array('label'=>'Create AdminSkpi', 'url'=>array('create')),
	// array('label'=>'View AdminSkpi', 'url'=>array('view', 'id'=>$model->userId)),
	//array('label'=>'Daftar Pengguna', 'url'=>array('admin')),
);
?>

<h1>Ubah Pengguna</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'note'=>'*kosongkan jika tidak akan diganti')); ?>
