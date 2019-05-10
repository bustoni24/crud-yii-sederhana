<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Member'=>array('index'),
	'Manage',
);

$this->menu=array(
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#member-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="col-sm-12">
	<div class="box box-info">
<div class="box-body">
<h1>Daftar Member</h1>

<a class="btn btn-success pull-right" href="<?php  echo Yii::app()->request->baseUrl;?>/member/create">Tambah Baru</a>
<br/>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'member-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'namaMember',
		'noHp',
		'tglLahir',
		'emailMember',
		'jenisKelamin',
		'noKtp',

		array(
				//'name'=>'',
				'header'=>'Action', //column header
				'type' =>'raw',
				'value' =>
				'(CHtml::link("<i class=\"fa fa-eye\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/member/view/".$data->id,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".	
				(CHtml::link("<i class=\"fa fa-edit\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/member/update/".$data->id,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".				
				(CHtml::link("<i class=\"fa fa-trash\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/member/delete/".$data->id,
						array("class"=>"", "style"=>"width:25px;  color:#333333;", 
            "onClick"=>"return confirm(\'Apakah Anda yakin akan menghapus user : $data->namaMember\')")));',
				'htmlOptions'=>array('width'=>'140px', 'align'=>'center')
		),
	),
)); ?>
</div>
</div>
</div>
