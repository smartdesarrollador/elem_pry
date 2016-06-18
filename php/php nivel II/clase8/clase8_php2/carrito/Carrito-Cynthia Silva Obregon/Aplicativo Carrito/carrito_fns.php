<?php
function conectar(){
$cnx=mysql_connect('localhost','root','root') or die ('error al conectar a bd');
mysql_select_db('libros_sc');
//echo $cnx;
}
//************************************
function resumen(){
session_start();
$articulos=$_SESSION[carrito];
$monto=0;

conectar();
foreach($articulos as $isbn=>$cant){
	$art_cant+=$cant;
	$sql="select precio from libros where isbn=$isbn";
	$resultado=mysql_query($sql);
	$monto+=$cant*mysql_result($resultado,0);
}

echo "<head><link href=estilos.css rel=stylesheet type=text/css /></head>";
echo "<table width=100% class=resumen>";

echo "<tr>";
echo "<td width=115>Total Articulos : </td>";
echo "<td width=50>$art_cant</td>";
echo "<td width=*>".session_id()."</td>";
echo "<td width=100 rowspan=2><div align=center><a href=carrito_contenido.php>Ver Carito </a></div></td>";
echo "</tr>";

echo "<tr>";
echo "<td>Monto de Compra : </td>";
echo "<td>$monto</td>";
echo "<td>&nbsp;</td>";
echo "</tr>";
echo "</table>";
}
//************************************
function categorias_mostrar(){
conectar();
$sql="select * from categorias";
$categorias=mysql_query($sql);
echo "<table width=140 class=menu_tabla>";
echo "<tr class=menu_cabecera><td>CATEGORIAS</td></tr>";
while($dato=mysql_fetch_array($categorias)){
echo "<tr>";
echo "<td><a href=cat_contenido.php?cat=$dato[cat_id] target=mainFrame>$dato[cat_nombre]</a></td>";
echo "</tr>";
}
echo "</table>";
}
//************************************
function categoria_contenido($id){
conectar();
$sql="select * from libros where cat_id=$id";
$conjunto=mysql_query($sql);
echo "<table class=categoria_contenido>";
while($libro=mysql_fetch_array($conjunto)){
echo "<tr>";
echo "<td width=150 class=categoria_fila><img src=images/$libro[isbn].jpg></td>";
echo "<td class=categoria_fila><a href=libro_detalle.php?isbn=$libro[isbn]>$libro[titulo]</a></td>";
echo "</tr>";
}
echo "</table>";
}
//************************************
function libro_detalle($isbn){
conectar();
$sql="select * from libros where isbn=$isbn";
$conjunto=mysql_query($sql);
echo "<table class=categoria_contenido>";
while($libro=mysql_fetch_array($conjunto)){
echo "<tr>";
echo "<td width=150 class=categoria_fila><img src=images/$libro[isbn].jpg></td>";
echo "<td class=categoria_fila>";
echo "<ul>";
echo "<li><b>Titulo : </b>$libro[titulo]";
echo "<li><b>Autor : </b>$libro[autor]";
echo "<li><b>Isbn : </b>$libro[isbn]";
echo "<li><b>Precio : </b>$libro[precio]";
echo "<li><b>Descripcion : </b> <br>$libro[descripcion]";
echo "</ul>";
echo "<br>";
echo "<a href=carrito_agregar.php?isbn=$libro[isbn]>Agregar a Carrito</a>";
echo "<br>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
//************************************
function carrito_contenido(){
echo "<form id=form1 name=form1 method=post action=>";
echo "<table width=100% class=carrito_tabla>";
echo "<tr class=carrito_cabecera>";
echo "<td width=7%>img</td>";
echo "<td width=*>Articulo</td>";
echo "<td width=50>Precio</td>";
echo "<td width=30>cantidad</td>";
echo "<td width=60>total</td>";
echo "</tr>";

$articulos=$_SESSION[carrito];
foreach($articulos as $a=>$n){
	$sql="select * from libros where isbn=$a";
	$rpta=mysql_query($sql);
	while($libro=mysql_fetch_array($rpta)){
		echo "<tr>";
		echo "<td><img src=images/$libro[isbn].jpg width=42 height=52/></td>";
		echo "<td>$libro[titulo] ::: ($libro[autor])</td>";
		echo "<td align=right>S/. $libro[precio]</td>";
		echo "<td><input name=$libro[isbn] type=text  align=right size=3 maxlength=3 value=$n ></td>";
		$libros+=$n;
		echo "<td align=right>S/. ".$n*$libro[precio]."</td>";
		$monto+=$n*$libro[precio];
		echo "</tr>";
	}
}
echo "<tr class=carrito_cabecera>";
echo "<td colspan=3>&nbsp;</td>";
echo "<td align=center>$libros</td>";
echo "<td align=center>S/. $monto</td>";
echo "</tr>";
echo "</table>";
echo "</form>";
}
?>