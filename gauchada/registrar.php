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
	<title>Registrarme</title>
	
</head>
<body >
	<!--<div id="datos">-->
	<div id="wrapper">

		<form name="formulario" action="registrarusuario.php" method="POST" class="login-form" enctype="multipart/form-data" onsubmit="return validareg();">
			
			<div class="header">
				<h1>  Registrarse</h1>
			</div>
		 
			
            <div class="content">
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" class="input username" size="25"></br></br>
				<label for="apellido">Apellido:</label>
				<input type="text" name="apellido" class="input username" size="25"></br></br>
				<label for="telefono">Telefono:</label>
				<input type="tel"  name="telefono" class="input username" maxlength="14"></br></br>
				<label for="edad">Edad:</label>
				<input type="number" name="edad" min="18" max="99" step="" class="input username">mayor de edad</br></br>
				<label for="email">Email:</label>
				<input type="email" name="email" class="input username" size=30></br></br>
				<label for="dni">DNI:</label>
				<input type="text" name="dni" class="input username" maxlength="8" ></br></br>
				<label for="imagen">Subir foto</label>
				<input type="file" name="imagen"></br></br>
				<label for="direccion">Direccion:</label>
				<input type="text" name="direccion" required="required" class="input username"></br></br>
				<label for="password">Contraseña:</label>
				<input type="password" name="password1" size=8 minlength="6" maxlength="6" class="input password"></br></br>
				<label for="password" >Confirme contraseña</label>
				<input type="password" name="password2" minlength="6" size="8" maxlength="6" class="input password"></br>	
				<!--<input type="submit" value="Registrarme">-->
			</div>
			<div class="footer">
					<input type="submit" name="login" value="Registrarme" class="button" />
					
				</div>
		</form>
		
	</div>
</body>
</html>