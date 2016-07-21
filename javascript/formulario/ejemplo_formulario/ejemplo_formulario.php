	

    <!DOCTYPE html>
     
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title></title>
                     
           
       
            <style type="text/css">
               
           
            #center {
                    position: absolute;
                    top:0;
                    left:0;
                    right:0;
                    bottom:0;
                    margin: auto;
                    background: #e3dfdf;
                    height: 150px;
                    width: 250px;
                   
                    }
               
                label input select
                {
                  display: block;
                }
               
               
                div label
                {                  
                    width: 35%;                  
                    float: left;
                }
               
               
    </style>
     
     
            <script type="text/javascript">
     
                function validar() {
                    var nombre = document.getElementById("nom").value;
     
     
                    alert(nombre);
     
                    document.getElementById("nom").value = "Valor modificado";
     
                    document.getElementById("dir").focus();
                }
            </script>
     
        </head>
     
        <body>
     
           <div id="center">
     
               <form>
               
                   <label>Nombre</label>
                   <input type="text" id="nom">
     
                   <label>Direccion</label>
                   <input type="text" id="dir">
     
                   <label>Correo</label>
                   <input type="text" id="cor">
     
                   <label>Edad</label>
                   <input type="number" id="num">
     
                   <label>&nbsp;</label>
                   <input type="button" id="boton" value="Enviar" onclick="validar()">
     
               </form>
               
            </div>
     
     
        </body>
    </html>

