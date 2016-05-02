<?php

    require("../includes/config.php");
  
    $octopi = 'http://octopi.local/api/printer?exclude=history,sd&limit=2';
    $key = '&apikey=7C99F5357B0249DBA086A1422344AAB6';

    $octopi .= $key;
    //echo ($octopi);
    $state = file_get_contents($octopi);

    $printer = (json_decode($state,true));

    $_SESSION['id'] = 1;
    $_SESSION['printer_state'] = $printer;

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jflifestyles@gmail.com';                 // SMTP username
$mail->Password = 'se645DJF';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($_POST['email'], 'Joe User');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

//$body = var_export($_SESSION['printer_state']['state']['flags']['error'], true);


$mail->Subject = 'Project Upsdate';
$mail->Body    = $_SESSION['email_body'];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $_SESSION['email_sent'] = 'Message has been sent';
}
    
    render("portfolio.php",["title" => "My Printer State"]);

?>