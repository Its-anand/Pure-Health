<?php
require('../../Data/connection.php');
session_start();
$user_id = $_SESSION['username'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(!isset($_SESSION['logged_in']))
{
    header("location: ../account and card/signin.php");
}

if(isset($_POST['hidden']))
{
$query = "SELECT * FROM `orders`";
$result = mysqli_query($con,$query);
    if($result)
    {
        $date = $_POST['date'];
        $name = $_POST['username'];
        $username = $_POST['userid'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $product_id = $_POST['product_id'];
        $order_id = $_POST['order_id'];
        $product_name = $_POST['product_name'];
        $product_counter =$_POST['product_counter'];
        $product_price = $_POST['product_price'];
        $delivery_status = $_POST['payment_status'];
        
           function sendMail($email)
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
        $mail->Subject = 'Order Succesful';
        $mail->Body = "
        <p>Thank you for ordering our product</p>
        <center>
        <p><br><br>Product Name<br>$_POST[product_name]<br><br>Product Quantity<br>$_POST[product_counter]<br><br>Product Price<br>$_POST[product_price]<br><br>Delivery Confirmation Otp<br>$_POST[order_id]<br><br><br>Do not delete this mail because this will be the only way to confirm your product also save those OTP numbers at the safer place</p>
        </center>
        ";

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
   }
        
        
             $query="INSERT INTO `orders`(`date`, `name`, `username`, `number`, `email`, `address`, `pincode`, `product_id`, `order_id`, `product_name`, `product_counter`, `product_price`, `payment_status`,`delivery_status`) VALUES ('$date','$name','$username','$number','$email','$address','$pincode','$product_id','$order_id','$product_name','$product_counter','$product_price','1','Pending')";
             $res = mysqli_query($con,$query);
             if($res && sendMail($email))
         {
            echo"
            <script>
            alert('Order successful');
            window.location.href='../account and card/card.php';
            </script>
            ";
         }
         else
         {
             echo"
            <script>
                alert('SORRY :( Unable to place your order');
                window.location.href='../account and card/card.php';

            </script>
            ";
         }
    }
    else
    {
     echo"
    <script>
    alert('Unable to connect to database');
    window.location.href='../account and card/card.php';
    </script>
    ";
     }
}

?>
