<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 4</title>
	<style type="text/css">
	a:active {color:blue;}
	
	</style>
	<script type="text/javascript">
	function getfocus(){
		document.getElementById('w3s').focus();}
	
	function losefocus(){
		document.getElementById('w3s').blur();
	}
		
	
	
	</script>
</head>

<body>

<a id="w3s" href="http://www.google.com">Google.com</a>
<form >
<input type="button"  onclick="getfocus()" value="toma el foco" >
<input type="button" onclick="losefocus()" value="pierde el foco">

</form>



</body>
</html>