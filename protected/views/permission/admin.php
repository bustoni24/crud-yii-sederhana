<?php
/* @var $this PermissionController */
/* @var $model Permission */

$this->breadcrumbs=array(
	'Ijin'=>array('index'),
	'Atur',
);

$this->menu=array(
	//array('label'=>'List Permission', 'url'=>array('index')),
	//array('label'=>'Create Permission', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#permission-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pengaturan Ijin</h1>

<a class="btn btn-success pull-right" href="<?php  echo Yii::app()->request->baseUrl;?>/permission/create">Tambah Baru</a>
<br><br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'permission-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'permission_id',
		'permission_name',
		'group',
		array(
				'header'=>'Action', //column header
				'type' =>'raw',
				'value' =>
				'(CHtml::link("<i class=\"zmdi zmdi-edit\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/permission/update/".$data->permission_id,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".				
				(CHtml::link("<i class=\"zmdi zmdi-delete\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/permission/delete/".$data->permission_id,
						array("class"=>"", "style"=>"width:25px;  color:#333333;", 
            			"onClick"=>"return confirm(\'Apakah Anda yakin akan menghapus permission : $data->permission_name\')")));',
				'htmlOptions'=>array('width'=>'160px', 'align'=>'center')
		),
	),
)); ?>
