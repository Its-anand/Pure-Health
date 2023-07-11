<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Service testing</title>
    <style>
        body{
            background-color: black;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: sans-serif;
            font-size: 1.2rem;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 30rem;
            height: 30rem;
        }
        input, textarea{
            border: 3px solid white;
            border-radius: 5px;
            height: 2.2rem;
            background-color: black;
            color: #fff;
            padding-left: 10px;
        }
        textarea{
            height: unset;
            resize: vertical;
        }
    </style>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'cloud2.googiehost.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'no-reply@purehealth.c1.is';                     //SMTP username
    $mail->Password   = 'cEtSbX7N[Kp}';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('no-reply@purehealth.c1.is', 'Pure Health');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($email, $name);               //Name is optional
    $mail->addReplyTo('no-reply@purehealth.c1.is', 'Pure Health');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
    <H1>Test Form</H1>
    <form action="" method='POST'>
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email">
        <label for="name">Name</label>
        <input placeholder="Name" type="text" name="name">
        <label for="subject">Subject</label>
        <input placeholder="Subject" type="text" name="subject">
        <label for="message">Message</label>
        <textarea placeholder="Message..." name="message" id="" cols="30" rows="10"></textarea>
        <input  type="submit" name='submit' value="Submit">
    </form>
</body>
</html>