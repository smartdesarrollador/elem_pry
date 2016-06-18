<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 2</title>
<script type="text/javascript" src="jquery.js"></script>
<script>
function realizarProceso(valorCaja1,valorCaja2){
	   var parametros = {
		    "valorCaja1":valorCaja1,
		    "valorCaja2":valorCaja2
	};
	$.ajax({
		
		data:parametros,
		url:'ejemplos_ajax_proceso.php',
		type: 'post',
		beforeSend:function(){
			$("#resultado").html("procesando, espere por favor...");
		},
		success : function(response);
		
	});
	
}

</script>

</head>

<body>
<input type="text" name="caja_texto" id="valor1" value="0">
<input type="text" name="caja_texto" id="valor2" value="0">
<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(),('#valor2').val());return false;  value="Calcula">





</body>
</html>