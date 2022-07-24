<?php
include '../connection.php';
session_start();
if(!isset($_SESSION['logged_in']))
{
    header("location: signin.php");
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
            $updatequery = "UPDATE `orders` SET `refund`= 'Pending' WHERE order_id = '$order_id'";
            $updatequery = mysqli_query($con, $updatequery);
            if($updatequery)
            {
            echo"
            <script>
            alert('Refund Process is started');
            window.location.href='./ordered_product.php';
            </script>
            "; 
            }
            else
            {
            echo"
            <script>
            alert('Unable To Proceed');
            window.location.href='./ordered_product.php';
            </script>
            ";  
            }
        }
        else
        {
            echo"
            <script>
            alert('Unknown error');
            window.location.href='./ordered_product.php';
            </script>
            ";  
        }
    }   
    else
    {
        echo"
        <script>
        alert('Product not found');
        window.location.href='./ordered_product.php';
        </script>
        "; 
    }   
    
}
else
    {
        echo"
        <script>
        alert('Click the cancel button first');
        window.location.href='./ordered_product.php';
        </script>
        "; 
    }
?>