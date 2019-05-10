<?php
/* @var $this RoleController */
/* @var $model Role */
/* @var $form CActiveForm */
?>

<div class="form">
<?php 
$new = false;
if(!isset($form)){
	$new = true;
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'role-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
));
}
?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<input type=hidden name="role_id" value="<?php echo $model->role_id; ?>" >

	<div >
		<?php echo $form->labelEx($model,'role_name'); ?>
		<?php echo $form->textField($model,'role_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'role_name'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
<br>
	<div>
	<h1>Akses</h1>
	</div>
	



</div><!-- form -->


 
