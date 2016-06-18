<?php
//Clase constructora abstracta
interface IUser{
  function getName();
}
//Implementando IUser
class User implements IUser{
  public function __construct($id){
  
  }
  public function getName(){
    return "Jack";
  }
}
//Clase fabrica que crea los objectos IUser
class UserFactory{
  public static function Create($id){
    return new User($id);
  }
}
//Implementando
$uo = UserFactory::Create(1);
echo($uo->getName()."\n");
?>

