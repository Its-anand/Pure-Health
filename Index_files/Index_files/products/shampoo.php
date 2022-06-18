<!DOCTYPE html>
<html lang="en">
<head>
<!--PHP START-->

<?php
include '../Data/connection.php';
$selectquery = "select * from products where id = 6 ";
$query = mysqli_query($con,$selectquery);
$res = mysqli_fetch_array($query);
session_start();
?>
<!--PHP ENDS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $res['product_name']; ?></title>
    <link rel="shortcut icon" type="image/jpg" href="./Index_files/Image/Fevcon_logo.png"/>
    <link rel="stylesheet" href="../css_and_script/products_css.css">
</head>
<body onload="loader()">
    <div id="loading_holder">
    <div id="loading"></div>
</div>
    <script >
        var preloader = document.getElementById('loading_holder');
     function loader()
     {
       preloader.style.display="none";

     }
     </script>

    <div id="product_div_holder">
      <div id="product_div">
<div id="left_div">
    <div id="title_of_product"><h1 ><?php echo $res['product_name']; ?></h1></div>
    <div id="image_holder">
    <?php
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['image'] ).'" alt="facewash">'
    ?></div>
    <h2 id="price_text">Price- <?php echo $res['price']; ?>/-</h2>    
    <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo'
        <div class="form_holder">
        <form action="../Data/account and card/manage_card.php" method="POST">
        <input id="card_add_button" type="submit" name="Add_To_Cart" value="ADD TO CARD">
        <input type="hidden" name="product_id" value="6" >
        </form>
        </div>
      ';
      }
      else
      {
        echo"
        <div class='form_holder_for_loggedin'>
        <form action='../Data/account and card/signin.php' method='get'>
        <input id='card_add_button' type='submit' value='ADD TO CARD'>
        </form>
        </div>
      ";
      }
      ?>
</div>
<div id="right_div">
    <h2 id="heading2">Description</h2>
    <div id="description">
        <ul>
            <li>It is a daily care shampoo.</li>
            <li> Shampoo is made using natural ingredients and make sure that dandruff and excess oil is gently worked on and removed.</li>
            <li>It is a Anti dandruff and Anti hairfall shampoo</li>
            <li>It is suitable for both men and women.</li>
            <li>composition : water ,silk protein ,Arnica , Teach ,Amla , Almond oil and herbal extract.</li>
        </ul>
    </div>
</div>
</div>
    </div>
</body>
</html>