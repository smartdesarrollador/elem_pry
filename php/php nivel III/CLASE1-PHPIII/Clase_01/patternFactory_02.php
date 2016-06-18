<?php
interface IUser{
  function getName();
}
//Clase con metodos que crean los objetos (Metodos de fabrica)
class User implements IUser{
  public static function Load($id){
        return new User($id);
  }
  public static function Create(){
        return new User( null );
  }
  public function __construct( $id ){
  
  }
  public function getName(){
    return "Jack";
  }
}

//$uo = User::Create();
$uo = User::Load(1);
echo( $uo->getName()."\n" );
?>

