<?php
require 'init.php';

if(isset($_GET['mes']))
	$mes=$_GET['mes'];
else
	$mes=date('m');

$v=new viscalendario($calendario);

?>
<html>
<head>
<title>Agenda</title>
<link rel="stylesheet" type="text/css" href="calendario.css" />
</head>
<body>
		<h2>Agenda</h2>
		<div class="nav">

			<div>
				<?=$mes==1?'':"<a href='?mes=".($mes-1)."'>Mes anterior</a>"?>
				<?=$mes==12?'':"<a href='?mes=".($mes+1)."'>Mes siguiente</a>"?>
			</div>
		</div>

		<div class=mesgrande>
			<?php
			$v->displaymes($mes);
			?>
		</div>
	</body>
</html>

