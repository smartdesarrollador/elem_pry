	

    <!DOCTYPE html>
     
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title></title>
     
            <script type="text/javascript">
     
                function load() {
                   
                    //Seleccionar nodo
                    var sel_por_tag = document.getElementsByTagName("p");
                    var sel_por_id = document.getElementById("parrafo1");
     
     
                    //Crear nodo
                    var p = document.createElement('p');
                    var txt = document.createTextNode('Dale me gusta');
                    p.appendChild(txt);
     
                    document.getElementById("cont").appendChild(p);
     
                    //Eliminar nodo
     
                    var parrafo = document.getElementById("parrafo2");
                    parrafo.parentNode.removeChild(parrafo);
     
     
                    //Obtener propiedades de los nodos
     
                    var propiedad = document.getElementById("parrafo1").textContent;
                    alert(propiedad);
     
     
                    //Moificar propiedad
     
                    document.getElementById("parrafo1").textContent = "xxxxxxxxxxxxxxx";
     
                    document.getElementById("parrafo1").setAttribute("style", "color:red");
     
                   
     
                }
     
     
            </script>
     
     
        </head>
     
        <body onload="load()">
     
           <div id="cont">
           
           </div>
           
            <p id="parrafo1">Suscribete a Hackers<strong>hello</strong> web Designer</p>
     
            <p id="parrafo2">Texto al azar</p>
     
     
        </body>
    </html>

