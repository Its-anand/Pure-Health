
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Controller</title>
    <style>
        /* ......... --- ScrollBar Start --- ......... */
::-webkit-scrollbar {

width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
background: rgb(112, 112, 111); 
}

/* Handle */
::-webkit-scrollbar-thumb:hover {
    background: rgb(191, 192, 190); 
     
  }

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: rgb(81, 255, 1); 
     
  }
        body
        {
            margin: 0px;
            padding: 0px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: url("../Image/buy_page_background_image.webp");
        }
        #bg_holder
        {
            width: 100%;    
         }
         #buy_form
        {
            width: 450px;
            text-align: center;
            background: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 17px );
            -webkit-backdrop-filter: blur( 17px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            border-radius: 5px;

        }
        .input_css
        {
           
            border: none;
            border-bottom: 2px solid rgb(3, 255, 16);
            height: 50px;
            width: 80%;
            outline: none;
            font-size: 1rem;
            background: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 17px );
            -webkit-backdrop-filter: blur( 17px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
            margin-bottom: 8%;
            box-sizing: border-box;
        }
        .input_css:hover{
            background: rgba( 255, 255, 255, 0.4 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 17px );
            -webkit-backdrop-filter: blur( 17px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .button_css
        {
            width: 40%;
            height: 50px;
            background: rgba( 0, 255, 32, 0.55 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
            outline: none;
            border: none;
            margin-bottom: 10%;
            box-sizing: border-box;
            font-size: 2.5vh;
            transition: .2s;
        }
        .button_css:active
        {
            background-color: rgb(1, 224, 19);
            font-size: 2.4vh;
        }
        @media screen and (max-width:450px)
        {
            #buy_form
        {
             width: 100%;
             height: 100vh;
             margin: 0px;
             position: unset;
             transform: none;
        }
        #bg_holder
        {
            width: unset;
            padding: unset;
            background: unset;
        }
        }
        @media screen and (max-width:290px)
        {
            .button_css, #button_css, input::placeholder 
            {
            font-size: 5.5vw;
            }
            p
            {
                font-size: 7.5vw;
            }
            .input_css
            {
                width: 96%;
            }
            .button_css
            {
                width: 48%;
            }
        }
    </style>
</head>
<body>
    <div id="bg_holder">
        <div id="buy_form">
                <img src="../Image/profile_img_for_buy_page.jpg" width="100px" height="auto" alt="">
            <form action="" method="post">
                <input type="number" name="body_lotion" placeholder="body lotion *" class="input_css" id="body_lotion" >
                <input type="number"  name="facewash" id="facewash" placeholder="facewash *" class="input_css">
                <input type="number" name="herbal_conditioner" id="herbal conditioner" class="input_css" placeholder="Herbal Conditioner *">
                <input type="number" name="moisturizer" id="moisturizer" placeholder="Moisturizer *" class="input_css">
                <input type="number" name="shampoo" id="shampoo" placeholder="Shampoo *" class="input_css">
                <input type="number" name="soap" id="soap" class="input_css" placeholder="Soap *">
                <input type="submit" value="Change Price" name="submit" class="button_css" >
                <input type="reset" name="reset" class="button_css">
            </form>
        </div>
    </div>
</body>
</html>
<?php
include '../../../Index_files/Data/connection.php';

if(isset($_POST['submit']))
{
    $body_lotion=$_POST['body_lotion'];  
    $facewash=$_POST['facewash']; 
    $herbal_conditioner=$_POST['herbal_conditioner']; 
    $moisturizer=$_POST['moisturizer']; 
    $shampoo=$_POST['shampoo']; 
    $soap=$_POST['soap'];  
    $insertquery ="UPDATE `products` SET `body_lotion_price`='$body_lotion',`facewash_price`='$facewash',`herbal_conditioner_price`='$herbal_conditioner',`moisturizer`='$moisturizer',`shampoo`='$shampoo',`soap`='$soap' WHERE id='1'";
    
    $res = mysqli_query($con, $insertquery);
    if($res){
        ?>
        <script>
            alert("Price has been changed successfully");
            window.location.href='../../../index.php';
        </script>
        <?php
    }
    else
    { 
        ?>
        <script>
            alert("Operation unsuccessful");
            window.location.href='../../../index.php';

        </script>
         <?php
    }
}
?>