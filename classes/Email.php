<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){

        // Crear el objeto de email

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('javiayala30@gmail.com');
        $mail->addAddress('javiayala30@gmail.com', 'appsalon.com');
        $mail->Subject = 'Confirma tu Cuenta';
    
        // SET HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona Aquí: <a href='" . $_ENV['APP_URL'] . " /confirmar-cuenta?token=" . $this->token . "'> Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        // ENVIAR EL MAIL
        $mail->send();
    }

    public function enviarInstrucciones(){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('javiayala30@gmail.com');
        $mail->addAddress('javiayala30@gmail.com', 'appsalon.com');
        $mail->Subject = 'Reestablecer Contraseña';
    
        // SET HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> has solicitado reestablecer tu contraseña, sigue el siguiente enlace para reestablecerla</p>";
        $contenido .= "<p>Presiona Aquí: <a href='" . $_ENV['APP_URL'] . "/recuperar?token=" . $this->token . "'> reestablecer contraseña</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";
        $mail->Body = $contenido;

        // ENVIAR EL MAIL
        $mail->send();

    }
}