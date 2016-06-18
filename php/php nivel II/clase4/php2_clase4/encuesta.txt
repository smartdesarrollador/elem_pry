<?php
//recibo el voto
$voto = $_POST["voto"];
//recibo el id de la encuesta
$encid = $_POST["encid"];
$servidor="localhost";
$usuario="root";
$password="root";
$base="encuesta";
$SQLid = mysql_connect($servidor,$usuario,$password);
mysql_select_db($base,$SQLid);
$SQLquery = "UPDATE Preg_encuesta".
			" SET encval$voto = encval$voto+1,enctot = enctot+1 where encid=$encid";
$SQLresult = mysql_query($SQLquery,$SQLid);
$SQLquery = "SELECT * FROM preg_encuesta where encid=$encid";
$SQLresult = mysql_query($SQLquery,$SQLid);
$SQLrow = mysql_fetch_array($SQLresult);
?>
  <P ALIGN="center"><font size="4"><strong><em>RESULTADOS PARCIALES DE LA 
    ENCUESTA</em></strong></font></P>
  <P ALIGN="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
    <?php
  	echo $SQLrow["encprg"]
  ?>
  </font></strong></P>
  <TABLE ALIGN="center" WIDTH="75%" BORDER="0" CELLSPACING="1" CELLPADDING="1">
    <TR> <TD ALIGN="left" WIDTH="23%"><?php echo $SQLrow["encrpt1"]?> 
        <div align="left"></div></TD>
      <TD><IMG HEIGHT="5" WIDTH="<?php echo $SQLrow["encval1"]*100/$SQLrow["enctot"]?>%" SRC="imagenes/barra1.gif"></TD>
      <TD ALIGN="center" WIDTH="14%"><?php echo $SQLrow["encval1"]?> votos</TD>
    </TR>
    <TR> 
      <TD ALIGN="left"><?php echo $SQLrow["encrpt2"]?> 
        <div align="left"></div></TD>
      <TD><IMG HEIGHT="5" WIDTH="<?php echo $SQLrow["encval2"]*100/$SQLrow["enctot"]?>%" SRC="imagenes/barra2.gif"></TD>
      <TD ALIGN="center"><?php  echo $SQLrow["encval2"]?> votos</TD>
    </TR>
    <TR> 
      <TD ALIGN="left"><?php  echo $SQLrow["encrpt3"]?> 
        <div align="left"></div></TD>
      <TD><IMG HEIGHT="5" WIDTH="<?php echo $SQLrow["encval3"]*100/$SQLrow["enctot"]?>%" SRC="imagenes/barra3.gif"></TD>
      <TD ALIGN="center"><?php  echo $SQLrow["encval3"]?> votos</TD>
    </TR>
    <TR> 
      <TD ALIGN="left"><?php  echo $SQLrow["encrpt4"]?> 
        <div align="left"></div></TD>
      <TD><IMG HEIGHT="5" WIDTH="<?php  echo $SQLrow["encval4"]*100/$SQLrow["enctot"]?>%" SRC="imagenes/barra4.gif"></TD>
      <TD ALIGN="center"><?php  echo $SQLrow["encval4"]?> votos</TD>
    </TR>
  </TABLE>
  <P ALIGN="center">Total de votos emitidos: <?php echo $SQLrow["enctot"]?></P> 

