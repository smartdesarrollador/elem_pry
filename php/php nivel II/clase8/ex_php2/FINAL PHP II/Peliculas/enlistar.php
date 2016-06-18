<?php
    include 'conexion.php';

    function devolverGeneros(){
        $SQLid = conectar();

        $query = "SELECT nombreGenero FROM genero";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $generos;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $generos[$indice] = $row['nombreGenero'];
            $indice++;
        }
        return $generos;
    }

    function devolverPeliculas(){
        $SQLid = conectar();

        $query = "SELECT nombrePelicula FROM pelicula";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $pelas;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $pelas[$indice] = $row['nombrePelicula'];
            $indice++;
        }
        return $pelas;
    }

    function devolverPrecios(){
        $SQLid = conectar();

        $query = "SELECT precioVenta FROM pelicula";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $val;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $val[$indice] = $row['precioVenta'];
            $indice++;
        }
        return $val;
    }

    function devolverStocks(){
        $SQLid = conectar();

        $query = "SELECT stockPelicula FROM pelicula";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $val;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $val[$indice] = $row['stockPelicula'];
            $indice++;
        }
        return $val;
    }

    function devolverPeliculasPorGenero($genero){
        $SQLid = conectar();

        $query = "SELECT nombrePelicula FROM pelicula WHERE generoPelicula='$genero'";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $pelas;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $pelas[$indice] = $row['nombrePelicula'];
            $indice++;
        }
        return $pelas;
    }

    function devolverPrecioPorPelicula($peli){
        $SQLid = conectar();

        $query = "SELECT precioVenta FROM pelicula WHERE nombrePelicula='$peli'";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $pelas;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $pelas[$indice] = $row['precioVenta'];
            $indice++;
        }
        return $pelas;
    }

    function devolverStocksPorPelicula($peli){
        $SQLid = conectar();

        $query = "SELECT stockPelicula FROM pelicula WHERE nombrePelicula='$peli'";
        $result = mysql_query($query, $SQLid) or die ("Error en la consultaaa");
        $pelas;
        $indice = 0;
        while($row = mysql_fetch_array($result)){
            $pelas[$indice] = $row['stockPelicula'];
            $indice++;
        }
        return $pelas;
    }
?>
