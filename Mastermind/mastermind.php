<?php
class Mastermind{
    function crearCodigo(){
/*         for ($i=0; $i < 4 ; $i++) { 
            $random[$i] = rand(1,6);
        }
        return $random; */

        $random=range(1, 6);
        shuffle($random);
        $random = array_slice($random, 2);
    
        return $random;
    }
}
?>