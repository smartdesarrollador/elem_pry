<html>

<head>
	

	<title>Untitled 2</title>
</head>

<body>
<?php
session_start();
echo $_SESSION['var_01']."<br>";
echo $_SESSION['var_02']."<br>";
echo $_SESSION['entero']."<br>";
echo $_SESSION['decimal']."<br>";
echo $_SESSION['arreglo']['peru']."<br>";
echo $_SESSION['arreglo']['chile']."<br>";
echo $_SESSION['boleano']."<br>";


?>
</body>
</html>