var prog=new Array("html","css","js");

prog.pop(); /*  pop: borra el ultimo valor */

prog.push("php","mysql"); /* push: agrega valores  */

var cadena = prog.join(" : "); /* combierte a array una cadena */

document.write(cadena);