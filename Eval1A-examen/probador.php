<?php

session_start();
if(!isset($_SESSION['numprobadores'])){
    header('Location:index.php');
/*     header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");  */
}
$numprobadores=$_SESSION['numprobadores'];

/* Si el usuario vuelve al index.php e introduce un número menor de probadores
el programa sigue mostrando los mismos probadores que la primera vez, es decir, no los elimina.
Esto es porque se guardan en la caché, pero no he conseguido solucionarlo. */

if(isset($_GET['accion'])) 
    $accion=$_GET['accion'];
else
    $accion='';



if(isset($_GET['p'])) { 
    $p=$_GET['p'];
}elseif ($accion=''){
    $error='Introduce un numero de probador.';
}


switch($accion){  
    case 's':
        $_SESSION['probador'][$p]++;
        break;
    case 'r':
        if($_SESSION['probador'][$p]>0)
            $_SESSION['probador'][$p]--;
        break;
    case 'x':
        $_SESSION['probador'][$p]=0;
        break;
    case 't':
		for($i=1;$i<=$numprobadores;$i++)
			$_SESSION['probador'][$i]=0;    
}


require 'vista.php';
