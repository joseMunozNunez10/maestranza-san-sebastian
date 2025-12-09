<?php

require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');

$mail = new PHPMailer();

//$mail->SMTPDebug = 0;                               // Disable debug output in production
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';                            // Hostgator uses localhost for SMTP
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hsalgado@maestranzasansebastian.cl'; // SMTP username
$mail->Password = 'sebasofichanchu2021.';             // SMTP password
$mail->SMTPSecure = false;                            // No encryption for localhost
$mail->SMTPAutoTLS = false;                           // Disable TLS auto-detection
$mail->Port = 587;                                    // Standard SMTP port
$mail->CharSet = 'UTF-8';

$message = "";
$status = "false";

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if( $_POST['form_name'] != '' AND $_POST['form_email'] != '' AND $_POST['form_subject'] != '' ) {

        $name = $_POST['form_name'];
        $email = $_POST['form_email'];
        $subject = $_POST['form_subject'];
        $phone = $_POST['form_phone'];
        $message = $_POST['form_message'];

        $subject = isset($subject) ? $subject : 'New Message | Contact Form';

        $botcheck = $_POST['form_botcheck'];

        $toemail = 'hsalgado@maestranzasansebastian.cl'; // Your Email Address
        $toname = 'Maestranza San Sebastian'; // Your Name

        if( $botcheck == '' ) {

            $mail->SetFrom( $email , $name );
            $mail->AddReplyTo( $email , $name );
            $mail->AddAddress( $toemail , $toname );
            $mail->Subject = $subject;

            $name = isset($name) ? "Name: $name<br><br>" : '';
            $email = isset($email) ? "Email: $email<br><br>" : '';
            $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
            $message = isset($message) ? "Message: $message<br><br>" : '';

            $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            $body = "$name $email $phone $message $referrer";

            $mail->MsgHTML( $body );
            $sendEmail = $mail->Send();

            if( $sendEmail == true ):
                $message = '¡Mensaje enviado <strong>exitosamente</strong>! Nos pondremos en contacto contigo lo antes posible.';
                $status = "true";
            else:
                $message = 'No se pudo enviar el mensaje. Por favor intenta nuevamente o contáctanos directamente al +569 9021 9851.';
                $status = "false";
            endif;
        } else {
            $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
            $status = "false";
        }
    } else {
        $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
        $status = "false";
    }
} else {
    $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
    $status = "false";
}

$status_array = array( 'message' => $message, 'status' => $status);
echo json_encode($status_array);
?>