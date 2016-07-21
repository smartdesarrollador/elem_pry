function persona(nombre,edad){
	this.nombre=nombre;
	this.edad=edad;
}

var marcos=new persona("Marcos",21);
var juan=new persona("Juan",35);


document.write(marcos.nombre+"<br/>");

document.write(juan.edad+"<br/>");