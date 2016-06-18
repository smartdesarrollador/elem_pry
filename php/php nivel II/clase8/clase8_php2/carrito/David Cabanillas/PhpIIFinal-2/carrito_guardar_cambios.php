<?php
session_start();
$articulos=$_SESSION[carrito];
//echo "llego";
if(isset ($_POST['enviar'])){
    $cant = 1;
    $input = "txt".$cant;
    while($_POST[$input]){
        if(is_array($articulos)){

               foreach($articulos as $a=>$n){
                        $sql="select * from libros where isbn=$a";
                        $rpta=mysql_query($sql);
                        while($libro=mysql_fetch_array($rpta)){
                                echo "<tr>";
                                echo "<td><img src=images/$libro[isbn].jpg width=42 height=52/></td>";
                                echo "<td>$libro[titulo] ::: ($libro[autor])</td>";
                                echo "<td align=right>S/. $libro[precio]</td>";
                                echo "<td><input name='txt$indtxt' type=text  align=right size=3 maxlength=3 value=$n ></td>";
                                echo '<input type="hidden" name="libroid" value="'.$libro[id].'" />';
                                $libros+=$n;
                                $indtxt++;
                                echo "<td align=right>S/. ".$n*$libro[precio]."</td>";
                                $monto+=$n*$libro[precio];
                                echo "</tr>";
                        }
                }


                if($articulos[$cant]!=""){
                        $articulos[$cant]=$_POST[$input];
                }else{
                        $articulos[$cant]=1;
                }
        }else{
                $articulos[$cant]=1;
        }
//        echo "<br>valor de ".$input." es = ".$_POST[$input];
        $cant++;
        $input = "txt".$cant;
    }
}
$_SESSION[carrito]=$articulos;
header('location:carrito_contenido.php');
?>