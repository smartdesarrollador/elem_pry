<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	

	<title>Untitled 7</title>
</head>

<body>
<form action="voto.php" method="POST" >
<table border="1">


<?php
for($i=1;$i<=20;$i++){
echo "<tr><td>ingresar voto".$i."</td>
<td style='width:50px'><input type='radio' name='voto".$i."' value='a".$i."' checked='checked'>SI</td>
<td style='width:70px'><input type='radio' name='voto".$i."' value='b".$i."'>NO</td>
<td style='width:100px'><input type='radio' name='voto".$i."' value='c".$i."'>NULO</td>
</tr >";
}


?>
	

<tr>
	<td colspan="2" ><input type="submit" value="enviar votos" name="voto" /></td>
	
</tr>
</table>

</form>



</body>
</html>
