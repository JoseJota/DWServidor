<?php


$nombres = ["Ana", "Bernardo", "Carmen"];

$nombres[4]='PEPE';
$nombres[2]='Luis';
$nombres[a]="Carmen";
$nombres[]='Daniel';

$nombres[999999]='Andrea';

if (in_array('Carmen',$nombres)) echo "Carmen is here!";

$datos=[ "44321044R"=>['nombre'=>'Felipe','apellidos'=>'García'],
        "77665477"=>['nombre'=>'Carmen','apellidos'=>'Pérez'] ];
echo'<pre>';
foreach($datos as $dato)
echo '<li>'.$dato['nombre'];

while($dato){
    echo '<li>'.$dato['nombre'];
    $dato=next($datos);
}
print_r($nombres);
