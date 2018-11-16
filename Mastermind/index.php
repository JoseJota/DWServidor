<?php
include 'mastermind.php';
$random = new Mastermind();
$codigo=$random->crearCodigo();
print_r($codigo); 
?>