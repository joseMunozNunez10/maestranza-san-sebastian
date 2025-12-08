<?php
// Versión simplificada para producción - usar mail() nativo de PHP
$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['form_name'] != '' AND $_POST['form_email'] != '' AND $_POST['form_subject'] != '' ) {

        $name = filter_var($_POST['form_name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['form_email'], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($_POST['form_subject'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['form_phone'], FILTER_SANITIZE_STRING);
        $user_message = filter_var($_POST['form_message'], FILTER_SANITIZE_STRING);

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'hsalgado@maestranzasansebastian.cl';

        if( $botcheck == '' ) {

            $email_subject = "Contacto Web: " . $subject;
            
            $email_body = "Has recibido un nuevo mensaje desde el formulario de contacto.\n\n";
            $email_body .= "Nombre: $name\n";
            $email_body .= "Email: $email\n";
            $email_body .= "Teléfono: $phone\n\n";
            $email_body .= "Mensaje:\n$user_message\n";

            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            $sendEmail = mail($toemail, $email_subject, $email_body, $headers);

            if( $sendEmail ):
                $message = 'Hemos recibido <strong>exitosamente</strong> tu mensaje y nos pondremos en contacto contigo lo antes posible.';
                $status = "true";
            else:
                $message = 'El email <strong>no pudo</strong> ser enviado debido a un error inesperado. Por favor intenta nuevamente más tarde.';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detectado</strong>.';
            $status = "false";
        }
    } else {
        $message = 'Por favor <strong>completa</strong> todos los campos e intenta nuevamente.';
        $status = "false";
    }
} else {
    $message = 'Ocurrió un <strong>error inesperado</strong>. Por favor intenta nuevamente más tarde.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>
