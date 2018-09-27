<?php
$boletos="boletos.txt";
$ganadora=['2','3','6','23','40','32'];


$aciertos=[5=>0, 6=>0];
foreach ($boletos as $boleto){
    echo $boleto;
    //separar el string en codigo, numeros
    //separar los números a un array
    //$numeros= // ['2','3','6','23','40','32']
    //Comparamos $numeros con ganadora y calculamos numacertados
    //si numacertados>=5 incrementamos $aciertos[numacertados] y lo mostramos
}
//mostramos totales de 5 y de 6 aciertos
?>