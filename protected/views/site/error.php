<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h2><?php echo $code == "404"?"":"Error ".$code; ?></h2>

<div class="error">
<?php 
if($code == "404"){
  echo "<h1><i class=\"zmdi zmdi-wrench\"></i> Under Development</h1> <span style=\"margin-left:30px;\">Halaman ini sedang dalam tahap development.</span>";
}else{
  echo CHtml::encode($message);
}
 ?>
</div>