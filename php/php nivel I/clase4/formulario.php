<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	
	<title>Untitled 1</title>
</head>

<body>
   <form>
  nombre:<br><input type="text" name="dato" value=""/><br>
  apellidos:<br><input type="text" name="dato1" value="sanchez" size="15"/><br>
email:<br><input type="text" name="email" value="@" size="50"/><br>
clave:<br><input type="password" name="clave" value="" size="5" maxlength="4"/><br>

<hr>
<b>puesto de trabajo</b><br>
  <input name="cargo1" type="checkbox" value="gerente"/>gerente
  <input name="cargo2" type="checkbox" value="subGerente"/>subGerente
<input name="cargo3" type="checkbox" value="genteDeServicio"/>jefeDeServicio
<input name="cargo4" type="checkbox" value="jefeDeArea"/>jefeDeArea

<hr>
<b>sexo</b><br>
<input type="radio" name="sexo" value="hombre" checked="checked"/>masculino
<input type="radio" name="sexo" value="mujer" />femeninoz<br>
<b>categoria</b><br>
<input type="radio" name="cat" value="a" checked="checked"/>A
<input type="radio" name="cat" value="b" />B
<input type="radio" name="cat" value="c" />C
<input type="radio" name="cat" value="d" />D
<hr>
<input type="submit" name="buscar" value="buscar" />&nbsp;
<input type="reset" name="ejecutar" value="ejecutar y borrar datos"/>

<hr>
<b>cargar archivos</b>
<input type="file" name="adjunto" size="80">
<hr>
<table width="50%">
    <tr>
        <td><input type="image" name="imagen1" src="auto.jpg" style="width:100px; height:100px;"/></td>
        <td><input type="image" name="imagen2" src="moto.jpg" style="width:100px; height:100px;"/></td>
        <td><input type="image" name="imagen3" src="avion.jpg" style="width:100px; height:100px;"/></td>
        <td><input type="image" name="imagen4" src="auto2.jpg" style="width:100px; height:100px;"/></td>
	
	</tr>

</table>

</form>




</body>
</html>