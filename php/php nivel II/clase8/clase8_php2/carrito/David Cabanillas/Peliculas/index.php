<?php
    include 'enlistar.php';
    $gens = devolverGeneros();
    $ig = 0;
    $pelas = devolverPeliculas();
    $ip = 0;
    $valor = devolverPrecios();
    $iv = 0;
    $stock = devolverstocks();
    $is = 0;
?>

<html>
    <head>
        <title>Alquiler/Venta de Peliculas</title>
        <script type="text/javascript">
            function selectChanged(item) {
                alert("Item " + item.text + " (valor es: " + item.value + ")\n Falta reconocer el cambio automatico de pelicula cuando se cambie el genero.");
            }
        </script>
    </head>
    <body>
        <center>
            <h1>Alquiler/Venta de Peliculas</h1>
            <form action="procesar.php" method="post">

                <br><br>
                Genero:
                    <select id="lstItems" name="lstItems" onchange="selectChanged(this.options[this.selectedIndex]);">
                    <?php
                        while($gens[$ig]){
                            echo " <option value=$ig>$gens[$ig]</option>";
                            $ig++;
                        }
                    ?>
                    </select>
                <br><br>
                Peliculas:
                    <select name="peliculas">
                    <?php
                        while($pelas[$ip]){
                            echo " <option value=$ip>$pelas[$ip]</option>";
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
