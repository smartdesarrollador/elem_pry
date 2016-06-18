<html>
<body>

<?php
//creando variables de Ingreso.php
	$codigo=$_POST['codigo'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direc=$_POST['direc'];
	$telf=$_POST['telf'];
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
//Almacenar en una cadena
$outputstring = "\n".$codigo." \t".$nombre." \t".$apellido." \t".$direc." \t".$telf." \t".$edad." \t".$sexo."\n";
// Abrir archivo
@ $fp = fopen("c:\alumnos".$codigo.".txt",'ab');
// si No puede Abrir
if (!$fp)
{
  echo '<p><strong> Su Proceso de de Abrir Archivo no lo puede Hacer....'
       .'Por Favor Intentelo Luego.....</strong></p></body></html>';
  exit;
} 
fwrite($fp, $outputstring, strlen($outputstring));
fclose($fp);
$alumno= $codigo.' - '.$nombre.' '.$apellido;
echo '<form>
      <table border="0">
	<tr>
   	   <td>Alumno:</td>
		<td align="center"><input type="text" name="alumno" size="20" maxlength="45" value='.$apellido.'></td>
	</tr>
	<tr> <td>Curso a Promediar:</td>
 	         <td><select name="find">
		    <option value="a">PHP</option>
		    <option value="b">Visual C#</option>
		    <option value="c">Corel Draw</option>
		    <option value="d">Word</option>
		    <option value="d">Excel</option>
		  </select></td>
		</tr>
		<tr><td>Nota 1:</td>
		       <td align="center"><input type="text" name="nota1" size="2" maxlength="2"></td>
		</tr>
		<tr><td>Nota 2:</td>
		       <td align="center"><input type="text" name="nota2" size="2" maxlength="2"></td>
		</tr>
		<tr><td>Nota 3:</td>
		       <td align="center"><input type="text" name="nota3" size="2" maxlength="2"></td>
		</tr>
		<tr><td>Nota 4:</td>
		       <td align="center"><input type="text" name="nota4" size="2" maxlength="2"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="submit" value="Calcular"></td>
		</tr>
		<tr><td>Promedio:</td>
		       <td align="center"><input type="text" name="Promedio" size="2" maxlength="2"></td>
		</tr>
	             <tr><td colspan="2" align="center"><input type="button" value="Grabar" onclick="promediar()"></td>
		</tr>
	</table>
</form>'
?>
</body>
</html>
