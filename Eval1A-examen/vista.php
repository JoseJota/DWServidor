<html>
    <head>
        <style>
            body{font-face:Verdana}
            .probador {font-size:1.2em;padding:10px;margin:8px;background:#44f;float:left;width:120px;height:140px;color:white}
            .prendas {font-size:3em;padding:10px;}
            .boton{font-weight:bold; background-color:#bbb;border:1px solid;width:20px;height:20px;margin:4px;padding:3px;color:blue}
            .boton a{text-decoration:none}
        </style>
    </head>
    <body>
        <h2>PROBADORES</h2>
<?php
if (isset($error)) echo $error;
?>
        <table border="1"><tr><th>Probador</th><th>Prendas</th><th></th><th>Hora última modificación</th></tr>
 <?php
foreach ($_SESSION['probador'] as $p => $prendas)
{
    echo "<tr><td class=prendas>Probador $p</td><td class=prendas>$prendas</td><td>";
    echo "<span class=boton><a href='?accion=s&p=$p'> + </a></span> ";
    echo "<span class=boton><a href='?accion=r&p=$p'> - </a></span> ";
    echo "<span class=boton><a href='?accion=x&p=$p'> x </a></span> ";
    echo "</td></tr>";
}
?>
        <a href="?accion=t">Vaciar todo</a>
        </table>

    </body>
</html>
