var cadena = "Suscribete a ";
var cadena2 ="hackers web Designer";

var cadena3 =cadena + cadena2 + "<br>";

document.write(cadena3);

document.write(cadena3.length + "<br>");

document.write(cadena.substring(0,10) + "<br>");

document.write(cadena.indexOf("Suscribete")+ "<br>");

document.write(cadena3.toLowerCase() + "<br>");

document.write(cadena3.toUpperCase() + "<br>");

var text ="hola";
var text2 ="hola";

if(text == text2){
	document.write("son iguales<br><br>");
}

var numeros="uno,dos,tres,cuatro,cinco";

var array=numeros.split(",");

for(i=0;i<array.length;i++){
	document.write("El elemento" + i + "es" + array[i] + "<br>");
	
}

