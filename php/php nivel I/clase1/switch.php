<?php
//sentencia de control multiple
$dia_num = 2;
switch ($dia_num){
	case 1: echo "D�a Lunes <br>";break;
    case 2 : echo "D�a Martes <br>";break;
	case 3 : echo "Dia Mi�rcoles <br>";break;
	case 4 : echo "Dia Jueves <br>";break;
	case 5 : echo "Dia Viernes <br>";break;
	case 6 : echo "Dia S�bado <br>";break;
	case 7 : echo "Dia Domingo <br>";break;
	default : echo "Fuera de Rango";
	}
?>