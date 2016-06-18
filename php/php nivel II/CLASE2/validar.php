<?php

session_start();
$a= $_POST['txt_user'];
$b=$_POST['txt_pass'];
if ($a=="php" and $b=="2011") {
	$_SESSION['acceso']='ok';
	$_SESSION['usuario']=$a;
	header('location:p01.php');
}
 else
 {
	session_destroy();
	header('location:login.html');
	}


?>