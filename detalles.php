<?php
include ("php/conexion.php");

if (isset($_POST["detalles"])){
    
    $id_maquina = $_GET["id_maquina"];

    $sql_detalles = $conexion->query("SELECT * FROM Maquinas WHERE codigo=" +$id_maquina);




}
?>












<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Proyecto 1DAW - SOLVAM</title>
 
	<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/indexDetalles.css">
    <link rel="stylesheet" href="css/menuHeader.css">
    <link rel="stylesheet" href="css/logoHeader.css">
    <link rel="stylesheet" href="css/pie.css">
    <link rel="stylesheet" href="css/contenidoDetalles.css">
    <link rel="stylesheet" href="css/index.css">




	<link rel="shortcut icon" href="img/logo.png">



</head>
<body>
    <div id="contenedor">


        <?php
            include ("php/menu.php");
        ?>
    
    
    
        <div id="contenido">
    
            <div class="imagen">






            </div>



            <div class="info">

                    <div class="titulo">
                            <h1><?php  ?></h1>
                    </div>

                 <div class="desc">

                    <h3>Pequeña descripción de la foto. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</h3>
                 </div>


                 <div class="mastexto">

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore incidunt distinctio adipisci. Atque voluptas fugit magnam beatae. Ab nisi tenetur, dolores laudantium soluta dicta. Repellat omnis hic quo laboriosam sequi.</p>


                  </div>




               <div class="parteAbajo">

                 <p>Tipo: Pecho</p>
                 <p>------------------------------------------------------------</p>
                 <p>Ubicación: Interior</p>
                 <p>------------------------------------------------------------</p>
                 <p>Precio: 400</p>
                 <p>------------------------------------------------------------</p>
                 <p>Diseñador: Marc gutierrez</p>
                 <p>------------------------------------------------------------</p>



                    <div class="botones">

                        <a href="#" class="pr">Más información</a>

                                <div class="der">
                                    <a href="index.html"> Volver...</a>

                                 <p class="imagenflecha"></p>   


                                 </div>   

                    </div>

                 </div>

            </div>






    
        </div>
    
    
    
    
  
        <?php
            include ("php/pie.php");
        ?>
    
    
    
    
    
    
    </div>
</body>
</html>