<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="">

	<title>Untitled 5</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		
$('#enviar').click(function(){
	var valor1=$('input[name=genero]:checked').val();

	alert(valor1);

	
	
}
);


});//fin de document 
</script>
</head>

<body>
<?php




?>
<form action="formulario_jquery4.php" method="POST" >
<table>
<tr>
	<td>genero:</td>
	<td><input type="radio" value="masculino" name="genero" id="genero1" />masculino </td>
	<td><input type="radio" value="femenino" name="genero" id="genero2" />femenino</td>
	
</tr>
<tr>
	<td colspan="2"><input type="submit" value="enviar" id="enviar"/></td>
	
</tr>
</table>
</form>
</body>
</html>