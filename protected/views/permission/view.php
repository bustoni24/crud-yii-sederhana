<?php
/* @var $this PermissionController */
/* @var $model Permission */

$this->breadcrumbs=array(
	'Permissions'=>array('index'),
	$model->permission_id,
);

$this->menu=array(
	array('label'=>'List Permission', 'url'=>array('index')),
	array('label'=>'Create Permission', 'url'=>array('create')),
	array('label'=>'Update Permission', 'url'=>array('update', 'id'=>$model->permission_id)),
	array('label'=>'Delete Permission', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->permission_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permission', 'url'=>array('admin')),
);
?>

<h1>View Permission #<?php echo $model->permission_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'permission_id',
		'permission_name',
		'group',
	),
)); ?>
