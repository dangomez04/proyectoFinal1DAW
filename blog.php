<?php
include ("php/conexion.php");


    

    $sql_blog=$conexion->query("SELECT * FROM articulos");

?>






<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Proyecto 1DAW - SOLVAM</title>

    <link rel="shortcut icon" href="img/logo.png">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/menuHeader.css">
	<link rel="stylesheet" href="css/logoHeader.css">
	<link rel="stylesheet" href="css/pie.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/articulosBlog.css">
    <link rel="stylesheet" href="css/busquedaBlog.css">


</head>
<body>
    
<div id="contenedor">


	<?php
	include ("php/menu.php");
	?>
	







   

   <div class="contenedorBlog" >  
	
   <?php while($filablog=$sql_blog->fetch_array()){?>

     <div class="articulos">

         <div class="imagen">
			<img src="img/<?php echo $filablog[6] ?>" width="200px" height="180px">

         </div>

          <div class="informacion">

                 <div class="texto">
					<h1><?php echo $filablog[1] ?></h1>
					<p>	<?php echo $filablog[2] ?></p>
					<a href="#">Leer más</a>
                  </div>


       		       <div class="widgets">

						<ul>
							<li class="fecha"><p><?php echo $filablog[3] ?></p></li>
							<li class="autorArticulo"><p><?php echo $filablog[4] ?></p></li>
							<li class="categoriaArticulo"><p><?php echo $filablog[5] ?></p></li>

						</ul>



            	  </div>





          </div>


		


    </div>

	<?php }?>

		<div class="busqueda">

			<input type="search" placeholder="Buscar">
			<input type="button">



			<h2 class="primero">Categorias</h2>
			<ul class="categorias">
				<a href="#"></a><li>Categoria1</li>
				<a href="#"></a><li>Categoria2</li>
				<a href="#"></a><li>Categoria3</li>
				<a href="#"></a><li>Categoria4</li>

			</ul>

			<h2 class="segundo">Post Populares</h2>
			<ul class="posts">
				<li><div class="imagenPost"></div></li>
				<li><a class="primer" href="#">Titulo del post popular</a></li>
				<li><a class="segundo" >Categoria del post</a></li>
			</ul>
			
			<p class="limpiar"></p>

			<ul class="posts2">
				<li><div class="imagenPost"></div></li>
				<li><a class="primer" href="#">Titulo del post popular</a></li>
				<li><a class="segundo" >Categoria del post</a></li>
			</ul>

			<p class="limpiar"></p>

			<ul class="posts3">
				<li><div class="imagenPost"></div></li>
				<li><a class="primer" href="#">Titulo del post popular</a></li>
				<li><a class="segundo" >Categoria del post</a></li>
			</ul>
			<p class="limpiar"></p>

			<ul class="posts4">
				<li><div class="imagenPost"></div></li>
				<li><a class="primer" href="#">Titulo del post popular</a></li>
				<li><a class="segundo" >Categoria del post</a></li>
			</ul>
			<p class="limpiar"></p>

			<h2 class="video">Video</h2>
			<iframe width="328" height="129" src="https://www.youtube.com/embed/HP_l2yLg_WA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>










		</div>
		
    </div>  


    

   <?php
	include ("php/pie.php");
   ?>

    
</div>






</body>
</html>