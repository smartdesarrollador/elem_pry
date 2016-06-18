function persona(nombre,edad){
	this.nombre=nombre;
	this.edad=edad;
	this.añoDeNacimiento=nacimiento;
}

function nacimiento(){
	var años=2012 - this.edad;
	return años;
}

var maria= new persona("Maria",27);
var pedro=new persona("Pedro",27);


document.write(maria.nombre + " tiene " + maria.edad + " años."+
	          " Nacio en " + maria.añoDeNacimiento());

