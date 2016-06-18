<?php

final  class CategoriaVO
{
    public  $idCategoria;
    public  $nombre;
    public  $descripcion;

    public function __construct($c,$n,$d) {
        $this->idCategoria=$c;
        $this->nombre=$n;
        $this->descripcion=$d;
    }

}
?>
 