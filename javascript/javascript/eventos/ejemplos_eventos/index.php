<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
       
        <style type="text/css">
            #caja
            {
                position: absolute;
                top: 20%;
                left: 30%;
                width: 400px;
                height: 100px;
               
                background-color: #efeaea;
                text-align: center;
                font-size: 50px;
               
            }
        </style>
 
       
        <script type="text/javascript" src="Script.js"></script>
       
 
 
    </head>
 
    <body onload="msg_load()" onunload="alert('Estas saliendo de la pagina')">
 
        <div id="caja" onclick="msg_click()" ondblclick="msg_dbl_click()" onmouseover="msg_move()" onmouseout="msg_out()" >Eventos</div>
 
        <input type="text" onkeydown="tecla('event')">
       
 
    </body>
</html>