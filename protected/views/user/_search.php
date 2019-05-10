<?php
/* @var $this AdminSkpiController */
/* @var $model AdminSkpi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userUsername'); ?>
		<?php echo $form->textField($model,'userUsername',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userPassword'); ?>
		<?php echo $form->textField($model,'userPassword',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userRole'); ?>
		<?php echo $form->textField($model,'userRole'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userProdi'); ?>
		<?php echo $form->textField($model,'userProdi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->