<?php
$conexion = new mysqli ("localhost","dangomez","Dani.G10","dg_gimnasio");

    if ($conexion -> connect_error){
        die('no se pudo conectar');
    }

?>