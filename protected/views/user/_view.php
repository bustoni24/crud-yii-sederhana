<?php
/* @var $this AdminSkpiController */
/* @var $data AdminSkpi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userId), array('view', 'id'=>$data->userId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userUsername')); ?>:</b>
	<?php echo CHtml::encode($data->userUsername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userPassword')); ?>:</b>
	<?php echo CHtml::encode($data->userPassword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userRole')); ?>:</b>
	<?php echo CHtml::encode($data->userRole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userProdi')); ?>:</b>
	<?php echo CHtml::encode($data->userProdi); ?>
	<br />


</div>