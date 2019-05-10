<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Member',
);

$this->menu=array(
	array('label'=>'Create Member', 'url'=>array('create')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>

<h1>Member</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
