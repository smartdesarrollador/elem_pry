<?php
class soporte{ 
  //atributos
  public $titulo; 
  protected $numero; 
  private $precio; 
  //valores la momento de inicializar la clase
  function __construct($tit,$num,$precio){ //la primera propiedad que se ejecuta
          $this->titulo = $tit; 
          $this->numero = $num; 
          $this->precio = $precio; 
         } 
  public function dame_precio_sin_iva(){ 
          return $this->precio; 
         } 
  public function dame_precio_con_iva(){ 
          return $this->precio * 1.16; 
         } 
  public function dame_numero_identificacion(){ 
          return $this->numero; 
         } 
  public function imprime_caracteristicas(){ 
          echo $this->titulo; 
          echo "<br>" . $this->precio ." (IVA no incluido)"; 
         } 
  }
//Como llamamos a la clase
$soporte1 = new soporte("Los Intocables",22,3); 
echo "<b>" . $soporte1->titulo . "</b>"; 
echo "<br>Precio: " . $soporte1->dame_precio_sin_iva() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->dame_precio_con_iva() . " euros";
?>