<?php
include ("php/conexion.php");

if (isset($_GET["detalles"])){
    
    $id_maquina = $_GET['id_maquina'];

    $sql_detalles=$conexion->query("SELECT * FROM Maquinas WHERE codigo=$id_maquina");




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
        <?php while($filadetalles=$sql_detalles->fetch_array()){?>

            <div class="imagen">
                <img src="./img/<?php echo $filadetalles[8];?>" width="570px" height="600px">


            </div>

      

            <div class="info">

                    <div class="titulo">

                            <h1><?php echo $filadetalles[1];?></h1>


                    </div>

                 <div class="desc">

                    <h3><?php echo $filadetalles[6];?></h3>
                 </div>


                 <div class="mastexto">

                 <?php echo $filadetalles[7];?>

                  </div>




               <div class="parteAbajo">

                 <p>Tipo: <?php echo $filadetalles[2];?></p>
                 <p>------------------------------------------------------------</p>
                 <p>Ubicación: <?php echo $filadetalles[3];?></p>
                 <p>------------------------------------------------------------</p>
                 <p>Precio: <?php echo $filadetalles[4];?></p>
                 <p>------------------------------------------------------------</p>
                 <p>Diseñador: <?php echo $filadetalles[5];?></p>
                 <p>------------------------------------------------------------</p>


                 <?php }?>

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