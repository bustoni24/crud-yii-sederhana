<?php
/* @var $this AdminSkpiController */
/* @var $model AdminSkpi */

$this->breadcrumbs=array(
	'Admin '=>array('index'),
	$model->userId,
);

$this->menu=array(
	array('label'=>'List AdminSkpi', 'url'=>array('index')),
	array('label'=>'Create AdminSkpi', 'url'=>array('create')),
	array('label'=>'Update AdminSkpi', 'url'=>array('update', 'id'=>$model->userId)),
	array('label'=>'Delete AdminSkpi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AdminSkpi', 'url'=>array('admin')),
);
?>

<div class="box box-info">
<div class="box-body">
<h1>Lihat Admin Pendaftaran #<?php echo $model->userId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userId',
		'userUsername',
		'userPassword',
		'userRole',
	),
)); ?>
</div>
</div>