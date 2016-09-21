<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "lau.lasheras@gmail.com";
$email_subject = "Confirmación asistencia";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['Nombre']) ||
!isset($_POST['Comentarios'])) {

echo "<b>No s'ha pogut enviar el formulari. </b><br />";
echo "Por favor, vuelva atrás y verifique los campos<br />";
die();
}

$email_message = "Detalles asistencia:\n\n";
$email_message .= "Nombre: " . $_POST['Nombre'] . "\n";
$email_message .= "Confirmación: " . $_POST['Confirmacion'] . "\n";
$email_message .= "Comentarios: " . $_POST['Comentarios'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "Gràcies per la teva confirmaciò! T'esperem!";
}
?>
