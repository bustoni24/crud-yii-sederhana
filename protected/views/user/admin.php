<?php
/* @var $this UserController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Manajemen Pengguna',
);

$this->menu=array(
);


?>

<div class="box box-info">
<h1>Daftar Pengguna</h1>

<a class="btn btn-success pull-right" href="<?php  echo Yii::app()->request->baseUrl;?>/user/create">Tambah Baru</a>
<br>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-skpi-grid',
	'dataProvider'=>$model->searchAdmin(),
	//'filter'=>$model,
	'columns'=>array(
		array('name'=>'no',
		'type'=>'raw',
		'header' => 'No ',		
		'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		'filter' => '',	
		'htmlOptions'=>array('width'=>'50px', 'align'=>'right')	
		),
		'userUsername',
		array('name'=>'role',
		'type'=>'raw',
		'header' => 'Hak Akses',		
		'value' => '$this->grid->getController()->getRoleName($data->userRole)',
		'filter' => '',		
		),
		
		array(
				//'name'=>'',
				'header'=>'Action', //column header
				'type' =>'raw',
				'value' =>
				'(CHtml::link("<i class=\"fa fa-eye\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/user/view/".$data->userId,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".
				(CHtml::link("<i class=\"fa fa-edit\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/user/update/".$data->userId,
						array("class"=>"", "style"=>"width:25px; color:#333333;"))).
						"&nbsp;&nbsp;&nbsp;".				
				(CHtml::link("<i class=\"fa fa-trash\" style=\"margin-top:3px;\"></i> ",
						Yii::app()->request->baseUrl."/user/delete/".$data->userId,
						array("class"=>"", "style"=>"width:25px;  color:#333333;", 
            "onClick"=>"return confirm(\'Apakah Anda yakin akan menghapus user : $data->userUsername\')")));',
				'htmlOptions'=>array('width'=>'140px', 'align'=>'center')
		),
	),
)

); ?>
</div>
