<?php

final  class CategoriaVO
{
    public  $idcategoria;
    public  $nombre;
    public  $descripcion;

    public function __construct($c,$n,$d) {
        $this->idcategoria=$c;
        $this->nombre=$n;
        $this->descripcion=$d;
    }

}
?>
 