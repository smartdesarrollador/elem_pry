<?php
//RECIBIMOS LA ENTRADA (6 valores)
$DATOS = array(
array('A','B','C','D','E','F'),
array('B','C','D','E','F','G'),
array('C','D','E','F','G','A'),
array('D','E','F','G','A','B'),
array('E','F','G','A','B','C'),
array('F','G','A','B','C','D'),

);
$entradas = count($DATOS);//Contamos las entradas
$valor1="";$valor2="";$valor3="";$valor4="";$valor5="";$valor6="";$valor7="";$resta=0;$salto=0;$linea=0; //Inicializamos valores a cero

//PRIMERA PARTE CALCULAMOS LAS COMBINACIONES POSIBLES.
$combinaciones = 0; $contador =1; $contador2= 1;

while ($contador <=$entradas):
//Combinación escogiendo r usadas
$usadas = $contador;

$diferencia = $entradas - $usadas;
$formula = factorial1($entradas)/((factorial2($usadas)*factorial3($diferencia)));//Combinaciones usando r simbolos
$combinaciones = $combinaciones + $formula; //Para acumular el total de combinaciones posibles

echo "<br><br><*** ";echo $formula;echo " ***>"; //
$contador2=1;$resta=0;$salto=0;

while ($contador2 <= ($formula)):
echo " ".$contador2."-";
//AUTOMATIZAR ESTA PARTE...
if ($contador2 > $entradas) {$resta = $entradas;$salto=1;};
if ($contador2 > 2*$entradas) {$resta = 2*$entradas;$salto=2;};
if ($contador2 > 3*$entradas) {$resta = 3*$entradas;$salto=3;};
if ($contador2 > 4*$entradas) {$resta = 4*$entradas;$salto=4;};
if ($contador2 > 5*$entradas) {$resta = 5*$entradas;$salto=5;};
if ($contador2 > 6*$entradas) {$resta = 6*$entradas;$salto=6;};
if ($contador2 > 7*$entradas) {$resta = 7*$entradas;$salto=7;};

if ($contador==1) { $valor1=$DATOS[$contador2-1][0]; };

if ($contador==2) { $valor1=$DATOS[$contador2-1-$resta][0];
$valor2=$DATOS[$contador2-1-$resta][$salto+1]; };

if ($contador==3) { $valor1=$DATOS[$contador2-1-$resta][0];
$valor2=$DATOS[$contador2-1-$resta][$salto+1];
$valor3=$DATOS[$contador2-1-$resta][$salto+1+1]; };

if ($contador==4) { $valor1=$DATOS[$contador2-1-$resta][0];
$valor2=$DATOS[$contador2-1-$resta][$salto+1];
$valor3=$DATOS[$contador2-1-$resta][$salto+1+1];
$valor4=$DATOS[$contador2-1-$resta][$salto+1+1+1]; };

if ($contador==5) { $valor1=$DATOS[$contador2-1-$resta][0];
$valor2=$DATOS[$contador2-1-$resta][$salto+1];
$valor3=$DATOS[$contador2-1-$resta][$salto+1+1];
$valor4=$DATOS[$contador2-1-$resta][$salto+1+1+1];
$valor5=$DATOS[$contador2-1-$resta][$salto+1+1+1+1]; };

if ($contador==6) { $valor1=$DATOS[$contador2-1-$resta][0];
$valor2=$DATOS[$contador2-1-$resta][$salto+1];
$valor3=$DATOS[$contador2-1-$resta][$salto+1+1];
$valor4=$DATOS[$contador2-1-$resta][$salto+1+1+1];
$valor5=$DATOS[$contador2-1-$resta][$salto+1+1+1+1];
$valor6=$DATOS[$contador2-1-$resta][$salto+1+1+1+1+1]; };


echo $valor1.$valor2.$valor3.$valor4.$valor5.$valor6.$valor7."- ";

$contador2 = $contador2 + 1;
endwhile;

$contador = $contador + 1;
endwhile;

echo "< C= ";echo $combinaciones;echo " >";
echo " <br> ";

//Las funciones afuera del bucle
function factorial1($entradas) {
if ($entradas == 0) return 1;
return $entradas * factorial1($entradas - 1);
}

function factorial2($usadas) {
if ($usadas == 0) return 1;
return $usadas * factorial2($usadas - 1);
}

function factorial3($diferencia) {
if ($diferencia == 0) return 1;
return $diferencia * factorial3($diferencia - 1);
}

?> 