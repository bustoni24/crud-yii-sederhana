<?php
/* @var $this PermissionController */
/* @var $model Permission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permission-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="xrow">
		<?php echo $form->labelEx($model,'permission_name'); ?>
		<?php echo $form->textField($model,'permission_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'permission_name'); ?>
	</div>

	<div class="xrow">
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model,'group',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'group'); ?>
	</div>

	<div class="rowx buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->