<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" type="image/png" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" />

<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" />

<link rel="mask-icon" type="image/x-icon" href="https://i.ibb.co/TLpGwfX/logo-removebg-preview-1.png" color="#111" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href=".css">
	<title>REGISTRO DE COMPRA</title>


<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
  
<style>
#success_message{ display: none;}
</style>



  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>


<body>
<div class="container">
	<section id="content">

		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="well form-horizontal">
			<h1>COMPRA FORM</h1>


			<div class="form-group">
  				<label class="col-md-4 control-label">Nombre del cliente:</label>  
  				<div class="col-md-4 inputGroupContainer">
  				<div class="input-group">
  				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  				<input type="text" placeholder="Ingresa el nombre del cliente" required="" name="NombreClien"/>
   				 </div>
  				</div>
				</div>

			       <div class="form-group">
  					<label class="col-md-4 control-label"> Email:</label>  
   					 <div class="col-md-4 inputGroupContainer">
   					 <div class="input-group">
    			    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
 					 <input type="text" placeholder="Ingresa tu email" required="" name="Email" />
  					  </div>
  						</div>
						</div>



			<div class="form-group">
  				<label class="col-md-4 control-label">Edad:</label>  
  				<div class="col-md-4 inputGroupContainer">
  				<div class="input-group">
  				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  				<input type="text" placeholder="Ingresa tu edad" required="" name="Edad" />
   				 </div>
  				</div>
				</div>



				<div class="form-group">
 					 <label class="col-md-4 control-label"># Telefono:</label>  
    				 <div class="col-md-4 inputGroupContainer">
    				 <div class="input-group">
       				 <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  			<input type="text" placeholder="Ingresa un telefono de contacto" required="" name="Telefono" />
    				 </div>
  					 </div>
				</div>

			<div class="form-group"> 
 			 <label class="col-md-4 control-label">Forma de pago:</label>
  			  <div class="col-md-4 selectContainer">
   			  <div class="input-group">
       			 <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    		<select name="FormaPag" class="form-control selectpicker" >
      		</div>
     		 	<option value=" " >Por favor seleccione su forma de pago</option>
      			<option>Tarjetas de Crédito</option>
      			<option>Tarjetas de Debito</option>
     			<option >PayPal</option>
      			<option>Venmo</option>
      			<option >Bolmex Cash</option>
      			<option >Tarjetas de Regalo Bolmex</option>
      			<option >OXXO</option>
      			<option >Tiendas Sucursales</option>
   			 	</select>
  				</div>
			</div>
			</div>

			<div>


				<div class="form-group">
  				<label class="col-md-4 control-label"></label>
 			 	<div class="col-md-4">
    		<button type="submit" value="Insertar" name="insertar" class="btn btn-warning" >Insertar<span class="glyphicon glyphicon-send"></span></button>
 				</div>
				</div>


				<div class="form-group">
  				<label class="col-md-4 control-label"></label>
 			 	<div class="col-md-4">
				<button type="reset" value="Limpiar" class="btn btn-warning" >Limpiar<span class="glyphicon glyphicon-delete"></span></button>
				</div>
				</div>

			</div>
		</form>
	</section>
</div>
</body>
</html>



<?php
include("conexion.php");
if(!empty($_POST)){
	

	$nombre = mysqli_real_escape_string($conexion,$_POST['NombreClien']);

	$edad = mysqli_real_escape_string($conexion,$_POST['Edad']);

	$email = mysqli_real_escape_string($conexion,$_POST['Email']);

	$telefono = mysqli_real_escape_string($conexion,$_POST['Telefono']);

	$formapag = mysqli_real_escape_string($conexion,$_POST['FormaPag']);

	$altaclien = "insert into clientes (NombreClien,Edad, Email, Telefono,FormaPag) values ('".$nombre."', ".$edad.", '".$email."',  '".$telefono."', '".$formapag."')";

	$resultadoregistro=$conexion->query($altaclien);
	if ($resultadoregistro>0) 
		echo "TU COMPRA FUE REGISTRADA, NUESTRO EQUIPO SE PONDRA EN CONTACTO CONTIGO PARA RECAUDAR DE MANERA CORRECTA LOS DATOS FALTANTES";
		else
			echo "ERROR AL REALIZAR LA COMPRA, POR FAVOR INTENTALO DE NUEVO Y SI EL PROBLEMA PERSISTE, CONTTACTA A LAS OFICINAS DE BOLMEX.";
	


}
?>