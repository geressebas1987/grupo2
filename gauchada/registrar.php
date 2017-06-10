<html>
	<head>
		<script type="text/javascript" src="js/registrar.js"></script>
	<?php
		include("cabecera.php");
		include("clases.php");
		try{
			$login = new Login;
			$OK=$login->autorizar();
			header("Location:index.php");
		}
		catch( Exception $e){
			$mensaje= $e->getMessage();
		}
	?>
	<title>Registrarse</title>
	
	</head>
	<body>
		
		<div id="wrapper">

			<form name="formulario" action="registrarusuario.php" method="POST" class="login-form" enctype="multipart/form-data" onsubmit="return validareg();">
				
				<div class="header">
					<h1>  Registrarse</h1>
				</div>
			 
				
				<div class="content">
					<label for="nombre">Nombre: </br></label>
					<input type="text" name="nombre" class="input username" size="25" >
					
					<label for="apellido">Apellido: </br></label>
					<input type="text" name="apellido" class="input username" size="25" >
					
					<label for="telefono">Telefono: </br></label>
					<input type="tel"  name="telefono" class="input" >
					
					<label for="edad">Edad: </br></label>
					<input type="number" name="edad" min="18" max="99" class="input username">
					
					<label for="email">Email: </br></label>
					<input type="email" name="email" class="input username" size=30>
					
					<label for="dni">DNI: </br></label>
					<input type="text" name="dni" class="input username" maxlength="8">
					
					<label for="direccion">Direccion: </br></label>
					<input type="text" name="direccion" class="input username">
					
					<label for="password">Contraseña: </br></label>
					<input type="password" name="password1" size=8 minlength="6" maxlength="6" class="input password">
					
					<label for="password" >Confirme contraseña: </br></label>
					<input type="password" name="password2" minlength="6" size="8" maxlength="6" class="input password">	
					
					<label for="imagen">Subir foto (opcional) </br></label>
					<input type="file" name="imagen">
					
				</div>
				<div class="footer">
					<input type="submit" name="login" value="Registrarme" class="button" />
				</div>
			</form>
			
		</div>
	</body>
</html>