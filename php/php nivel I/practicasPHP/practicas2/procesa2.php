<html>
	<head>
		<title>Ejemplo de PHP</title>
	</head>
	<body>
	<H1>Ejemplo de procesado de formularios</H1>
	El nombre que ha introducido por GET es: <?php echo $_GET['nombre']," ",$_GET['apellidos'] ?><br>
	El nombre que ha introducido por POST es: <?php echo $_POST['nombre']," ",$_POST['apellidos'] ?>
	<br>
	</body>
	</html>