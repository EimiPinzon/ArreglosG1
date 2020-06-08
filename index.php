<?php

//Array indexado:
$productos=array("arroz","papa","huevos","sal");
print_r($productos);

echo("<br>");


//Array asociativo
$productos2=array("producto1"=>"arroz","producto2"=>"papas","producto3"=>"huevos","producto4"=>"sal");
print_r($productos2);


//Imprimir un solo cajón:
echo($productos["producto1"]);



?>