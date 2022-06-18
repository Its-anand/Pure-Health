<!DOCTYPE html>
<html lang="en">
<?php 
require('../../Data/connection.php');
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <style>
        body {
            margin: 0;
            background: #00c900;
            padding: 0%
        }

        .signIn_holder,
        .forget_holder{
            background: rgb(255, 255, 255);
            width: 29.6rem;
            height: 100vh;
            padding: 3rem;
            display: flex;
            align-items: center;
            box-sizing: border-box;
            position: absolute;
            top: 0;
        }

        .hidden {
            display: none;
        }
        .leftDiv form,
        .rightDiv form {
            text-align: center;
        }

        input,a {
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
        #br{
            display: none;
        }
        
        #forget,
        #signUp,
        #signIn,
        .forget_btn {
            text-decoration: none;
            color: #00c900;
            font-size: 1.1em;
            cursor: pointer;
            font-family: sans-serif; 
  
               }
         .heading
         {
           font-family: sans-serif; 
           color: #00c900;
         }
        .forget_btn
        {
            margin-left: 5%;
        }
    @media screen and (max-width:475px) {
        body {
            background: #fff;
        }
        .signIn_holder{
            width: 100%;
            padding: 2rem;
        }
    }
    @media screen and (max-width:300px) {
            #br{
            display: inline;
        }
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
     </script>

    <div id="form_div">
        <div class="signIn_holder">
            <div class="leftDiv">
            <h2 class='heading'>Admin Login</h2>
                <form method="post">
                    <input type="text" placeholder="Email or Username*" name="email_username" class="form_input" require>
                    <input type="password" placeholder="Password *" name="password" class="form_input" require>
                    <input type="submit" name="Signin" value="Submit" id="submit_btn" class="form_btn">
                </form>
            </div>
        </div>
    </div>
</body>
<?php
#This is the code for login
if(isset($_POST['Signin']))
{
    $query = "SELECT * FROM `admin_login` WHERE  `email`= '$_POST[email_username]' OR `Admin_name`='$_POST[email_username]' AND `Admin_password`='$_POST[password]'";

    $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1)
        {
        $result_fetch=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['AdminLoginId']=$result_fetch['Admin_name'];
        header("location: AdmiPanel.php");
        }
        else
        {
        echo"
            <script>
                alert('Looks like you are not admin');
            </script>
        ";
        }

}
?>
</html>
