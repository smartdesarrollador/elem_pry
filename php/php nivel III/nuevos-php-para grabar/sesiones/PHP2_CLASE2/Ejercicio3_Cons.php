<HTML LANG="es">
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
<FORM NAME="selecciona" ACTION="Ejercicio3_Cons.php" METHOD="POST">
<P>Mostrar noticias de la categoría:
<SELECT NAME="categoria">
   <OPTION VALUE="Todas" SELECTED>Todas
   <OPTION VALUE="Promociones">Promociones
   <OPTION VALUE="Ofertas">Ofertas
   <OPTION VALUE="Costas">Costas
</SELECT>
<INPUT TYPE="submit" NAME="actualizar" VALUE="Actualizar"></P>
</FORM>

<?PHP
   // Conectar con el servidor de base de datos
   $con = mysql_connect ("localhost","root","root") or die ("No Conecta al servidor");
   // Seleccionar base de datos
      mysql_select_db ("bdsiste") or die ("No se puede seleccionar la BD");
   // Enviar consulta
      $instruccion = "select * from noticias";
      $actualizar = $_REQUEST['actualizar'];
      $categoria = $_REQUEST['categoria'];
      if (isset($actualizar) && $categoria != "Todas")
        $instruccion = $instruccion . " where categoria='$categoria'";
        $instruccion = $instruccion . " order by fecha desc";
        $consulta = mysql_query ($instruccion, $con) or die ("Fallo en la consulta");
   // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<TABLE>\n");
         print ("<TR>\n");
         print ("<TH>Título</TH>\n");
         print ("<TH>Texto</TH>\n");
         print ("<TH>Categoría</TH>\n");
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

// Cerrar conexión
   mysql_close ($con);

?>

</BODY>
</HTML>
