<?php 
// codigo en el php que recibe los datos del formulario
// nombre de quien envía el correo
$nombre = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['phone'];
$mensaje = $_POST['message'];

// Varios destinatarios
$para  = 'ventas@edificioquimbaya.com';
// título
$título = utf8_decode("Correo Contacto Web Quimbaya");
// mensaje
$mensaje = '
<html>
<head>
  <title>Contacto Página Web Edificio Quimbaya</title>
</head>
<body>
  <p>Alguien ha escrito desde el formulario de contacto</p>
  <table>
    <tr>
      <td>Nombre</td><td>'. $nombre .'</td>
    </tr>
    <tr>
      <td>Correo electrónico</td><td>'. $email .'</td>
    </tr>
    <tr>
      <td>Teléfono Celular</td><td>'. $celular .'</td>
    </tr>
    <tr>
      <td>Mensaje</td><td>'. $mensaje .'</td>
    </tr>
  </table>
</body>
</html>
';
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
// $cabeceras .= 'To: paolarodriguez@rmasb.com' . "\r\n";
$cabeceras .= 'From: paginaquimbaya@edificioquimbaya.com' . "\r\n";
// $cabeceras .= 'Cc: paolarodriguez@rmasb.com' . "\r\n";
$cabeceras .= 'Bcc: paolarodriguez@rmasb.com' . "\r\n";

if (mail($para, $título, $mensaje, $cabeceras)) {
	echo "funciona";
}
?>