<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    $error = '';
    if(empty($_POST["nombre"])){
        $error = 'Ingresa un nombre </br>';
    }else{
        $nombre = $_POST["nombre"];
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        $nombre = trim($nombre);
        if($nombre==''){
            $error .= 'Nombre está vacio</br>';
        }
    }
    if(empty($_POST["correo"])){
        $error .= 'Ingresa un correo</br>';
    }else{
        $correo = $_POST["correo"];
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $error .= 'Ingresa un Correo valido';
        } else{
            $correo = filter_var($correo, FILTER_SANITIZE_STRING);
        }
    }
    if(empty($_POST["telefono"])){
        $error .= 'Ingresa un teléfono</br>';
    }else{
        $telefono = $_POST["telefono"];
        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
    }
    if(empty($_POST["asunto"])){
        $error .= 'Ingresa un asunto</br>';
    }else{
        $asunto = $_POST["asunto"];
        $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
    }
    if(empty($_POST["mensaje"])){
        $error .= 'Ingresa un mensaje</br>';
    }else{
        $mensaje = $_POST["mensaje"];
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    }
    
    
    //Server settings
    
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.nutriologoencdmx.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'formulario@nutriologoencdmx.com';                     // SMTP username
    $mail->Password   = 'IsTHpjg0@s=A';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('formulario@nutriologoencdmx.com', 'nutriologoencdmx.com');
    $mail->addAddress('nutmonicahdz@gmail.com', 'Dr. Monica');     // Add a recipient

    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    
    
    $mail->Subject = 'Formulario desde nutriologoencdmx.com';
    $mail->Body    = '<html> 
<body> 
<h1>Recibiste un nuevo mensaje desde nutriologoencdmx.com</h1>
<p>Nombre: "'.$nombre.'"</p>
<p>Email: "'.$correo.'"</p>
<p>Telefono: "'.$telefono.'"</p>
<p>Asunto: "'.$asunto.'"</p>
<p>Mensaje: "'.$mensaje.'"</p>
</body> 
</html>
<br />';
    

    if($error == ''){
        $mail->send();
         echo "exito";
    }
    else{
         echo "$error";
    }
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
