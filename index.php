<?php
include ("php/conexion.php");
$sql_articulos = $conexion->query("SELECT * FROM articulos");
$sql_maquinas = $conexion->query("SELECT * FROM Maquinas LIMIT 8");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/menuHeader.css">
	<link rel="stylesheet" href="css/logoHeader.css">
	<link rel="stylesheet" href="css/pie.css">
	<link rel="stylesheet" href="css/mid1.css">
	<link rel="stylesheet" href="css/mid2.css">


	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/logo.png">

	<!-- JS ================================================== -->

</head>

<body>
	<div id="contenedor">

		<?php
		include ("php/menu.php");
		?>
		
		<div id="mid1">


			<div class="contenedorGaleria">
				<div id="galeria">

					<div class="galimagenes">
						<div><img src="img/imagen1_400_200.jpg"></div>
						<div><img src="img/imagen2.jpg"></div>
						<div><img src="img/imagen3_b.jpg"></div>
						<div><img src="img/imagen44 (1).jpg"></div>


					</div>

				</div>
			</div>

			<div id="noticia">
				<div class="titulo"> 
					<?php while($fila=$sql_articulos->fetch_array()) {?>
					<h1><?php echo $fila[1] ?> </h1>
				</div>
				<div class="texto">
					<p><?php echo $fila[2]?> </p>
				</div>
				<div class="texto2">
					<p><?php echo $fila[5]?> </p>
				</div>

				<?php } ?>
				<div class="botonMas">
					<h3></h3><a target="_blank" href="https://www.2playbook.com/fitness/rsg-group-prepara-entrada-gold-gym-en-espana-nuevas-aperturas-mcfit_8335_102.html">Más...</a>
				</div>

			</div>


		</div>

		<p class="limpiar"></p>

		<div id="mid2">

		 <?php while($fila2=$sql_maquinas->fetch_array()) {?>

			<div class="noticia1">

				<div class="imagen">
					<img src="img/<?php echo $fila2[8]?>">
					
					<div class="botones">
					<a href="#" class="lupa"></a>
					<a class="categorias" href="detalles.php?detalles&id_maquina=<?php echo $fila2[0] ?> "></a>
					</div>
			    </div>


				<div class="textodebajo">
					<p><?php echo $fila2[1]?></p>
					<p><?php echo $fila2[2]?></p>


				</div>

				


			</div>

			<?php } ?>



			



		</div>

		<p class="limpiar"></p>
		

		<?php
		include ("php/pie.php");
		?>


	</div>






</body>

</html>