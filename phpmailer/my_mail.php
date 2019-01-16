<?php  include('../includes/registration_login.php'); ?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$recv = $_GET['mail'];
$usrname=$_GET['usrname'];
$password=$_GET['password'];
//echo $recv;
//$password=$_GET['password'];
//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sabadejuyee21@gmail.com';                 // SMTP username
    $mail->Password = 'ankur-juyee';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sabadejuyee21@gmail.com', 'Juyee Sabade');
    $mail->addAddress($recv);     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Congratulations you have been logged in ';
    $mail->Body    = 'Hello <b>'.$usrname.'</b> you have been logged in to Cinephilia. Your password is <b>'.$password.'</b> for future logins. Enjoy your time here!.';
    //$mail->AltBody = 'your password is <b></b> Kindly change your password before using it';

    $mail->send();
    echo 'Message has been sent';
//    $url=
//    echo '<script type="text/javascript">';
//echo 'window.location.href="../Admin/student_register.php';
//echo '</script>';
//    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


echo "<script>window.location.href='../main.php'</script>";


//header("Location: ../Admin/student_register.php");
//exit();
