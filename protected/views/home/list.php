<?php
/* @var $this HomeController */

$this->breadcrumbs=array(
	' ',
);
?>
<?php
 $this->layout = 'empty';
?>

<table  class="table foo-data-table footable-loaded footable default breakpoint">
<tr>
 <td>No.</td>
 <td>Nama</td>
 <td>NPM</td>
 <td>Action</td>
</>
<?php
  
 $no = 1;
 foreach ($model as $r){
 echo "<tr>";
     echo "<td>".$no."</td>";
     echo "<td>".$r['userRealname']."</td>";
     echo "<td>".$r['userUsername']."</td>";
     echo "<td><a href=".Yii::app()->request->baseUrl."/form/loginProdi/".$r['userId'].">Login</a></td>";
echo "</tr>"; 
$no++;
 }
?>
</table>


