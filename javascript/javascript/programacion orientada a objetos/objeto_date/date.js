var fecha=new Date();
var año=fecha.getFullYear();
var dia=fecha.getDay();
var hora=fecha.getHours();


 
document.write("----------get------------<br>");
document.write(fecha+"<br>");
document.write(año+"<br>");
document.write(dia+"<br>");
document.write(hora+"<br>");

/*   

------------------------------------------
*/

var fecha2=new Date();

fecha2.setFullYear(1990);
fecha2.setDate(25);

document.write("----------set------------<br>");

document.write(fecha2+"<br>");