<?php

#Codigo Imperativo

$automovil1 = (object)["marca"=>"Mazda", "modelo"=>"BMW"];
$automovil2 = (object)["marca"=>"Renault", "modelo"=>"Duster"];


function mostrar($automovil){
    echo"<p>Este es un $automovil->marca, modelo $automovil->modelo</p>";
}

mostrar($automovil1);
mostrar($automovil2);

?>
