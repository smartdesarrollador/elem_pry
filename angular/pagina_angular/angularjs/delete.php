<?php
$data = json_decode(file_get_contents("php://input"));
$email = mysql_real_escape_string($data->email);

$con = mysql_connect("localhost", "root", "");
mysql_select_db("crud_angular", $con);
mysql_query("DELETE FROM usuario WHERE email = '".$email."'", $con);
mysql_query("commit");
mysql_close($con);
?>