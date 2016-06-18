
var variable_global="variable de acceso global";

function local(){
    var variable_local="variable de acceso local";
	
	document.write(variable_local+"<br/>");
	document.write(variable_global+"<br/>");
}

local();

document.write("llamando de nuevo a la "+variable_global+"<br/>");



