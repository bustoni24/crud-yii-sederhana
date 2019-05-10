<?php
/* @var $this HomeController */

$this->breadcrumbs=array(
	' ',
);

//print_r($model); exit;

?>
<section class="content">
      <div class="row">
      	<div class="callout callout-info">
   <h1>Dashboard</h1>
</div>
<div class="box">
	<div class="box-body">
		<h3> Sistem Pendaftaran Member</h3>
	</div>
	</div>
</div>
    </section>

<?php if(isset(Yii::app()->user->permission) && in_array("administrator",Yii::app()->user->permission)){ ?>
<br>

<br>
<?php } ?>





