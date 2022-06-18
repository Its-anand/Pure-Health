<?php
if(isset($_POST['Submit']))
{
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    if(empty($subject) || empty($email) || empty($msg))
    {
        header('location:../../../index.php?error');
    }
    else 
    {
        $to="do4anand@gmail.com";

        if(mail($to,$subject,$msg,$email))
        {
            header('location:../../../index.php?success');
        }
    }
}
else 
{
    header('location:../../../index.php?error');
}
?>