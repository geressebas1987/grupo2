<html>
<?php
	if(isset($_GET['msj'])){
  		 $mensaje= $_GET['msj'];
//
   	if($mensaje="2")
  		 echo"<script> alert ('DEBE ESTAR REGISTRADO PARA ACCEDER')</script>"; 
}?>

<head>
	<title> Una gauchada </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css"></style>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>

<body>
	
	<?php
		Include ("cabecera.php");
	?>

	<!--
	Funcionalidad
	-->
	<div id="container">
		<div id="favores">
			<?php
				include ("menu.php");
				include ("conexion.php");
				$link = conectar();
				$query="SELECT idPublicacion,ciudad,imagen, titulo, descripcion  FROM publicacion 
				 ORDER BY publicacion.idPublicacion DESC";
				$result =mysqli_query($link,$query);
				$num=mysqli_num_rows($result);
				if($num == 0){
					echo"<h4>NO SE ENCONTRARON RESULTADOS</h4>";
				}
				else{
 
				?>
					<table>
 						<tr>
	       					<th abbr="titulo" scope="col">TITULO</th>
	       					<th abbr="ciudad" scope="col">CIUDAD</th>
	      				    <th abbr="foto" scope="col">DESCRIPCION</th>    
	       					<th abbr="foto" scope="col">FOTO</th>
	        				
      					</tr>
      					<?php
      						for($x = 1; $x <=$num ; $x++){
      							$row = mysqli_fetch_array($result);
      							
									/*if(isset($_SESSION['estado'])){
      	  		 						if($_SESSION['estado']=="logeado"){
      	                               		echo"<tr><td width=300><h4><a href=detalles.php?fila=".$row['idPublicacion'].">".$row['titulo']."</a></h4></td>";
      	  			
										}
									}
									else{echo"<tr><td width=300>".$row['titulo']."</td>";}*/
		
      							echo"<tr><td width=300><h4><a href=detalles.php?fila=".$row['idPublicacion'].">".$row['titulo']."</a></h4></td>";
      							echo"<td width=200>".$row['ciudad']."</td>";
      							echo"<td width=400>".$row['descripcion'],"</td>";
      							
      							echo"<td  width=300><img src=";
								if (!isset($row['imagen'])) {
								echo "./imgs/def.jpg";
								}else{
								echo "mostrarImagen.php?idPublicacion=".$row['idPublicacion'];
								}
								echo "></td>";
      							
      						}
      					
      					?>
      				</table>	
		
		</div>
		<?php
	}
			 include("footer.php");
		?>
	</div>

</body>

</html>