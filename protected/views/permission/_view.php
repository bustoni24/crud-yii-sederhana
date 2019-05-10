<?php
/* @var $this PermissionController */
/* @var $data Permission */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('permission_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->permission_id), array('view', 'id'=>$data->permission_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permission_name')); ?>:</b>
	<?php echo CHtml::encode($data->permission_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group')); ?>:</b>
	<?php echo CHtml::encode($data->group); ?>
	<br />


</div>