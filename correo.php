<html>
<body>
<head>
<title></title>
</head>
<?php
$mail = ('zero1023@gmail.com');
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];

$message = "
MENSAJE DE CONTACTO

Nombre:     "  .$nombre."

Correo:     "  .$email."

Mensaje:    "  .$mensaje."
"; 
  (mail($mail,"NUEVO MENSAJE DE PRUEBA ",$message))
?>
  <script>alert("Tu mensaje ha sido enviado");</script>
 <script type="text/javascript">
  window.location="index.html";
  </script> 
</body>
 </html>

