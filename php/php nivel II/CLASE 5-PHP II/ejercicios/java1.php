<!-- seleccionar texto de un cuadro de texto y darle el foco.-->
<html>
 <head>
     <script type="text/javascript">
	 function setfocus()
	  {
		document.forms[0].txt.select();
		document.forms[0].txt.focus();
	}
</script>
 </head>
<body>
<form>
<b>Nombre:</b>
<input type="text" name="txt" size="30" value="¡Hola!"><br>
<input type="button" value="Seleccionatexto" onclick="setfocus()">
</form>
</body>
</html>