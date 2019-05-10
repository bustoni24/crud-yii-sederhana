<?php
/* @var $this AdminSkpiController */
/* @var $model AdminSkpi */
/* @var $form CActiveForm */
?>
<div class="box">
<div class="box-body">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<div class="form-horizontal">
<div class="form-group">
                  <label class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <?php echo $form->textField($model,'userUsername',array('size'=>30,'maxlength'=>30,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'userUsername'); ?>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-8">
                    <input size="15" maxlength="20" name="User[userPassword]" id="User_userPassword" value="" type="password" class="form-control"> <em><?php echo $note  ?></em>
				<?php echo $form->error($model,'userPassword'); ?>
                  </div>
                </div>
<div class="form-group">
                <label class="col-sm-2 control-label">Role</label>
                <div class="col-sm-8">
                  <?php echo CHtml::activeDropDownList($model, 'userRole', CHtml::listData(Role::model()->findAll(), 'role_id', 'role_name'), array('class'=>'form-control select2','readonly')); ?> 
				<?php echo $form->error($model,'userRole'); ?>
                  </div>
        </div>
</div>
     <div class="box-footer">
     	<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan', array('class'=>'btn btn-success pull-right')); ?>
     </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>
</div>