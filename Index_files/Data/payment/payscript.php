<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>    
<?php
require('../../Data/connection.php');
session_start();
$user_id = $_SESSION['username'];
if(!isset($_SESSION['logged_in']))
{
    header("location: ../account and card/signin.php");
}

$order_id = generateNumericOTP(6);
function generateNumericOTP($n) 
{
	
	$generator = "1357902468";
	$result_ = "";
	for ($i = 1; $i <= $n; $i++) {
		$result_ .= substr($generator, (rand()%(strlen($generator))), 1);
	}
	return $result_;
}

if(isset($_POST['buynow']))
{
    $query = "SELECT * FROM `registered_users` WHERE  `username`= '$user_id'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        $a = mysqli_num_rows($result);
        if(mysqli_num_rows($result)==1)
        {
          $result_fetch=mysqli_fetch_assoc($result);
          
          $email = $result_fetch['email'];
          $number = $result_fetch['number'];
          $name = $result_fetch['full_name'];
          $address = $result_fetch['address'];
          $pincode = $result_fetch['pincode'];
          $product_counter = $_POST['product_counter'];
          $product_name =$_POST['product_name'];
          $product_price = $_POST['product_price'];
          $product_id =$_POST['product_id'];
          $api_key = "Add API KEY HERE"; //Add your api key here which you got from razor pay.
          
          date_default_timezone_set('Asia/kolkata');
          $date=date("Y-m-d");

        }
        else
        {
                echo"
                <script>
                    alert('Unable to fetch data');
                    window.location.href='../account and card/card.php';

                </script>
                ";
        }
    }
    else
    {
            echo"
            <script>
                alert('Unable to connect with database');
                window.location.href='../account and card/card.php';
            </script>
            ";
    }
}
else
{
        echo"
        <script>
            alert('Select a product first');
            window.location.href='../account and card/card.php';
        </script>
        ";
}
?>
<style>
body{margin:0; padding:0;}
        #loading {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3BD16F;
          border-bottom: 16px solid #3BD16F;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 1s linear infinite;

        }
        #loading_holder
        {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 100vh;
          transition: opacity 0.7s;
          overflow:  hidden;
        }

        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        @media screen and (max-width:400px) {
            #loading {

            width: 80px;
          height: 80px;
            }
        }

#go_back
{
    border: 2px solid #13365B;
    border-radius: 5%;
    font-weight: bolder;
    background-color: #13365B;
    color: #fff;
    text-align: center;
    width: 189px;
    height: 39px;
    outline: none;
    box-sizing: border-box;
    font-size: 1rem;
    cursor: pointer;

}
#go_back:hover
{
    color: #13365B;
    background-color: #fff;
}
#button_holder
{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%); 
    z-index:0;
    text-align:center;
}
.razorpay-backdrop
{
    background:#fff !important;
}
.razorpay-checkout-frame
{
    background: rgba(0, 0, 0, 0.6)!important;
    
}
.razorpay-payment-button
{
    display:none;
}

</style>

         
<form action="order.php" method="POST">
    <script    
    src="https://checkout.razorpay.com/v1/checkout.js"    
    data-key="<?php echo $api_key;?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys    
    data-amount="<?php echo $product_price * $product_counter *100  ;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.    
    data-currency="INR"// You can accept international payments by changing the currency code. 
    Contact our Support Team to enable International for your account    
    data-buttontext="Pay with Razorpay"    
    data-name="Pure Health Natural Products"    
    data-description="Thank You for using Pure health"    
    data-image="../../Image/logo_header.png"    
    data-prefill.name="<?php echo $user_id;?>"  
    data-prefill.contact="<?php echo $number;?>"
    data-prefill.email="<?php echo $email;?>"    
    data-theme.color="#00ff0c">
        
    </script>
    <input type="hidden" custom="Hidden Element" name="hidden">
    <input type="hidden" name="date" value="<?php echo $date;?>">
    <input type="hidden" name="username" value="<?php echo $name;?>">
    <input type="hidden" name="userid" value="<?php echo $user_id;?>">
    <input type="hidden" name="number" value="<?php echo $number;?>">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <input type="hidden" name="address" value="<?php echo $address;?>">
    <input type="hidden" name="pincode" value="<?php echo $pincode;?>">
    <input type="hidden" name="product_id" value="<?php echo $product_id;?>">
    <input type="hidden" name="order_id" value="<?php echo $order_id;?>">
    <input type="hidden" name="product_name" value="<?php echo $product_name;?>"> 
    <input type="hidden" name="product_counter" value="<?php echo $product_counter ;?>">
    <input type="hidden" name="product_price" value="<?php echo $product_price * $product_counter;?>">
    <input type="hidden" name="payment_status" value="<?php echo '1';?>">
    </form>



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
<div id="button_holder">
    <img src="../../Image/Transaction_Cancelled_image.webp" alt="Transaction_Cancelled_image"/>
     <h2 style="font-family: sans-serif;">Transaction Cancelled</h2>
    <input type='submit' id="go_back" name="ordercancelled" value="GO BACK">
</div>


</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
        document.querySelector('#go_back').addEventListener('click', function () { history.go(-2) })
    })
</script>
</html>