<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Hak Akses'=>array('index'),
	$model->role_id=>array('view','id'=>$model->role_id),
	'Ubah',
);

$this->menu=array(
);
?>

<h1>Ubah Hak Akses</h1>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php $this->renderPartial('_form', array('model'=>$model,'form'=>$form)); ?>

<?php $this->renderPartial('_permissionform', array('permission'=>$permission,'model'=>$model, 'checked'=>$checked)); ?>


	
	<?php $this->endWidget(); ?>
