<html>
<head>
<title>Ejemplo sencillo de AJAX</title>
	<script type="text/javascript" src="jquery.js"></script>
	 
	<script>
	function realizaProceso(valorCaja1, valorCaja2){
	        var parametros = {
	                "valorCaja1" : valorCaja1,
	                "valorCaja2" : valorCaja2
	        };
	        $.ajax({
	                data:  parametros,
	                url:   'ejemplo_ajax_proceso.php',
	                type:  'POST',
	                beforeSend: function () {
	                        $("#resultado").html("Procesando, espere por favor...");
	                },
	                success:  function (response) {
	                        $("#resultado").html(response);
	                }
	        });
	}
</script>
</head>
<body>
<input type="text" name="caja_texto" id="valor1" value="0"/>
<input type="text" name="caja_texto" id="valor2" value="0"/>
<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
<br/>
<span id="resultado">0</span>

</body>
</html>