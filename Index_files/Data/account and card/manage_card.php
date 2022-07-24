<?php
include '../connection.php';
session_start();
if(!isset($_SESSION['logged_in']))
{
    header("location: signin.php");
}
$user_id = $_SESSION['UserLoginId'];
if(isset($_POST['Add_To_Cart']))
{
$product_id = $_POST['product_id'];
$query = "SELECT * FROM products where id='$product_id'";
$result = mysqli_query($con,$query);
$result_fetch=mysqli_fetch_array($result);
if($result)
{
if(mysqli_num_rows($result)==1)
{
$user_exist_query="SELECT * FROM `cart` where `user_id`= '$user_id' AND `product_id` ='$product_id'";
$found=mysqli_query($con,$user_exist_query);

if($found){
if(mysqli_num_rows($found)>0)
{
            $found_fetch=mysqli_fetch_assoc($found);
            if($found_fetch['product_id'] == $product_id)
            {
                echo"
                <script>
                    alert('Product already exist');
                    window.location.href='../account and card/card.php';
                </script>
                 ";              
            }
            else
            {
                echo"
                <script>
                    alert('Something went wrong');
                    window.location.href='../account and card/card.php';
                </script>
                 ";
            }    
}

    else{
   $query2="INSERT INTO `cart`(`user_id`, `product_id`) VALUES ('$user_id','$product_id')";
   $insertquery = mysqli_query($con,$query2);
   if($insertquery)
   {
   echo"
   <script>
   alert('Added to card');
    history.go(-1);
   </script>
   ";
    }
    else
    {
   echo"
   <script>
   alert('Couldn't add product);
    window.location.href='../account and card/card.php';
   </script>
   ";
    }
   }
 }
}
else
{
    echo"
    <script>
    alert('No! row selected');
    window.location.href='../account and card/card.php';
    </script>
    ";
}
    
}
else
{
    echo"
    <script>
    alert('No! product found');
    window.location.href='../account and card/card.php';
    </script>
    ";
}

}
   ?>
