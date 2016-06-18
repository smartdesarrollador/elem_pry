<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 2</title>
</head>

<body>

 <form>
    <fieldset>
       <legend>datos alumno</legend>
       nombre:<br><input type="text" name="dato" value=""/><br>
  apellidos:<br><input type="text" name="dato1" value="sanchez" size="15"/><br>
  edad:<br><input type="text" name="edad" value="edad"><br>
  
  <b>sexo</b><br>
  <input type="radio" name="sexo" value="hombre" checked="checked"/>masculino
  <input type="radio" name="sexo" value="mujer" />femeninoz<br>
  
	</fieldset>
	
	<fieldset>
	     <legend>datos de seccion</legend>
	     <b>colegio</b><input type="text" name="cole" value=""/> <br>
	     <b>año de estudio</b><input type="text" name="year" size="2"/><br>
	     <input type="radio" name="secc" value="a" checked="checked"/>A
	     <input type="radio" name="secc" value="b"/>B<br>
	
	</fieldset>
	
	
	<fieldset>
	<legend>datos de seccion</legend>
	<label for="col" >colegio</label><input type="text" name="cole"/><br>
	<label for="col1">año</label><input type="text" name="año" size="2"/><br>
	<label for="secc">seccion:</label>
	     <input type="radio" name="secc" value="a" checked="checked"/>A
	     <input type="radio" name="secc" value="b"/>B<br>
	</fieldset>
 
 </form>

</body>
</html>