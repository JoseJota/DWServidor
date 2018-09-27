<?php
if(isset($_GET['envío'])){

if (!isset($_GET['nombre']) or !$_GET['nombre']) {
    echo "Error, el nombre es requerido.";
} else {
    $nombre=$_GET['nombre'];
}
echo "Registro completado".$nombre;
die();
}
}
?>