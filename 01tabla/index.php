<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Tablas de Multiplicar</title>
    <script src="main.js"></script>

    <style>
    .numero{
        background: #dead00;
        padding: 15px;
        margin: 3px;
    }
    </style>
</head>
<body>
<h1>Tablas de Multiplicar</h1>
    <?php
     for ($n=2; $n < 10; $n++) { 
        echo "<a href='?tabla=$n'><span class=numero>$n</span></a>";
    } 

    if (isset($_GET['tabla'])){
        $tabla=$_GET['tabla'];


    ?>

<h2>Tabla del <?=$tabla?></h2>

<?php
for ($i=1; $i < 11 ; $i++) { 
    //echo $tabla." × ".$i." = ".$tabla*$i;
    
    printf("<br>%d × %d = %d ", $tabla,$i,$tabla*$i);
}

echo "<br><br><br><br><br> <a href='practicar.php?tabla=$tabla' class=numero> Practicar tabla<a>";
}
?>


</body>
</html>