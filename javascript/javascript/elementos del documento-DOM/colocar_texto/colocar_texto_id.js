
function colocar_texto_id(nombre_nodo, texto){
    return document.getElementById(nombre_nodo).innerHTML=texto;

}




function texto(){

     var texto="hola mundo";
     
     return colocar_texto_id("demo",texto);
    

}


