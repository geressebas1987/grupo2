<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<?php
	session_start();
	include("checkCredit.php");
?>
<html lang="es">
<head> 
	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8"/>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	  
</head>

<body>
	
	<div id="header">
		<?php

			if(isset($_SESSION['estado'])){
      	  		 if($_SESSION['estado']=="logeado"){

			if(hasCredit()) {
				$elm="<li><a href='addGauchada.php'><strong>+</strong> PUBLICAR</a></li>";
			} else {
				$elm="<li><a id='msg' href=''><strong>+</strong> PUBLICAR</a></li>";
			}
      	  			 echo"
						<h3><a href=index.php><img id=inicio src=imgs/logo2.jpg></a> | 
      	           	 Hola ".$_SESSION['nombre']." ! | <a href=salir.php>cerrar sesion</a></h3>";
      	           	 echo"
      	           	 		<nav>
					        	<ul>".$elm."
					        		<li>
					        			<a href=comprarcredito.php> COMPRAR CREDITO</a>

					        		</li>
					        		<li>
					        			<a>CONFIGURACION</a>
					        		</li>
					        	</ul>
					        </nav>";
					}

			}
			else{ echo"<h3><a href=index.php><img id=inicio src=imgs/logo2.jpg></a> | <a href=ingresar.php>INGRESAR</a> |<a href=registrar.php> REGISTRARSE</a></h3>";}

		?>
		
        <img id="logosan" src="imgs/Gaucho.jpg" srcset="imgs/Gaucho480.jpg 480w, 
														imgs/Gaucho640.jpg 640w, 
														imgs/Gaucho800.jpg 768w,
														imgs/Gaucho1280.jpg 800w,
														imgs/Gaucho1280.jpg 1366w">

         

	</div>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
    <script src="js/validate.js"></script>
</body>
</html>