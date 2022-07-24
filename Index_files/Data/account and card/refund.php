<?php
include '../connection.php';
session_start();
$username =  $_SESSION['username'];
if(!isset($_SESSION['logged_in']))
{
    header("location: signin.php");
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your orders</title>
<style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
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
                /* ......... --- ScrollBar Start --- ......... */
::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f5f5f5; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgb(192, 192, 192); 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: rgb(145, 145, 145); 
  }
#logout_btn
{
    border: none;
    background: transparent;
    cursor: pointer;
}
.heading
{
    text-align: left;
}
#price
{
    font-size: 1.4rem;
}
#header
{
    background-color: #D9EEE1;
    display: flex;
    justify-content: space-between;
    padding: 0.7rem 1.5rem;
    margin-bottom:2rem;
    width: 100%;
}
#header_holder
{
    display: flex;
    justify-content: center;
}
#left_div, #right_div a
{
    display: flex;
    align-items: center;
        text-decoration: none;
}
#left_div
{
    font-weight: 700;
    justify-content: space-between;
}

.img_holder
{
    margin-right: 5px;
}
.header_img
{
    width: 40px;
}
.logout_svg
{
    width: 20px;
    height: auto;
}
#flex-container
{
  margin: 4% 9.5% 2% 9.5%;

}
#cancel_btn svg
{
    width:23px;
    height:auto;
    fill:red;
}
#cancel_btn button
{
    border: none;
    background: transparent;
    cursor: pointer;

}

table form
{
    margin:0px;
}
table th
{
    height: 5rem;
    padding: 0 2.65rem;

}
table #firstth
{
    padding: 0 6rem;
    background: #d9eee1;
    
}
#header form
{
    margin:0px;
}
#table_holder
{
    width:100%;
    display: flex;
    justify-content: center;   
}
@media screen and (max-width:970px) {

#table_holder 
{   
    justify-content: flex-start;
    overflow:auto;
}
}
@media screen and (max-width:800px) {

main #flex-container 
  {
    margin: 60px 17px 0px 17px;
  }
.buy_all
        {
            justify-content: center;
        }
}
@media screen and (max-width:400px) {
    #left_div
    {
        width: 11rem;
    }
    #header
    {
        padding: 0 1rem;
    }
    .buy_all h1
    {
       font-size: 8vw;
    }
    .order
    {
        width: 8rem;
        height: 35px;
        font-size: 1rem;
    }
}
@media screen and (max-width:300px) {
    #left_div
    {
        width: 8rem;
    }
    #logout_svg
    {
        width: 15px;
    }
    #header h3, #header p
    {
        font-size: 1rem;
    }
    #header
    {
        padding: 0 .5rem;
    }
    .buy_all h1
    {
       font-size: 10vw;
    }
    #flex-container {
    margin: 20px 0px 0px 0px;
}

}

</style>
<body onload="loader()">
    <div id="loading_holder">
    <div id="loading"></div>
</div>
    <script>
        var preloader = document.getElementById('loading_holder');
     function loader()
     {
       preloader.style.display="none";

     }
     </script>
<div id="header_holder"><div id="header">
        <div id="left_div">
            <div class="img_holder"><img src="../../Image/account_logo.png" class="header_img" alt="account_logo"></div>
            <div><p><?php echo $_SESSION['UserLoginId']?></p></div>
        </div>
        <div id="right_div">
     <form style="cursor: pointer;" method="post" action="../../Data/account and card/logout.php">
        <div id="right_div" style="cursor: pointer;" >
            <a href="./logout.php">
            <svg class="logout_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 490.693 490.693" style="enable-background:new 0 0 490.693 490.693;" xml:space="preserve">
                        <g>
                            <path d="M289.6,373.453c-6.613-0.96-12.267,4.16-12.267,10.56v74.667h-256V32.013h256v74.347c0,5.333,3.84,10.133,9.067,10.88     c6.613,0.96,12.267-4.16,12.267-10.56V21.347c0-5.867-4.8-10.667-10.667-10.667H10.667C4.8,10.68,0,15.48,0,21.347v448     c0,5.867,4.8,10.667,10.667,10.667H288c5.867,0,10.667-4.8,10.667-10.667v-85.013C298.667,379,294.827,374.2,289.6,373.453z"></path>
                            <path d="M487.573,237.88L380.907,131.213c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827     l88.427,88.427H128.32c-5.227,0-9.92,3.627-10.773,8.853c-1.173,6.72,4.053,12.48,10.56,12.48H454.4l-88.533,88.427     c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213     l106.667-106.667C491.733,248.867,491.733,242.04,487.573,237.88z"></path>
                        </g></svg>
            <button id="logout_btn" ><h3>Log Out</h3></button></a>
        </div>
</form>
        </div>
    </div></div>
    <div id='table_holder'>
    <table  >
        <tr id='firstth'>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Order Id</th>
        <th>Delivery Status</th>
        <th>Date</th>
        <th>Refund Status</th>
        </tr>
        
        <?php
    $productquery = "SELECT * FROM orders where username='$username' AND delivery_status = 'Delivered'  AND refund = 'Pending'";
    $productresult = mysqli_query($con,$productquery);
if($productresult)
{

    if(mysqli_num_rows($productresult)>0)
    {
        while($res = mysqli_fetch_array($productresult))
        {
        ?>
        <tr>
        <th><?php echo $res['product_name']?></th>
        <th><?php echo $res['product_counter']?></th>
        <th><?php echo $res['product_price']?>&#8377</th> <?php $order_id = $res['order_id'];?>
        <th><?php echo $res['order_id']?></th>
        <th><?php echo $res['delivery_status']?></th>
        <th><?php echo $res['date']?></th>
        <th><?php echo $res['refund']?></th>
        </tr>
        <?php
        }
    }
}
        ?>

    </table>
    </div>
</body>
