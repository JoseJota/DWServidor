<?php
    $directory="img";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
            echo '<img src="'.$directory."/".$archivo.'">'."\n";
    }
    $dirint->close();
?>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

<br>
<a href="./upload.php">Ir a subir imágenes</a>


</body>
</html>