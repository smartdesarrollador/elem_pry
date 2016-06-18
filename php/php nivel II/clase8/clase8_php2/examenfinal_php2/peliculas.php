
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="Tran Nhat Thanh">

	<title>Untitled 4</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
	/*$('document').ready(function(){
		$('#opcion').click(
		var $form=$(this).serialize();
		$.get('actualizar.php',$form,procesar);
		
		function procesar(data){
			$('#actualizar').prepend(data);
		}
		
		
		
		);
		
});*/
	
function realizaProceso(valorCaja1, valorCaja2){
        var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
        };
        $.ajax({
                data:  parametros,
                url:   'actualizar.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#actualizar").html(response);
                }
        });
}

</script>
</head>

<body>


<h1>ALQUILER/VENTAS PELICULAS</h1>

<label for="so">GENERO :</label>
 <select id="genero" name="genero">
   <option value="" selected="selected"  >SELECCIONAR GENEROS</option>
   <option value="1">accion</option>
   <option value="2">comico</option>
   <option value="3">terror</option>
   <option value="4">ficcion</option>
   
 
 </select><br><br>
 
 <label for="so">PELICULAS :</label>
 <select id="peliculas" name="peliculas">
   <option value="" selected="selected"  >SELECCIONAR PELICULAS</option>
   <option value="1">RAMBO</option>
   <option value="2">MI POBRE ANGELITO</option>
   <option value="3">LA PROFECIA</option>
   <option value="4">BATMAN</option>
   
 
 </select><br><br>
 
 <input type="radio" name="opcion" value="Alquiler" class="opcion"/>Alquiler
  <input type="radio" name="opcion" value="Pelicula" class="opcion"/>Pelicula<br><br>
 
 <label >VALOR :</label>
 <input type="text" size="10" name="valor" /><br><br>
 
<input type="button" href="javascript:;" onclick="realizaProceso($('#genero').val(), $('#peliculas').val());return false;" value="grabar"/>
 
 <div id="actualizar"></div>

 
 
 
</body>
</html>