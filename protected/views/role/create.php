<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Hak Akses'=>array('index'),
	'Create',
);

$this->menu=array(
// 	array('label'=>'List Role', 'url'=>array('index')),
// 	array('label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<h1>Tambah Hak Akses</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'role-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 
// initialize variable
$checked = array();
?>


<?php $this->renderPartial('_form', array('model'=>$model,'form'=>$form)); ?>

<?php $this->renderPartial('_permissionform', array('permission'=>$permission,'model'=>$model, 'checked'=>$checked)); ?>


	
	<?php $this->endWidget(); ?>
