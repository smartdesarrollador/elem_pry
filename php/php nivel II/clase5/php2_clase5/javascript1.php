<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 3</title>
	<script type="text/javascript">
	function setfocus(){
		document.forms[0].txt.select();
		document.forms[0].txt.focus();
	}
	
	</script>
</head>
<form>
<body>
<b>nombre:</b>
<input type="text" value="!hola!" size="30" name="txt" >
<input type="button" value="seleccionatexto" onclick="setfocus()">
</form>


</body>
</html>