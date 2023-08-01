<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

require 'vendor\PHPMailer-master\src\PHPMailer.php';
require 'vendor\PHPMailer-master\src\SMTP.php';
require 'vendor\PHPMailer-master\src\Exception.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$from = $_POST['email'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'twentythree.qservers.net'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'info@sannex.ng'; //SMTP username
    $mail->Password = 'Sannex.info1'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$from", 'Sucbscriber_');
    $mail->addAddress('info@sannex.ng', 'Sannex Inc'); //Add a recipient

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Launch Notification';
    $mail->Body = "Please notify " . $from;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Horray! \n Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>