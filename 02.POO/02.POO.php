<?php

class Automovil{

    public $marca;
    public $modelo;

    public function mostrar(){
        echo "<p> Este es un $this->marca, modelo $this->modelo</p>";
    }
}
$a = new Automovil();
$a -> marca = "Mazda";
$a -> modelo = "BMW";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Renault";
$b -> modelo = "Duster";
$b -> mostrar();

?>
