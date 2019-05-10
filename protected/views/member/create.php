<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Member</h3>
            </div>
 </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>