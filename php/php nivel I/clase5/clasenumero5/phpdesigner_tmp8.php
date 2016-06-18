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
            echo 'Items ordenadas: '.$totalcan.'<br />';
            echo "<hr>";
            $total = 0.00;
            $total = $llantascan * LLANTASPRECIO + $aceitecan * ACEITEPRECIO
	                + $aroscan * AROSPRECIO;
           echo 'Subtotal: S/. '.number_format($total,2).'<br />';
           $IGV = 0.19;  // impuesto a las ventas 19%
           $total = $total * (1 + $IGV);
           echo 'Total incluido IGV: S/. '.number_format($total,2).'<br />';
           echo "<hr>";
         }
	?>
	</body>
</html>






