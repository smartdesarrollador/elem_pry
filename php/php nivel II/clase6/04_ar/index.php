<?php
ini_set('display_errors',0);
# tipo = { www, wap, pdf, xls }
if(!$_GET['tipo']){
    $tipo="www";   
}else{
    $tipo=$_GET['tipo'];
}

$browser_cadena=$_SERVER["HTTP_USER_AGENT"];
if($tipo==""){
    if(strripos($browser_cadena,"mozilla")>0){
        $tipo="www";
    }elseif(strripos($browser_cadena,"wap")>0){
        $tipo="wap";
    }
}

include_once('modelo.php');

switch($tipo){
    case 'wap':
        include_once('vista_wap.php');
        break;
    case 'pdf':
        include_once('vista_pdf.php');
        break;
    case 'xls':
        include_once('vista_xls.php');
        break;		
    default:
        include_once('vista_www.php');
        break;
}
?>