<!DOCTYPE html>
<html lang="en">
<?php
include '../connection.php';
session_start();
if(!isset($_SESSION['logged_in']))
{
    header("location: signin.php");
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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


  /* ......... --- Header Section --- ......... */
        .buy_all
        {
            
    width: 100%;
    height: 20rem;
    display: flex;
    background-color: #D9EEE1;
    flex-direction: column;
    justify-content: flex-end;
        }
        .order
        {
        border:3px solid #00c900;
        font-weight: 400;
        color: #fff;
        background-color: #00c900;
        border-radius: 30px;
        width: 10rem;
        height: 37px;
        outline: none;
        font-size: 1.1rem;
        cursor: pointer;
        transition-duration: 0.4s;

        }
        .order:hover{
        color: #00c900;
        background-color: aliceblue;
        transition-duration: 0.4s;

        }
        h1:first-child
        {
            margin: 0px;
            text-align: left;
        }
        .cards
        {
    margin-top: 10rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    flex-wrap: wrap;
        }
    .bgsvg1
{
  height: 5rem;

}
    a{
    color: rgb(20, 20, 20);
    text-decoration: none;
    }
.cards .commanCss
{position: relative;
    max-width: 19.375rem;
    box-sizing: border-box;
    height: 31.25rem;
    box-shadow: 2px 2px 27px #e1e1e3, -15px -15px 27px #ffffff;
    background-color: #fff;
    margin-bottom: 55px;
    border-radius: 15px;
    line-height: 1.38;
}
.item_holder
{
    text-align: center;
    padding: 0 12px;
}
.item_holder h2:first-child
{
    text-align: left;
}
    .cards img 
{
    max-width: 200px;
    max-height: 200px;
    margin: auto;
    display: block;
    text-align: center;
    background-position: center;
    border-top-right-radius: 20px;
    border-top-left-radius: 20px;
}
#logout_btn
{
    border: none;
    background: transparent;
    cursor: pointer;
}
.item_counter{
    width: 13rem;
    height: 2.5em;
    margin-bottom: 1.8em;
    outline: none;
    box-sizing: border-box;
    border-radius: 30px;
    text-align: center;

}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.buy_btn
{
    border:3px solid #00c900;
    color: #fff;
    background-color: #00c900;
    width: 10rem;
    height: 37px;
    outline: none;
    font-size: 1.1rem;
    cursor: pointer;
    border-radius: 30px;
    width: 10rem;
    transition-duration: 0.4s;

}
#cancel_btn
{
    position: absolute;
    right: 7px;
    top: 7px; 
    border:none;
    background:#fff;
    border-radius:50%;
}
#cancel_btn button
{
    border: none;
    background: #fff;
    padding: 1px 1.2px 0px 1px;
    height: 2.05rem;
    border-radius: 50%;
    box-shadow: rgb(50 50 93 / 25%) 0px 2px 5px -1px, rgb(0 0 0 / 30%) 0px 1px 3px -1px;
    cursor: pointer;

}
#cancel_btn button svg
{
    fill:#000000;
    width:30px;
    height:30px;
}
#cancel_btn button svg:hover
{
    fill:#f93e45;
}
.buy_btn:hover
{
    font-size: 1.15rem;
    transition-duration: 0.4s;
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
    background-color: #00C900;
    display: flex;
    width: 100%;
    height: 5rem;
    justify-content: space-between;
    align-items: center;
    padding: 0 1.5rem;
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
#submit_btn:hover
{
  background-color: #fff;
  color: #00C900;
  border:3px solid #00C900;
  transition-duration: 0.4;
 
}
        #left_div, #right_div a
{
    display: flex;
    align-items: center;
    color: #fff;
}
 #button_holder
            {
                height: 100vh;
                width: 100%;
                display: flex;
                 align-items: center;
               flex-direction: column;
                  flex-wrap: wrap;
                  justify-content: center;
                  position: absolute;
                  top:0px;
            }

        #submit_btn {
            height: 3rem;
            width:15rem;
            background-color: #00C900;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            margin-bottom:2rem;
            transition-duration: 0.4s;
        }
       #left_div p
        {
            color:#000;
        }
    </style>
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

    <div id="header_holder">
        <div id="header" style='z-index:10;'>
        <div id="left_div">
            <div class="img_holder"><img src="../../Image/account_logo.png" class="header_img" alt="account_logo"></div>
            <div><p><?php echo $_SESSION['UserLoginId']?></p></div>
        </div>
        <div id="right_div">
     <form style="cursor: pointer;" method="post" action="../../Data/account and card/logout.php">
        <div id="right_div" style="cursor: pointer;">
            <a href="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/logout.php">
            <svg class="logout_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 490.693 490.693" style="enable-background:new 0 0 490.693 490.693;" xml:space="preserve">
                        <g>
                            <path d="M289.6,373.453c-6.613-0.96-12.267,4.16-12.267,10.56v74.667h-256V32.013h256v74.347c0,5.333,3.84,10.133,9.067,10.88     c6.613,0.96,12.267-4.16,12.267-10.56V21.347c0-5.867-4.8-10.667-10.667-10.667H10.667C4.8,10.68,0,15.48,0,21.347v448     c0,5.867,4.8,10.667,10.667,10.667H288c5.867,0,10.667-4.8,10.667-10.667v-85.013C298.667,379,294.827,374.2,289.6,373.453z"></path>
                            <path d="M487.573,237.88L380.907,131.213c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827     l88.427,88.427H128.32c-5.227,0-9.92,3.627-10.773,8.853c-1.173,6.72,4.053,12.48,10.56,12.48H454.4l-88.533,88.427     c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213     l106.667-106.667C491.733,248.867,491.733,242.04,487.573,237.88z"></path>
                        </g></svg>
            <button id="logout_btn"><h3>Log Out</h3></button></a>
        </div>
</form>
        </div>
    </div>
    </div>
        <div id="button_holder">
        <form target="_blank" action="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/card.php" method="post"><button value="submit" id="submit_btn" class="form_btn">Cards</button></form>
        <form target="_blank" action="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/orderlist.php" method="post"><button value="submit" id="submit_btn" class="form_btn">Orders</button></form>
        <form target="_blank" action="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/ordered_product.php" method="post"><button value="submit" id="submit_btn" class="form_btn">Delivered Products</button></form>
        <form target="_blank" action="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/refund.php" method="post"><button value="submit" id="submit_btn" class="form_btn">Refund Request</button></form>
        <form target="_blank" action="https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/refund%20list.php" method="post"><button value="submit" id="submit_btn" class="form_btn">Refund Successful</button></form>
        

</div>
</body></html>