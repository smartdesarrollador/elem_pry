<HTML>
<HEAD>
   <TITLE>Consulta de noticias</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
<?PHP
// Incluir bibliotecas de funciones
   include ("lib/fecha.php");
?>
</HEAD>
<BODY>
<H1>Consulta de noticias</H1>
<?PHP
 // Conectar con el servidor de base de datos
  $con = mysql_connect ("localhost","root","root") or die ("No Conecta al servidor");
 // Seleccionar base de datos
  mysql_select_db ("bdsiste") or die ("No se puede seleccionar la base de datos");
   // Establecer el n�mero de filas por p�gina y la fila inicial
  $num = 3; // n�mero de filas por p�gina
  $comienzo = $_REQUEST['comienzo'];
  if (!isset($comienzo)) $comienzo = 0;
   // Calcular el n�mero total de filas de la tabla
   $instruccion = "select * from noticias";
   $consulta = mysql_query ($instruccion, $con)  or die ("Fallo en la consulta");
   $nfilas = mysql_num_rows ($consulta);
   if ($nfilas > 0)
   {// Mostrar n�meros inicial y final de las filas a mostrar
     print ("<P>Mostrando noticias " . ($comienzo + 1) . " a ");
     if (($comienzo + $num) < $nfilas)
        print ($comienzo + $num);
      else
        print ($nfilas);
     print (" de un total de $nfilas.\n");
      // Mostrar botones anterior y siguiente
         $estapagina = $_SERVER['PHP_SELF'];
         if ($nfilas > $num)
         {
            if ($comienzo > 0)
print ("[ <A HREF='$estapagina?comienzo=" . ($comienzo - $num) . "'>Anterior</A> | ");
            else
               print ("[ Anterior | ");
            if ($nfilas > ($comienzo + $num))
print ("<A HREF='$estapagina?comienzo=" . ($comienzo + $num) . "'>Siguiente</A> ]\n");
            else
               print ("Siguiente ]\n");
         }
         print ("</P>\n");

      }
   // Enviar consulta
    $instruccion = "select * from noticias order by fecha desc limit $comienzo, $num";
   $consulta = mysql_query ($instruccion, $con)  or die ("Fallo en la consulta");
   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>T�tulo</TH>\n");
         print ("<TH>Texto</TH>\n");
         print ("<TH>Categor�a</TH>\n");
         print ("<TH>Fecha</TH>\n");
         print ("<TH>Imagen</TH>\n");
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado['titulo'] . "</TD>\n");
            print ("<TD>" . $resultado['texto'] . "</TD>\n");
            print ("<TD>" . $resultado['categoria'] . "</TD>\n");
            print ("<TD>" . date2string($resultado['fecha']) . "</TD>\n");

            if ($resultado['imagen'] != "")
               print ("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] .
   "'><IMG BORDER='0' SRC='img/ico-fichero.gif' ALT='Imagen asociada'></A></TD>\n");
            else
               print ("<TD>&nbsp;</TD>\n");

            print ("</TR>\n");
         }

         print ("</TABLE>\n");
      }
      else
         print ("No hay noticias disponibles");

// Cerrar conexi�n
   mysql_close ($con);

?>

</BODY>
</HTML>
