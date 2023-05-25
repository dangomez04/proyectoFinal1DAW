<?php
include ("php/conexion.php");
$sql = $conexion->query("SELECT * FROM articulos");
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
					<?php while($titulo=$sql->fetch_array()) {?>
					<h1><?php echo $titulo[1] ?> </h1>
					<?php } ?>
				</div>
				<div class="texto">
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero velit pariatur obcaecati? Harum
						quibusdam deserunt tempora autem quasi eos iusto vero vitae excepturi ducimus. Iure explicabo
						dolorum hic quisquam quos. </p>
				</div>
				<div class="texto2">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui quis at enim quam dolore totam
						cupiditate adipisci quasi asperiores dolorum quas dignissimos, error ullam aliquam.</p>
				</div>

				
				<div class="botonMas">
					<h3></h3><a href="#">Más...</a>
				</div>

			</div>


		</div>

		<p class="limpiar"></p>

		<div id="mid2">


			<div class="noticia1" id="images">

			<div class="imagen">
				<img src="img/GG-Exterior (1).jpg">
					
				<div class="botones">
				<a href="#" class="lupa"></a>
				<a href="detalles.php" class="categorias"></a>
				</div>
			</div>


				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>


				</div>



			</div>





			<div class="noticia2" id="images">

				<div class="imagen">
					<img src="img/GG-Exterior (1).jpg"> 
					
					<div class="botones">
						
						<a href="#" class="lupa"></a>
						<a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia3" id="images">

				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia4" id="images">

				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia5" id="images">

				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia6" id="images">

				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia7" id="images">

				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php"
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>
			<div class="noticia8" id="images">
				<div class="imagen"><img src="img/GG-Exterior (1).jpg"><div class="botones"><a href="#" class="lupa"></a><a href="detalles.php "
							class="categorias"></a></div>
				</div>
				<div class="textodebajo">
					<p>TITULO</p>
					<p>subtitulo</p>
				</div>
			</div>



		</div>

		<p class="limpiar"></p>
		

		<?php
		include ("php/pie.php");
		?>


	</div>






</body>

</html>