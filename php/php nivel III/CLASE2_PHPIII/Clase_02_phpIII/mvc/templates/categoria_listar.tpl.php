<html>
    <body>
        <table>
            <tr><th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
            <?php foreach ($listado as $ol) {?>
            <tr><td><?php echo $ol->idcategoria?></td>
                <td><?php echo $ol->nombre?></td>
                <td><?php echo $ol->descripcion?></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>