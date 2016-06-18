<?php
$cnx=mysql_connect('localhost','root','root');
mysql_select_db('php_mvc');
$sql="select id,alupat,alumat,alunom from alumnos";
$datos=mysql_query($sql);
if(mysql_num_rows($datos)>0){
	while($fila=mysql_fetch_row($datos)){
		$rpta[]=$fila;
	}
}
?>
<? xml version="1.0" ?> 
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN" "http://www.wapforum.org/DTD/wml_1.1.xml"> 

<wml> 
<card id="t1" title="Tablas"> 
<p> 
<table columns="3"> 
    <tr>
        <td>Itm</td>
        <td>Pat</td>
        <td>Mat</td>
    </tr>
<?php foreach($rpta as $ind=>$val){ ?>
    <tr>
        <td><?php echo $val[0]?></td>
        <td><?php echo $val[1]?></td>
        <td><?php echo $val[2]?></td>
    </tr>
<?php }?>
</table>
</p> 
</card> 
</wml>