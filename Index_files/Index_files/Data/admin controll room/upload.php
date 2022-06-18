<?php 
include '../../../Index_files/Data/connection.php';
if(isset($_POST['submit']))
{   

            $destfile = "https://pure-health-natural-products.000webhostapp.com/Index_files/Data/admin%20controll%20room/upload/";
    $product_name=$_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $fulldescription=$_POST['fulldescription'];
    
    /* This code was commented*/
    if($fileerror == 0){
        $destfile = 'upload/'.$filename;
        move_uploaded_file($filepath, $destfile);
        echo"$destfile";
    }
    /*Till here*/
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {
move_uploaded_file($_FILES['image']['tmp_name'],"$destfile/".$_FILES['image']['name']);
}
}
    $query="INSERT INTO `products`(`image`, `product_name`, `price`, `description`, `fulldescription`) VALUES ('$destfile','$product_name','$price','$description','$fulldescription')";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo"
        <script>
        alert('Image Uploaded Successfully');
        </script>
        ";
    }
    else
    {
        echo"
        <script>
        alert('Upload Failed');
        </script>
        ";
    }
}
?>