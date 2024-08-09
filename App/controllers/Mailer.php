<?php

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/SMTP.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $affair = $_POST['affair'];
    $message = $_POST['message'];

    $errors = array();

    if (empty($name)) {
        $errors[] = 'the name field is required';
    }

    if (empty($phone)) {
        $errors[] = 'the phone is not valid';
    }


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'the email adress is not valid';
    }

    if (empty($affair)) {
        $errors[] = 'the name affair is required';
    }

    if (empty($message)) {
        $errors[] = 'the name message is required';
    }

    if (count($errors) == 0) {

        $msj = "For: $name <a href='mailto:$email'>$email</a><br> Phone: $phone<br>";
        $msj .= "Affair: $affair<br><br>";
        $msj .= "Message body";
        $msj .= '<p>' . $message . '</p>';

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'brayan.acos26@gmail.com';
            $mail->Password = 'jymx gvhy fonu jzfz';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('brayan.acos26@gmail.com');
            $mail->addAddress('brayan.acosta@aerocivil.gov.co');

            $mail->isHTML(true);
            $mail->Subject = 'Formulario enviado';
            $mail->Body = $msj;

            $mail->send();

            header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
            exit();
        } catch (Exception $e) {
            $answer = "Message" . $mail->ErrorInfo;
        }
    }
}

