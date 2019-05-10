<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaMember'); ?>
		<?php echo $form->textField($model,'namaMember',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noHp'); ?>
		<?php echo $form->textField($model,'noHp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglLahir'); ?>
		<?php echo $form->textField($model,'tglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailMember'); ?>
		<?php echo $form->textField($model,'emailMember',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenisKelamin'); ?>
		<?php echo $form->textField($model,'jenisKelamin',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noKtp'); ?>
		<?php echo $form->textField($model,'noKtp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->