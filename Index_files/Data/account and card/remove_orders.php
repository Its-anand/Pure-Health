<?php
include '../connection.php';
session_start();
if(!isset($_SESSION['logged_in']))
{
    header("location: signin.php");
}

$user_id = $_SESSION['UserLoginId'];

if(isset($_POST['Del_item']))
{
$order_id = $_POST['product_id'];
$query = "SELECT * FROM cart where product_id= '$order_id'";
$result = mysqli_query($con,$query);
$result_fetch=mysqli_fetch_array($result);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $deletequery = "DELETE FROM `cart` WHERE product_id = '$order_id'";
            $query = mysqli_query($con, $deletequery);
            echo"
            <script>
            alert('Product has been removed');
            window.location.href='../account and card/card.php';
            </script>
            "; 
        }
        else
        {
            echo"
            <script>
            alert('Product is already deleted');
            window.location.href='../account and card/card.php';
            </script>
            ";  
        }
    }   
    else
    {
        echo"
        <script>
        alert('Product not found');
            window.location.href='../account and card/card.php';
        </script>
        "; 
    }   
    
}
else
    {
        echo"
        <script>
        alert('Click the cancel button first');
            window.location.href='../account and card/card.php';
        </script>
        "; 
    }
?>