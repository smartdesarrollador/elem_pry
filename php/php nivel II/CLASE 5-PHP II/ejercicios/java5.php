<!-- generar un relog de intervalo de segundos -->
<html>
<head>
<script language="javascript">
var intval=""
function start_Int()
{  if(intval=="")
{ intval=window.setInterval("start_clock()",1000); }
else
{ stop_Int(); }
   }
function stop_Int()
{  if(intval!="")
{ window.clearInterval(intval);
intval="";
document.formu.tiempo.value="Tiempo detenido"; }
}
function start_clock()
{  var d=new Date();  varsw="am";
var h=d.getHours();  var m=d.getMinutes() + "";
var s=d.getSeconds() + "";
	if(h>12)
{  h-=12; sw="pm";  }
if(m.length==1)
{  m="0" + m;  }
if(s.length==1)
{  s="0" + s;  }
document.formu.tiempo.value=h + ":" + m + ":" + s + " " + sw;
    }
</script>
</head>
<body>
<form id="formu" name="formu">
<input type="text" name="tiempo" value="Tiempoparado">
</form>
<input type="button" value="Empezar" onclick="start_Int()">
<input type="button" value="Parar" onclick="stop_Int()">
<p>Este ejemplo actualiza el contenido del cuadro
de texto cada segundo. 
  Pulsa "Empezar" para iniciar la funci�n setInterval.
Pulsa "Parar" para detener el tiempo con la funci�n clearInterval.
</p>
</body>
</html>
