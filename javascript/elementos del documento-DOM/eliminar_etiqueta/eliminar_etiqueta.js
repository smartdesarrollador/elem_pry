 

 function eliminar(nombre_id) {
                   
      var parrafo = document.getElementById(nombre_id);
      return parrafo.parentNode.removeChild(parrafo); 
     
 }


function load(){
     return eliminar("parrafo2");
}
     