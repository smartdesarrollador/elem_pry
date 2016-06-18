<?php
    include 'enlistar.php';
    if(!$_GET){
        $gens = devolverGeneros();
        $ig = 0;
        $pelas = devolverPeliculas();
        $ip = 0;
        $valor = devolverPrecios();
        $iv = 0;
        $stock = devolverStocks();
        $is = 0;
    }else{
        $gens = devolverGeneros();
        $ig = 0;
        $pelas = devolverPeliculasPorGenero($_GET[genero]);
        $ip = 0;
        echo "<br>".$_GET[genero];
        $valor = devolverPrecioPorPelicula($_GET[peli]);
        $iv = 0;
        $stock = devolverStocksPorPelicula($_GET[peli]);
        $is = 0;
    }
?>

<html>
    <head>
        <title>Alquiler/Venta de Peliculas</title>
        <script type="text/javascript">
            function envia_dataG(item){
                  var c = document.getElementById("lstItems2");
                   var url = "index.php?genero="+item.text+"&amp;peli="+c.options[c.selectedIndex].text+"";
                  window.location = url;
            }
            function envia_dataP(item){
                  var c = document.getElementById("lstItems");
                  var url = "index.php?peli="+item.text+"&amp;genero="+c.options[c.selectedIndex].text+"";
                  window.location = url;
            }
        </script>
    </head>
    <body>
        <center>
            <h1>Alquiler/Venta de Peliculas</h1>
            <form action="procesar.php" method="post">

                <br><br>
                Genero:
                    <select id="lstItems" name="lstItems" onchange="envia_dataG(this.options[this.selectedIndex]);">
                    <?php
                        while($gens[$ig]){
                            if($gens[$ig] == $_GET[genero]){
                                echo " <option value='$gens[$ig]' selected='selected'>$gens[$ig]</option>";
                            }else{
                                echo " <option value='$gens[$ig]'>$gens[$ig]</option>";
                            }
                            
                            $ig++;
                        }
                    ?>
                    </select>
                <br><br>
                Peliculas:
                    <select id="lstItems2" name="peliculas" onchange="envia_dataP(this.options[this.selectedIndex]);">
                    <?php
                        while($pelas[$ip]){
                            if($pelas[$ip] == $_GET[peli]){
                                echo " <option value='$pelas[$ip]' selected='selected'>$pelas[$ip]</option>";
                            }else{
                                echo " <option value='$pelas[$ip]'>$pelas[$ip]</option>";
                            }
                            $ip++;
                        }
                    ?>
                    </select>
                <br><br>
                <input type="radio" name="transaccion" value="alquiler" checked="checked" />Alquiler
                <input type="radio" name="transaccion" value="venta"/>Venta
                <br><br>
                Valor: <?php echo $valor[$iv]; ?>
                <br><br>
                Stock: <?php echo $stock[$is]; ?>
                <br><br>
                <input type="submit" value="Grabar" name="grabar" />
            </form>
        </center>
    </body>
</html>
