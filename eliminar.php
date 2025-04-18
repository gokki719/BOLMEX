 <?php
include("conexion.php");
$nombre = $_GET['nombre'];

$eliminarregistro = "delete from clientes where NombreClien = '$nombre' ";
$registroeliminado = $conexion->query($eliminarregistro);
if ($registroeliminado>0) 
	echo "Se cancelo de manera correcta la compra de $nombre";
else
	echo "ERROR EN LA ELIMINACION DE LA COMPRA";
?>