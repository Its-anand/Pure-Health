<?php
include '../connection.php';
session_start();
$username =  $_SESSION['username'];
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}

$user_id = $_SESSION['UserLoginId'];

if(isset($_POST['submit']))
{
$order_id = $_POST['order_id'];
$query = "SELECT * FROM orders WHERE order_id = '$order_id'";
$result = mysqli_query($con,$query);
$result_fetch=mysqli_fetch_array($result);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $updatequery = "UPDATE `orders` SET `delivery_status`= 'Delivered' WHERE order_id = '$order_id'";
            $updatequery = mysqli_query($con, $updatequery);
            if($updatequery)
            {
            echo"
            <script>
            alert('Product Has Been Delivered');
            window.location.href='./orders.php';
            </script>
            "; 
            }
            else
            {
            echo"
            <script>
            alert('Unable To Delivered Product');
            window.location.href='./orders.php';
            </script>
            ";  
            }
        }
        else
        {
            echo"
            <script>
            alert('Product is already Delivered');
            window.location.href='./orders.php';
            </script>
            ";  
        }
    }   
    else
    {
        echo"
        <script>
        alert('Product not found');
        window.location.href='./orders.php';
        </script>
        "; 
    }   
    
}
else
    {
        echo"
        <script>
        alert('Click the cancel button first');
        window.location.href='./orders.php';
        </script>
        "; 
    }
?>