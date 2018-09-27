<!DOCTYPE html>
<?php
$nombre='';
$edad='';
$error=[];
if(isset($_POST['envio'])){

    //Validamos nombre
    if (!isset($_POST['nombre']) or !$_POST['nombre']) {
        $error['nombre']= "Error: el nombre es requerido.";
    } else {
    $nombre=$_POST['nombre'];
        if(strlen($nombre)<3) 
            $error['nombre']='La longitud mínima es de tres caracteres';
        if(is_numeric($nombre))
        $error['nombre']='¿Tienes número de serie?';
        }
        //validamos edad
    if (!isset($_POST['edad']) or !$_POST['edad']){
        $error="Error: La edad es requerida.";
    } else {
        $edad=$_POST['edad'];
        if(($edad>100) or ($edad<1){
            $error['edad']='La edad debe ser entre 1 y 100.';
}
}


        if(!count($error)){
        //Guardaríamos en la BD    
    echo "Registro correcto".$nombre;
    die();
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="ninguncss.css" />
</head>
<body>
<form method="POST">
    <div class="clase1">Nombre de usuario: <input type="text" name="nombre" value="<?=$nombre?>" /> </div>

    <?php if(isset($error['nombre']) )
        echo "<div style='color:red'> $error[nombre]</div>";
    ?>
    
    Edad: <input type="number" name="edad"> <br>

    <?php if(isset($error['edad']) )
        echo "<div style='color:red'> $error[edad]</div>";
    ?>

    Email: <input type="number" name="email"> <br>
    Sexo: <input type="number" name="sexo"> <br>
    Observaciones: <input type="text" name="observaciones"> <br>
    Contraseña deseada: <input type="password" name="contraseña"> <br>

    Acepto las condiciones: <input type="checkbox" name="condiciones">
    <p> <input type="submit" name="envio" value="Enviar" /></p>
</form>
  
</body>
</html>