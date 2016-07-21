//script.js
function msg_load()
{
    document.getElementById("caja").textContent = "Load";
}
 
function msg_click()
{
    document.getElementById("caja").textContent = "Click";
}
 
function msg_dbl_click()
{
    document.getElementById("caja").textContent = "Doble_Click";
}
 
function msg_move()
{
    document.getElementById("caja").textContent = "Entro";
}
 
function msg_out()
{
    document.getElementById("caja").textContent = "Salio";
}
 
 
function tecla(e)
{
    if(window.event)
        keyCode=window.event.keyCode;
    else if(e)
        keyCode=e.which;
 
   if (keyCode == 65)
    {
        alert("Presionaste la letra a");
     }
 
}