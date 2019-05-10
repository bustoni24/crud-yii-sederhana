<?php
/* @var $this AdminSkpiController */
/* @var $model AdminSkpi */

$this->breadcrumbs=array(
	'User'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List AdminSkpi', 'url'=>array('index')),
// 	array('label'=>'Manage AdminSkpi', 'url'=>array('admin')),
// );
?>
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pengguna</h3>
            </div>
 </div>


<?php $this->renderPartial('_form', array('model'=>$model, 'note'=>' ')); ?>