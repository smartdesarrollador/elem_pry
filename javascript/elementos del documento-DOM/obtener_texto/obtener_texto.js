function obtener_texto(nombre_id){
	var texto = document.getElementById(nombre_id).textContent;
     return  texto;          
}


function load(){
	var contenido=obtener_texto("parrafo2");

	alert(contenido);
}