<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'abhishekchatruvedi291@gmail.com'; // Your gmail
        $mail->Password = 'cchr wfzw efqr daoj'; // Your gmail app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('abhishekchatruvedi291@gmail.com', 'Your Name'); // Your gmail and optional name
        $mail->addAddress(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)); // Validate email

        // Content
        $mail->isHTML(true);
        $mail->Subject = htmlspecialchars($_POST["subject"]);
        $mail->Body = nl2br(htmlspecialchars($_POST["message"])); // Convert new lines to <br>

        $mail->send();
        echo "<script>
                alert('Sent Successfully');
                document.location.href = 'index.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
                document.location.href = 'index.php';
              </script>";
    }
}
?>
