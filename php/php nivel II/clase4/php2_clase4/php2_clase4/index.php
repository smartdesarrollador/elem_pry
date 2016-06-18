<html>

<head>
	
	<title>Untitled 2</title>
</head>

<body> 
<?php

function conectarse(){
	if(!($link=mysql_connect("localhost","root","root"))){
		echo "error al conectarse al servidor";
		exit();
	}
	
	if(!mysql_select_db("encuesta",$link)){
		echo "error al seleccionar la base de datos";
		exit();
	}
	return $link;
	
}

$link=conectarse();

$consulta=mysql_query("select * from preg_encuesta",$link) or die ("error en la consulta");
$sqlrow=mysql_fetch_array($consulta);

?>

<form name="form1" method="post" action="encuesta.php">
<input type="hidden" name="encid" value="<?php echo $sqlrow[0]?>">
   <table width="270" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr><td align="center" bgcolor="#006600"><font color="#ffffff" size="1" face="arial">:::::::::::::::::::::::::::::::</font></td></tr>
   <tr><td bgcolor="#ffffcc" ><div align="center"><font size="2" face="arial"><strong <?php echo $sqlrow[1]?>></strong></font></div></td></tr>
   <tr><td bgcolor="#ffffcc" ><p><font size="2">
       <label ><input type="radio" name="voto" value="1"><?php echo $sqlrow[2]?></label><br>
       <label ><input type="radio" name="voto" value="2"><?php echo $sqlrow[3]?></label><br>
       <label ><input type="radio" name="voto" value="3"><?php echo $sqlrow[4]?></label><br>
       <label ><input type="radio" name="voto" value="4"><?php echo $sqlrow[5]?></label><br>
       
   </font></p></td></tr>
<tr><td bgcolor="#ffffcc"><br>
<div align="center"><input type="submit" name="submit" value="aceptar"></div><br>
</td></tr>
   </table>
</form>
<div align="center" ><font size="2" face="arial"><a href="esquema.php">administracion</a></font></div>
</body>
</html>

