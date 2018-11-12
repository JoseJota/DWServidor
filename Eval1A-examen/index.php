<?php
session_start();
if(isset($_POST['numprobadores'])){
	$_SESSION['numprobadores']=$_POST['numprobadores'];
	for($i=1;$i<=$_POST['numprobadores'];$i++)
        $_SESSION['probador'][$i]=0;
	header('Location:probador.php');
/* 	header("Cache-Control: no-cache, must-revalidate"); 
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); */
}
?>
<html>
<body>
<h2>Control de Probadores</h2>
	<form method=post>
		Número de probadores:
		<input name=numprobadores size=2>
		<input type=submit value=Enviar>
	</form>
</body>
</html>
