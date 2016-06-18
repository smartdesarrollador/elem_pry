<html>
	<head>
	  <title>Contrabando Auto Parts - Resultado de la	Orden</title>
	</head>
	<body>
	<?php
      // Declarando variables
         $llantascan = $_POST['llantascan'];
         $aceitecan = $_POST['aceitecan'];
         $aroscan = $_POST['aroscan'];
         $buscar = $_POST['buscar'];
         //declaracion de constantes
         define('LLANTASPRECIO', 180);
         define('ACEITEPRECIO', 15);
         define('AROSPRECIO', 70);
   ?>
	<h1>Contrabando Auto Parts</h1>
	<h2>Resultado de la Orden</h2>
	<?php
	    $totalcan = 0;
		echo '<p>Orden Procesada a las ';
        echo date('H:i, jS F');
        echo '<hr>';
        echo'<p>Su Orden es la siguiente: </p>';
        $totalcan = $llantascan + $aceitecan + $aroscan;
        if( $totalcan == 0)
	      {  echo 'Usted no ha escogido ninguna cantidad....! <br />'; }
	    else
	      { if ( $llantascan>0 ) echo $llantascan.' Llantas<br />';
   	        if ( $aceitecan>0 )  echo $aceitecan.' Botellas de Aceite<br />';
  	        if ( $aroscan>0 )    echo $aroscan.' Aros<br />';
  	        if($buscar == 'a') echo '<p>Cliente Regular.</p>';
   	        elseif($buscar == 'b') echo '<p>Cliente se entero por TV.</p>';
 	        elseif($buscar == 'c') echo '<p>Cliente se entero por Telefono.</p>';
  	        elseif($buscar == 'd') echo '<p>Cliente se entero por un Amigo.</p>';
  	        else echo '<p>No conocemos como este cliente se ha enterado.</p>';

            echo 'Items ordenadas: '.$totalcan.'<br />';
            echo "<hr>";
            $total = 0.00;
            $total = $llantascan * LLANTASPRECIO + $aceitecan * ACEITEPRECIO
	                + $aroscan * AROSPRECIO;
           echo 'Subtotal: S/. '.number_format($total,2).'<br />';
           $IGV = 0.19 * $total;  // impuesto a las ventas 19%
           echo "IGV: S/. ".number_format($IGV,2).'<br />';
		   $total = $total + $IGV;
           echo 'Total incluido IGV: S/. '.number_format($total,2).'<br />';
           echo "<hr>";
           //Almacenar en una cadena
           $cad= "\n\t".$llantascan." llantas \t".$aceitecan." aceite\t"
                  .$aroscan." aros\t\$".$total."\t\n";
           // Abrir archivo
           @ $fp = fopen("c:\orders.txt", 'ab');
           // si No puede Abrir
           if (!$fp)
             { echo '<p><strong> Proceso de Abrir Archivo no lo puede Hacer....'
                 .'Por Favor Intentelo Luego.....</strong></p></body></html>';
               exit;   } 
           //en caso de que todo sea correcto
           fwrite($fp, $cad, strlen($cad));
           //cerrar el archivo   
		   fclose($fp);
          echo '<p>Orden Grabada.</p>'; 
         }
	?>
	</body>
</html>






