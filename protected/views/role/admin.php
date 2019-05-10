<?php
/* @var $this RoleController */
/* @var $model Role */

$this->breadcrumbs=array(
	'Hak Akses'=>array('index'),
	'Atur',
);

$this->menu=array(
// 	array('label'=>'List Role', 'url'=>array('index')),
// 	array('label'=>'Create Role', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#role-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pengaturan Hak Akses</h1>

<a class="btn btn-success pull-right" href="<?php  echo Yii::app()->request->baseUrl;?>/role/create">Tambah Baru</a>
<br><br>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'role-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'role_id',
		'role_name',
		'description',
		array(
				'header'=>'Action', //column header
				'type' =>'raw',
				'value' =>
				'(CHtml::link("<i class=\"zmdi zmdi-edit\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/role/update/".$data->role_id,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".				
				(CHtml::link("<i class=\"zmdi zmdi-delete\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/role/delete/".$data->role_id,
						array("class"=>"", "style"=>"width:25px;  color:#333333;", 
            			"onClick"=>"return confirm(\'Apakah Anda yakin akan menghapus role : $data->role_name\')")));',
				'htmlOptions'=>array('width'=>'160px', 'align'=>'center')
		),
	),
)); ?>
