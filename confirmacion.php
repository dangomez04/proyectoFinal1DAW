<?php 

//isset es verdadero si la variable que se le pasa como parámetro no está vacía

//si se ha pulsado el botón de enviar formulario
if (isset($_POST["Enviar"])){
	
		//se crea la variable "de" y se le asigna lo que el usuario ha escrito en el campo "de" del formulario
		$nombre=$_POST["nombre"];
		$email=$_POST["email"];
        $pagina=$_POST["pagina"];
        $textaera=$_POST["miarea"];
        $datos= "Nombre: $nombre \n Email: $email\n Página:$pagina\n Mensaje opcional: $textaera\n";
        $asunto= "Formulario de contacto";


				
		
		//se crea la variable "mensaje" y se le asigna lo que el usuario ha escrito en el campo "mensaje" del formulario
		
		 
		//sintaxis mail(destino, asunto,mensaje,cabeceras);
		mail(
            
            
            "danielgomezgarciaaa@gmail.com",
            $asunto,
            $datos,
            "From:$email\n"
        
        
        
        );

		//mensaje de confirmación de envío
}
?>

<h1>Formulario enviado con exito</h1>