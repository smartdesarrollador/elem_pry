<?php
class MiSingleton{
    private static $instance;
    private function __construct(){
        echo 'Construido!';
    }
    public static function singleton(){
        if (!isset(self::$instance)){
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }
    public function metodo(){
        echo 'the patterns desing singleton!';
    }
    // Evita que el objeto se pueda clonar
    public function __clone(){
        trigger_error('Clonación no permitida.', E_USER_ERROR);
    }
}
//probando
$objMiSingleton = MiSingleton::singleton();
$objMiSingleton->metodo();
echo "<hr>";
$objMiSingleton2 = MiSingleton::singleton();
$objMiSingleton2->metodo();
echo "<hr>";
$objMiSingleton3 = clone $objMiSingleton2;
$objMiSingleton3->metodo();
?>

