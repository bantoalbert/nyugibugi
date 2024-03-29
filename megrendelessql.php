<?php

require ('includes/dbcon.php');

$nev = "";
$email = "";
$telefonszam = "";
$honnan = "";
$hova = "";
$datum = "";
$uzenet = "";
$ErrorFlag = false;

if (isset($_POST["nev"])) {
    if ($_POST["nev"] != "") {
        $nev = $_POST["nev"];
    }
}
if (isset($_POST["email"])) {
    if ($_POST["email"] != "") {
        $email = $_POST["email"];
    }
}
if (isset($_POST["telefonszam"])) {
    if ($_POST["telefonszam"] != "") {
        $telefonszam = $_POST["telefonszam"];

    }
}

if (isset($_POST["honnan"])) {
    if ($_POST["honnan"] != "") {
        $honnan = $_POST["honnan"];

    }
}
if (isset($_POST["hova"])) {
    if ($_POST["hova"] != "") {
        $hova = $_POST["hova"];
    }
}

if (isset($_POST["datum"])) {
    if ($_POST["datum"] != "") {
        $datum = $_POST["datum"];
    }
}

if (isset($_POST["uzenet"])) {
    if ($_POST["uzenet"] != "") {
        $uzenet = $_POST["uzenet"];
    }
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["submit"])) {
    if ($ErrorFlag == false) {
        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        }
    } 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->addAddress('nyugibugikoltoztetes@gmail.com', 'Nyugi Bugi');
        $mail->setFrom($email, $nev);
        $mail->Subject = 'Megrendeles';
        $mail->isHTML(TRUE);
        $mail->Body = '<html>'.$email.'<br>'.$telefonszam.'<br>'.$uzenet.'<br> Mikor:'.$datum.'<br>Honnan:'.$honnan.'<br>Hova'.$hova.'</html>';
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('location:index.php');
        }
    }
}
?>