<html>
<body style="font-family: sans-serif">
<h1>Alumnos 2011</h1>
<table border="=1">
	<tr style="background-color: orange">
	<td>ID</td>
	<td>PATERNO</td>
	<td>MATERNO</td>
	<td>NOMBRE</td>
	</tr>
<?php foreach($rpta as $ind=>$val){?>
<tr>
	<td><?php echo $val[0]?></td>
	<td><?php echo $val[1]?></td>
	<td><?php echo $val[2]?></td>
	<td><?php echo $val[3]?></td>
</tr>
<?php }?>
</table>
</body>
</html>