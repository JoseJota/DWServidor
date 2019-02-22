<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=test_buses;host=127.0.0.1';
$user = 'root';
$password = '';


    //Creamos la conexion a la base de datos como objeto y la guardamos en variable
    $dbh = new PDO($dsn, $user, $password);

    /*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>


<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<h2>Autobuses ALSA</h2>
<a class='btn btn-primary' href="alta.php">Alta de viaje</a>

<h3>Viajes Planificados</h3>

<?php
$gsent = $dbh->prepare("SELECT * FROM viajes INNER JOIN asientos ON viajes.id=asientos.viajes_id ");

$gsent->execute();

$resultado = $gsent->fetchAll(PDO::FETCH_OBJ);
echo "<pre>";

?>

<table>


<tr>
      <td>Destino</td>
      <td>Fecha</td>
      <td>Plazas</td>
      <td>Plazas Libres</td>
</tr>

<?php

foreach ($resultado as $index=>$res){
    echo "<tr>";
        echo "<td > ".$res->destino."</td>";
        echo "<td style='text-align:center;'> ".$res->fecha."</td>";
        echo "<td style='text-align:center;'> ".$res->plazas."</td>";
        
    echo "</tr>";
}
?>

</table>
