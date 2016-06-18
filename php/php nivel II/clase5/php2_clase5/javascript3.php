<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 8</title>
	<script language="javascript">
	function twoframes(){
       document.all("frames1").src="javascript1.php";
       document.all("frames2").src="javascript2.php";
	}
		
	
	
	</script>
</head>

<body>

<iframe src="comparacion.php" name="frames1"></iframe>
<iframe src="capicua.php" name="frames2"></iframe>
<br>
<form >
<input type="button" value="cambiar el url de los dos iframes" onclick="twoframes()">

</form>



</body>
</html>