<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>
<div class="box">
<div class="box-body">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
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
                  <label class="col-sm-2 control-label">Nama Member</label>
                  <div class="col-sm-8">
                    <?php echo $form->textField($model,'namaMember',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'namaMember'); ?>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">No. HP</label>
                  <div class="col-sm-8">
                    <?php echo $form->textField($model,'noHp',array('type'=>'number','class'=>'form-control')); ?>
				<?php echo $form->error($model,'noHp'); ?>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                    <?php echo $form->textField($model,'tglLahir',array('type'=>'text','id'=>'datepicker','placeholder'=>'yyyy/mm/dd','class'=>'form-control')); ?>
					<?php echo $form->error($model,'tglLahir'); ?>
                  </div>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">Email Member</label>
                  <div class="col-sm-8">
                    <?php echo $form->textField($model,'emailMember',array('size'=>50,'maxlength'=>50,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'emailMember'); ?>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                   <?php echo $form->radioButtonList($model,'jenisKelamin',array('Laki-Laki'=>'L','Perempuan'=>'P'),
					array(
									'template'=>'{input}{label}',
									'separator'=>'',
									'labelOptions'=>array(
										'style'=> '
										padding-left:5px;
										width: 40px;
										float: left;
										'
									),
									'style'=>'float:left',
								));  
               		?>
					<?php echo $form->error($model,'jenisKelamin'); ?>
                  </div>
                </div>

<div class="form-group">
                  <label class="col-sm-2 control-label">No. KTP</label>
                  <div class="col-sm-8">
                    <?php echo $form->textField($model,'noKtp',array('type'=>'number','class'=>'form-control')); ?>
				<?php echo $form->error($model,'noKtp'); ?>
                  </div>
                </div>
 <div class="box-footer">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save', array('class'=>'btn btn-success pull-right')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->

</div>
</div>