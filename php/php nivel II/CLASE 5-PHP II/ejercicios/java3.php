<!-- como actualizar dos iframes al mismo tiempo.-->
<html>
<head>
<script language="javascript">
function twoframes()
  {
	document.all("frame1").src="ejemplo6.php";
	document.all("frame2").src="ejemplo7.php";
}
</script>
</head>
<body>
<iframe src="ejemplo1.php" name="frame1"></iframe>
<iframe src="ejemplo2.php" name="frame2"></iframe>
<br>
<form>
<input type="button" onclick="twoframes()"
 value="Cambiar la URL de los dos iframes">
</form>
</body>
</html>