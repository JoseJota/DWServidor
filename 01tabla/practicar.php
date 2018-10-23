<?php

if(!isset($_GET['tabla']))
    die("Costa");
    
    $tabla=$_GET['tabla'];

    echo "<h3>Practicando la tabla del $tabla</h3>";

    if(isset($_GET['numero'])&& isset($_GET['resultado'])){
        $numero=$_GET['numero'];
        $resultado=$_GET['resultado'];
        if($numero*$tabla==$resultado){
            echo "<h3>Correcto!</h3>";
            echo "<a href='?tabla=$tabla'>Probar otro numero</a> <br>";
            echo "<a href='index.php?tabla=$tabla'>Home</a>";
            die;
        } else {
            echo "<h3>Te has esquivocado. </h3>";
        }

    }
    if(!isset($numero))
        $numero=rand(1,9);


?>
<form>
<?=$tabla?> x <?=$numero?> = <input name=resultado size=2>
<input type=submit>
<input type=hidden name=numero value=<?=$numero?>>
<input type=hidden name=tabla value=<?=$tabla?>>

</form>
