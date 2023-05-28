<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="css/contacto.css" />
    <link rel="stylesheet" href="css/reset.css">  
    <link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/menuHeader.css">
	<link rel="stylesheet" href="css/logoHeader.css">
	<link rel="stylesheet" href="css/pie.css">



    <link rel="shortcut icon" href="img/logo.png" />
  </head>
  <body>

<div id="contenedor">
    <?php
		include ("php/menu.php");
		?>
    <div class="contenedorContacto">


      <div class="formulario">
        <h1>CONTACTA CON NOSTROS...</h1>
        <p>
          Somos una empresa donde nos encargamos de mantener una red de los
          gimnasios mas famosos del mundo. Manteniendonos lideres por mas de 20
          años en nuestro sector, administrando gimnasios como Gold's Gym, Icon
          Gym, Fitness park... Contacta con nosotros si quieres formar parte del
          proyecto!
        </p>

        <div class="campos">
          <form action="mailto:danielgomezgarciaaa@gmail.com" method="post">
            <div class="iconos">
              <img src="img/user_84308.png" />
            </div>
            <input type="text" placeholder="Introduce tu nombre" class="campos"/>

            <div class="iconos">
              <img src="img/mail.png" />
            </div>
            <input type="text" placeholder="Introduce tu email" class="campos" />

            <div class="iconos">
              <img src="img/website.png" />
            </div>

            <input type="text" placeholder="Introduce la url de tu página" class="campos" />
            <p class="limpiar"></p>

            <textarea
              name="miarea"
              id="textarea"
              cols="77"
              rows="13"
              placeholder="Escribenos cualquier duda"
            ></textarea>
            <input type="submit" value="Enviar" name="botonEnviar" class="boton"/>
          </form>
        </div>
      </div>

      <div class="inf">
        <div class="datosContacto">

            <h2>DATOS DE CONTACTO</h2>
            <h3>Sparta Region</h3>
            <p>Cervantes, 3   </p>
            <p>Quart de Poblet - 46930</p>
            <p>Telefono: 644 95 39 69</p>
            <p class="bold">Daniel Gómez</p>
            <a href="#">danielgomezgarciaaa@gmai.com</a>

        </div>

        <div class="dondeEstamos">

            <h2>DONDE ESTAMOS</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.211303837088!2d-118.33200333713478!3d34.08972695074769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf337032e6bd%3A0x9f8884792eb5203e!2sGold&#39;s%20Gym!5e0!3m2!1ses!2ses!4v1684610688597!5m2!1ses!2ses" width="401" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>			</li>

        </div>
      </div>

    </div>
    <?php include ("php/pie.php")?>

 </div>   
  </body>
</html>
