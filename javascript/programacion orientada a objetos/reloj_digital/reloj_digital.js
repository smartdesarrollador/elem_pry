function reloj(){
	var fecha=new Date();
    var hora=fecha.getHours();
    var min=fecha.getMinutes();
    var seg=fecha.getSeconds();

    var recarga=setTimeout("reloj()",500);

    document.getElementById('print').innerHTML=hora+" : "+min+" : "+seg;
    

}



