<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaMember')); ?>:</b>
	<?php echo CHtml::encode($data->namaMember); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noHp')); ?>:</b>
	<?php echo CHtml::encode($data->noHp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglLahir')); ?>:</b>
	<?php echo CHtml::encode($data->tglLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailMember')); ?>:</b>
	<?php echo CHtml::encode($data->emailMember); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisKelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenisKelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noKtp')); ?>:</b>
	<?php echo CHtml::encode($data->noKtp); ?>
	<br />


</div>