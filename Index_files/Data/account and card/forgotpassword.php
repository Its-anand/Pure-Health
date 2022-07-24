<?php
   require('../../Data/connection.php');
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   function sendMail($email,$reset_token)
   {
    require ('../../Data/contactus/PHPMailer/Exception.php');
    require ('../../Data/contactus/PHPMailer/PHPMailer.php');
    require ('../../Data/contactus/PHPMailer/SMTP.php');
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 't4tempdata';                     //SMTP username
        $mail->Password   = 't4temp@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('t4tempdata@gmail.com', 't4tempdata');
        $mail->addAddress($email);     //Add a recipient
    
        //Attachments
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password reset Link - Pure Health';
        $mail->Body = "Click on 'Reset Password' button to reset password-<br><a href='./updatepassword.php?email=$email&reset_token=$reset_token'><button>Rest Password</button></a>";

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
   }

   if(isset($_POST['send-reset-link']))
   {
        $user_email = $_POST['email'];
       $query="SELECT * FROM `registered_users` WHERE `email` = '$user_email'";
       $result=mysqli_query($con,$query);
       if($result)
       {
           
           if(mysqli_num_rows($result)==1)
           {
               $reset_token=bin2hex(random_bytes(16));
               date_default_timezone_set('Asia/kolkata');
               $date=date("Y-m-d");
               $query="UPDATE `registered_users` SET `resettoken` = '$reset_token' , `resettokenexpire`='$date' WHERE `email` = '$user_email'";
               if(mysqli_query($con, $query) && sendMail($user_email, $reset_token))
               {
                echo"
                <script>
                    alert('Password reset link has been sended to email');
                    window.location.href='signin.php';
                </script>
                ";
               }
               else
               {
                echo"
                <script>
                    alert('Unknow Error1');
                    window.location.href='signin.php';
                </script>
                ";
               }
           }
           else
           {
            echo"
            <script>
                alert('Data not found');
                window.location.href='signin.php';
            </script>
            ";
           }
       }
       else
       {
        echo"
        <script>
            alert('Email or Username not registered');
            window.location.href='signin.php';
        </script>
        ";
       }
    }
   
?>