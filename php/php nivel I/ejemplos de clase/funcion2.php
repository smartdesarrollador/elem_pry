<?php

function imprime($texto) {
		echo $texto . "\n";
	}

	function imprimeNegrilla($texto){
		echo "<B>$texto</B>\n";
	}

$MiFunc = "imprime";
$MiFunc("Hola");

imprime("mundo");  //imprimirá Hola

$MiFunc = "imprimeNegrilla";
$MiFunc("Hola");  //imprimirá Hola




?>