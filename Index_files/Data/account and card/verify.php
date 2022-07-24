<?php
require('../../Data/connection.php');
if(isset($_GET['email']) && isset($_GET['v_code']))
{
    $query = "SELECT *FROM `registered_users`WHERE `email`='$_GET[email]' and `verification_code`= '$_GET[v_code]'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0)
            {
                $update="UPDATE `registered_users` SET `is_verified`='1' where `email`='$result_fetch[email]'";
                if(mysqli_query($con,$update))
                {
                    echo"
                    <script>
                        alert('Email verification is successful');
                        window.location.href='signin.php';
                    </script>
                     ";                 
                }
                else
                {
                        echo"
                        <script>
                            alert('Unknown Error');
                            window.location.href='signin.php';
                        </script>
                         ";
                }
            }
            else
            {
                echo"
                <script>
                    alert('Email is already verified');
                    window.location.href='signin.php';
                </script>
                 ";
            }
        }
    }
    else
    {
        echo"
        <script>
            alert('Unknown Error');
            window.location.href='signin.php';
        </script>
         ";
    }
}
?>