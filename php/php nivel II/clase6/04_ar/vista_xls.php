<?php
/*
$data="";
$ss="\n";
foreach($rpta as $ind=>$val){
	$data.="<tr>$ss";
	$data.="<td>$val[0]</td>$ss";
	$data.="<td>$val[1]</td>$ss";
	$data.="<td>$val[2]</td>$ss";
	$data.="<td>$val[3]</td>$ss";
	$data.="</tr>$ss";
}
$tabla_salida=<<<marca
<table border="1">
	<tr style="background-color: orange">
		<td>ID</td>
        <td>PATERNO</td>
        <td>MATERNO</td>
        <td>NOMBRE</td>
     </tr>
	 $data
</table>
marca;
*/
?>
<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=archivo.xls");
header("Pragma: no-cache");
header("Expires: 0");

//echo $tabla_salida;
?>
<table border="1">
   <tr style="background-color: orange">
      <td>ID</td>
      <td>PATERNO</td>
      <td>MATERNO</td>
      <td>NOMBRE</td>
   </tr>
<?php foreach($rpta as $ind=>$val){ ?>
      <tr>
      <td><?php echo $val[0]?></td>
      <td><?php echo $val[1]?></td>
      <td><?php echo $val[2]?></td>
      <td><?php echo $val[3]?></td>
      </tr>
<?php }?>
</table>