<?php
/* @var $this AdminSkpiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengguna',
);

$this->menu=array(
	array('label'=>'Create Admin', 'url'=>array('create')),
	array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>Admin Skpis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
