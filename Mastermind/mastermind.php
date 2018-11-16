<?php
class Mastermind{

    function crearCodigo(){
        for ($i=0; $i < 4 ; $i++) { 
            $random[0] = rand(1,6);
            $random[1] = rand(1,6);
            $random[2] = rand(1,6);
            $random[3] = rand(1,6);
        }
        return $random;

    }
}
?>