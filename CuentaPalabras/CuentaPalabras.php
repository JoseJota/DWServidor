<?php

$fichero=[];

if(isset($_FILES) && isset($_FILES['fichero'])){
    $ruta=$_FILES['fichero']['tmp_name']; //ruta temporal donde está el fichero
    //echo file_get_contents($ruta);
    $nombre=$_FILES['fichero']['name'];
    move_uploaded_file($ruta, 'ficheros/'.$nombre);

    $contenidoString=file_get_contents('ficheros/'.$nombre);
    $contenidoArray=file('ficheros/'.$nombre);

echo str_word_count($contenidoString);

var_dump($contenidoArray);

//USAR EXPLODE PARA PASAR DE UN STRING A UN ARRAY CON CADA PALABRA
}

?>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

<div class="redi">

<form  method="post" enctype="multipart/form-data">
    <input type="file" name="fichero">
    <input type="submit" value="Enviar" name="enviar">
</form>
</div>
<br>
<a href="./visualizar.php">Visualizar</a>


</body>
</html>
