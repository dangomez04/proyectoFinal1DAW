<?php
include ("php/conexion.php");

if (isset($_GET["categorias"])){

    $categoria = $_GET['categoria'];

    $sql_blog=$conexion->query("SELECT * FROM articulos WHERE categoria='$categoria'");
	$sql_categorias=$conexion->query("SELECT categoria FROM articulos");




}

$sql_lastposts=$conexion->query("SELECT * FROM articulos ORDER BY fecha DESC;")


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
    <link rel="stylesheet" href="css/busquedaBlogcategorias.css">



</head>
<body>
    
<div id="contenedor">


	<?php
	include ("php/menu.php");
	?>
	







   

   <div class="contenedorBlog" >  
	
   <?php while($filablog=$sql_blog->fetch_array()){?>
    <?php
	 $fecha_mysql = $filablog[3];
	 $fecha=strtotime($fecha_mysql);

	
	?>
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
							<li class="fecha"><p><?php echo date("d-m-Y", $fecha) ?></p></li>
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
			<?php while($filacategorias=$sql_categorias->fetch_array()){?>

			<ul class="categorias">
            <a href="categorias.php?categorias&categoria=<?php echo $filacategorias[0]?>"></a><li><?php echo $filacategorias[0] ?></li>
				

			</ul>
			<?php }?>
			<h2 class="segundo">Posts más recientes</h2>
			<?php while($filalastposts=$sql_lastposts->fetch_array()){?>
				<?php 
					 $fecha_mysql = $filalastposts[3];
					 $fecha2=strtotime($fecha_mysql);
					?>	
			<div class="contenedorPosts">
				<ul class="posts">
					<li><div class="imagenPost"><img src="img/<?php echo $filalastposts[6] ?>" width="70px" height="70px"> </div></li>
					<li><div class="titulo"><a class="primer" href="#"><?php echo $filalastposts[1] ?></a></div></li>
					<li><div class="fecha"><a class="segundo" ><?php echo date("d-m-Y", $fecha2)?></a></div></li>
				</ul>
			</div>	
			<?php }?>

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