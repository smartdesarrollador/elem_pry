<!-- Como conseguir que un enlace gane o pierda el foco de entarda -->
<html>
<head>
<style type="text/css">
a:active {color: blue}
</style>
<script type="text/javascript">
      function getfocus()
      { document.getElementById('w3s').focus();}    
      function losefocus()
      { document.getElementById('w3s').blur();}
</script>
</head>
<body>
<a id="w3s" href="http://www.google.com">Google.com</a>
  //solo por presentacion
<form>
<input type="button" onclick="getfocus()" value="Toma el foco">
<input type="button" onclick="losefocus()" value="Pierde el foco">
</form>
</body>
</html>