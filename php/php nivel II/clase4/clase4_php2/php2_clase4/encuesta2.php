<?php
$voto= $_POST["voto"];
//recibo el id de la encuesta
$encid=$_POST["encid"];
$servidor="localhost";
$usuario="root";
$password="root";
$base="encuesta";
$sqlid=mysql_connect($servidor,$usuario,$password);
mysql_select_db($base,$sqlid);
$sqlquery="update preg_encuesta".
           "set encval$voto=encval$voto+1 where encid=$encid";
$sqlresult=mysql_query($sqlquery,$sqlid);
$sqlquery="select *from preg_encuesta where encid=$encid";
$sqlresult=mysql_query($sqlquery,$sqlid);
$sqlrow=mysql_fetch_array($sqlresult);
 

?>
<p align="center"><font size="4"> <strong><em>resultados parciales de la encuesta</em></strong></font></p>
<p align="center"><strong><font size="2" face="verdana,arial,helvetica,sans-serif"><?php echo $sqlrow["encprg"]; ?></font></strong></p>

<table align="center" width="75%" border="0" cellpadding="1" cellpadding="1">
<tr>
       <td align="left" width="23%" ><?php echo $sqlrow["encrpt1"]; ?><div align="left"></div></td>
	   <td><img height="5" width="<?php echo $sqlrow["encval1"]*100/$sqlrow["enctot"];?>%" src="imagenes/barra1.gif"></td>
       <td align="center" width="14%" ><?php echo $sqlrow["encval1"]; ?>votos</td>
</tr>
<tr>
       <td align="left"  ><?php echo $sqlrow["encrpt2"]; ?><div align="left"></div></td>
	   <td><img height="5" width="<?php echo $sqlrow["encval2"]*100/$sqlrow["enctot"];?>%" src="imagenes/barra2.gif"></td>
       <td align="center" width="14%" ><?php echo $sqlrow["encval2"]; ?>votos</td>
</tr>
<tr>
       <td align="left" width="23%" ><?php echo $sqlrow["encrpt3"]; ?><div align="left"></div></td>
	   <td><img height="5" width="<?php echo $sqlrow["encval3"]*100/$sqlrow["enctot"];?>%" src="imagenes/barra3.gif"></td>
       <td align="center" width="14%" ><?php echo $sqlrow["encval3"]; ?>votos</td>
</tr>
<tr>
       <td align="left" width="23%" ><?php echo $sqlrow["encrpt4"]; ?><div align="left"></div></td>
	   <td><img height="5" width="<?php echo $sqlrow["encval4"]*100/$sqlrow["enctot"];?>%" src="imagenes/barra4.gif"></td>
       <td align="center" width="14%" ><?php echo $sqlrow["encval4"]; ?>votos</td>
</tr>

</table>
<p align="center">total de votos emitidos: <?php echo $sqlrow["enctot"];?></p>


