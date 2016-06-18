<html>

<head>
<title>Untitled 2</title>

</head>

<body>

<?php




function doble($n){
$doble=$n*2;
return $doble;
}
?>

<table border=1 >
<tr>
	<td>el numero doble es :</td>
	<td><?php echo " ".doble($_POST["numero"])." "; ?></td>
</tr>
</table>
</body>
</html>