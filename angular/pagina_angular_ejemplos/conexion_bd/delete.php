<?php
$id = $_GET["id"];

$con = mysql_connect("localhost", "root", "");
mysql_select_db("colegio", $con);
mysql_query("DELETE FROM alumno WHERE id = '".$id."'", $con);
mysql_query("commit");
mysql_close($con);
?>