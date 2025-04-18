<?php
include("conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="apple-touch-icon" type="image/png" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" />

<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" />

<link rel="mask-icon" type="image/x-icon" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" color="#111" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=".css">
  <title>CONSULTA</title>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  

	<style>

		html { font-size: 15px; }
    html, body { margin: 0; padding: 0; min-height: 100%; }
    body { height:100%; display: flex; flex-direction: column; }
    .referer-warning {
      background: black;
      box-shadow: 0 2px 5px rgba(0,0,0, 0.5);
      padding: 0.75em;
      color: white;
      text-align: center;
      font-family: var(--cp-font-family);
      line-height: 1.2;
      font-size: 1rem;
      position: relative;
      z-index: 2;
    }
    .referer-warning h1 { font-size: 1.2rem; margin: 0; }
    .referer-warning a { color: #1a99bd; }

 header{
      padding: 0px auto;
    }

    #logo-header{
      float: left;
      text-decoration: none;
    }

    #site-name{
      display: block;
      float: left;
    }


		table{
			font-family: montserrat, serif;
			border-collapse: collapse;
			width: 100%;

		}
		td, th{
			border: 7px solid #4fed2f;
			text-align: left;
			padding: 30px;
			height: 50px;
 	 	    padding: 1px;

		}
		tr:nth-child(even){
			background-color: #ffd396;

		}
body{
      width: 1000px;
      margin: 0px auto;
    }
    header{
      padding: 0 0 90px auto;
    }

    #logo-header{
      float: left;
      text-decoration: none;
    }

    #site-name{
      display: block;
      float: left;
    }

    nav{
      background-color: #FFC300;
      padding-left: 40px;
      height: 50px;
    }

    nav ul li{
      display: inline;
      padding: 15px 20px 18px 10px;
      border-right: 13px solid #DC143C;
    }

    nav ul li a{
      color:  #ffff;
      text-decoration: none;
    }

<p>
</p>
    footer{
      position: absolute;
      bottonm: 0;
    }

  </style>
</head>
<body >
	 <header>
    <a id="logo-header"> <img src="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" width="150" height="55"></a>
    
  </header>

	<h2><center>Listado de clientes</center></h2>

	<table>
		<tr>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Forma de pago</th>
		</tr>

		<?php
		$clientes = "select NombreClien,Edad, Email, Telefono,FormaPag from clientes";
		$resultadoclientes = $conexion->query($clientes);
		while ($registroclien = $resultadoclientes ->fetch_array(MYSQLI_BOTH)) {
			echo "<tr><td>".$registroclien['NombreClien']."</td>
			<td>".$registroclien['Edad']."</td>
			<td>".$registroclien['Email']."</td>
			<td>".$registroclien['Telefono']."</td>
			<td>".$registroclien['FormaPag']."</td>


			<td><a href='eliminar.php?nombre=$registroclien[NombreClien]'>CANCELAR COMPRA</a></td>
			
			<td><a href='modificar.php?
			nombre=$registroclien[NombreClien] & 
			email=$registroclien[Email] &
			edad= $registroclien[Edad] & 
			telefono= $registroclien[Telefono] & 

			formapag= $registroclien[FormaPag]'>MODIFICAR COMPRA</a> </td></tr> ";




		}
?>

		

	</table>
</body>
</html>