<?php
    include 'conexion.php';
    if(isset ($_POST['grabar'])){
        $peli = $_POST['peliculas'];
        echo "<br> pela: ".$peli."<br>";
        $SQLid = conectar();

        $query = "SELECT stockPelicula FROM pelicula WHERE nombrePelicula='$peli'";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa1");
        $cant;
        while($row = mysql_fetch_array($result)){
            $cant = $row['stockPelicula'];
        }

        $cant--;

        $query = "UPDATE pelicula SET stockPelicula=$cant WHERE nombrePelicula='$peli'";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa2");

        echo "Se ha realizado la transaccion correctamente<br>";
        echo "<a href='index.php'>Volver</a>";
    }
?>
