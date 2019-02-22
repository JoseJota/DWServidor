<?php

require 'init.php';

$calendario->anularcita($_GET['mes'],$_GET['dia'], $_GET['hora']);
header("Location: citasdia.php?dia=$_GET[dia]&mes=$_GET[mes]");
