<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
require_once("models/Usuario.php");
require_once("config/conexion.php");

$usuario = new Usuario();

if (isset($_POST["usu_correo"])) {
    $correo = $_POST["usu_correo"];

    if ($usuario->verificarCorreoExistente($correo)) {
        // Generar un token único
        $token = bin2hex(random_bytes(32));

        // Insertar el token en la base de datos
        $usu_id = $usuario->obtenerIdPorCorreo($correo);
        if ($usu_id) {
            if ($usuario->insertarToken($usu_id, $token)) {
                // El correo existe en la base de datos, procede a enviar el correo
                $correo_destino = $correo; // Usar el correo proporcionado en el formulario

                $mail = new PHPMailer(true);

                try {
                     // Configuración de envío del correo
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'mail.grupoccima.com.mx';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'mornelas@grupoccima.com.mx';
            $mail->Password   = 'ornelas.23';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            // Configuración del correo
            $mail->setFrom('mornelas@grupoccima.com.mx', 'Miguel Ornelas');
            $mail->addAddress($correo_destino); // Usar el correo proporcionado
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset';
            $mail->Body    = 'Haga clic en el siguiente enlace para restablecer su contraseña: ' . 
            '<a href="http://localhost/TicketBQ/createnewpassword.php?token=' . $token . '">Restablecer Contraseña</a>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
                    header("Location: /index.php");
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "Error al insertar el token en la base de datos.";
            }
        } else {
            echo "Error al obtener el ID de usuario por correo.";
        }
    } else {
        // El correo no existe en la base de datos, redirige al usuario a una página de error
        echo "El correo no existe en nuestra base de datos.";
        exit();
    }
}

?>





