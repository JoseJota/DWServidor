<?php

$fichero=[];
if(isset($_FILES) && isset($_FILES['fichero'])){
    $ruta=$_FILES['fichero']['tmp_name']; //ruta temporal donde está el fichero
    //echo file_get_contents($ruta);
    $nombre=$_FILES['fichero']['name'];
    move_uploaded_file($ruta, 'ficheros/'.$nombre);

    $contenidoString=file_get_contents('ficheros/'.$nombre);
    //$contenidoArray=file('ficheros/'.$nombre);

//print_r(str_word_count($contenidoString, 1, 'àáãç3'));

$todasPalabras = str_word_count($contenidoString, 1, 'àáãç3');



$frecuencia = []; 

foreach($todasPalabras as $palabras){
    if(isset($frecuencia[$palabras])){
        $frecuencia[$palabras]++;
    }else{
        $frecuencia[$palabras]=1;
    }
}
?>

<table border=1><tr><th>Palabra</th><th>Frecuencia</th></tr>

<?php



foreach($frecuencia as $palabras=>$frecuencia){
    echo "<tr><td>".$palabras."</td>";
    echo "<td>".$frecuencia."</td></tr>";
}
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


</body>
</html>
