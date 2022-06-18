<!DOCTYPE html>
<html lang="en">
<?php 
include '../../../Index_files/Data/connection.php';
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: Admin Login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Controller</title>
    <style>
        body {
            margin: 0;
            background: #00c900;
            padding: 0%
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

        .control_panel {
            background: rgb(255, 255, 255);
            width: 29.6rem;
            height:100vh;
            padding: 3rem;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            position: absolute;
            top: 0;
        }


        .form_holder form {
            text-align: center;
        }

        input,
        a {
            margin-bottom: 2rem;
        }

        .form_input {
            width: 100%;
            height: 30px;
            border: none;
            border-bottom: 1px solid #00c900;
            outline: none;
        }

        .form_btn {
            width: 100%;
            height: 30px;
        }

        #submit_btn:hover {
            background-color: #019401;
        }

        #submit_btn {
            height: 35px;
            background-color: #00c900;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;

        }
        .heading
         {
           font-family: sans-serif; 
           color: #00c900;
         }
        #signIn,
        #forget_btn {
            text-decoration: none;
            color: #00c900;
            font-size: 1.1em;
            cursor: pointer;
            font-family: sans-serif;
        }

        .image_loader{
            color: #00c900;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            width:100%;

    }
        @media screen and (max-width:475px) {
            body {
            background: #fff;
        }
        .control_panel{
            width: 100%;
            padding: 2rem;
            height: unset;
        }

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
       setTimeout(function() {
		navholder.style.display="none";
	 }, 700);
     }

        <div class="control_panel">
            <div class="form_holder">
            <h2 class='heading'>Price Controller</h2>
                <form method="post">                    
                <input type="text" name="body_lotion" placeholder="Product Name *" class="form_input">
                <input type="number"  name="facewash" placeholder="Product Price *" class="form_input">
                <input type="file" name="herbal_conditioner" class="image_loader">
                <input type="submit" value="Change Price" name="submit" id="submit_btn"  class="form_btn" >
                <input type="reset" name="reset"  id="submit_btn" class="form_btn">
                <a class="form_btn" href="Admin Login.php" id="signIn">Go Back</a>
                </form>
            </div>
        </div>
    </div>
</body>


</html>