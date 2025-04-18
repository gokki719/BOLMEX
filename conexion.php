<?php
include("config.php");
$conexion = new mysqli($server, $user, $pass, $bd);
if (mysqli_connect_errno()) {
	echo "NO ES POSIBLE CONECTAR EN ESTE MOMENTO CON LA BASE, INTENTALO MAS TARDE", mysqli_connect_error(); exit();}
else
	{echo "HAS INGRESADO DE MANERA CORRECTA A LA BASE DE DATOS";}
?> 