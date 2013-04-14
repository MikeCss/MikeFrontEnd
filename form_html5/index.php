<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Solicitudes</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.form.js"></script>
<link rel="stylesheet" href="css/style.css">
<script>
$(function(){
$('#contact').validate({
submitHandler: function(form) {
    $(form).ajaxSubmit({
    url: 'process.php',
    success: function() {
    $('#contact').hide();
    $('#contact-form').append("<p class='thanks'> Gracias por Contactarnos!</p>")
    }
    });
    }
});         
});
</script>
<style type="text/css">
body {
	overflow:hidden !important;
}
</style>
</head>

<body>
<div id="contact-form">	

<form id="contact" method="post" action="">
<fieldset>	

<label for="name">Nombre</label>
<input type="text" name="name" placeholder="Nombre Completo" title="Ingrese su nombre" class="required">

<label for="tlf">Telefono</label>
<input type="text" name="tlf" placeholder="Numero telefonico" title="Ingrese su telefono" class="required">

<label for="email">E-mail</label>
<input type="email" name="email" placeholder="tuemail@empresa.com" title="Dirección de Email" class="required email">

<label for="consulta">Consulta</label>
<textarea name="consulta" placeholder="Envia tu consulta."></textarea>




<input type="submit" name="submit" class="button" id="submit" value="Enviar" />

</fieldset>
</form>

</div><!-- /end #contact-form -->

<script src="js/modernizr-min.js"></script>
<script>
if (!Modernizr.input.placeholder){
      $('input[placeholder], textarea[placeholder]').placeholder();
}
</script>
</body>
</html>