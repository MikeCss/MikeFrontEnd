<?php
// Get Data	
$name = strip_tags($_POST['name']);
$tlf = strip_tags($_POST['tlf']);
$email = strip_tags($_POST['email']);
$consulta = strip_tags($_POST['consulta']);


// Send Message
mail( "yourmail@domain.com.ar", "Titulo del mail",
"Nombre: $name\nTelefono: $tlf\nEmail: $email\nConsulta: $consulta\n",
"From: Nombre de quien envia <noreply@domain.com.ar>" );
?>