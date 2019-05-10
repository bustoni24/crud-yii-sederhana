<?php
/* @var $this RoleController */
/* @var $permission Permission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'role-grid',
	'dataProvider'=>$permission->search(),
	//'filter'=>$model,
	'rowCssClass'=> $checked,
	'columns'=>array(
		array('name'=>'no',
			'type'=>'raw',
			'header' => 'No ',
			'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
			'filter' => '',
			'htmlOptions'=>array('valign'=>'top','style'=>'width:40px;'),
		),
		'permission_name',
		'group',
		array('name'=>'tickmark',
			'type'=>'raw',
			'header' => 'Allowed',
			'filter' => '',
			'htmlOptions'=>array('width'=>'80', 'align'=>'center'),
			'value' => 'CHtml::checkBox("cek_".($row+1),
		 in_array($data->permission_id, $this->grid->rowCssClass)? true:false,   //numpang nyimpen array di property cgridview
		  array("value"=>$data->permission_id,
		 	"id"=>"cek_".($row+1))).CHtml::hiddenField("permissionid_".($row+1), $data->permission_id)',
			),
		

	),
)); ?>

<input type="hidden" name="counter" value="<?php echo $permission->pagination; ?>">
	<div >
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambahkan' : 'Simpan', array('class'=>'btn btn-info')); ?>
	</div>
</div><!-- form -->


 
