<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create A New password</title>
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

        .signUp_holder {
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


        .leftDiv form {
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
            background-color: #179e73;
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
        @media screen and (max-width:475px) {
            body {
            background: #fff;
        }
        .signUp_holder{
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

     }
     </script>
    <?php
    require('../../Data/connection.php');
    if(isset($_GET['email']) && isset($_GET['reset_token']))
    {
        date_default_timezone_set('Asia/kolkata');
        $date=date("Y-m-d");
        $query="SELECT * FROM `registered_users` WHERE `email` ='$_GET[email]' AND `resettoken`='$_GET[reset_token]' AND `resettokenexpire`='$date'";
        $result=mysqli_query($con,$query);
        if($result)
        {
            if(mysqli_num_rows($result)==1)
            {
                echo"
                <div class='signUp_holder'>
                <div class='leftDiv'>
                <h2 class='heading'>Create New Password</h2>
                    <form  method='post'>                    
                        <input type='password' placeholder='New Password *' name='Password' class='form_input' required>
                        <input type='submit' name='updatepassword' value='Update Password' id='submit_btn' class='form_btn' >
                        <input type='hidden' name='email' value='$_GET[email]'>
                        <a class='form_btn' href='./signin.php' id='signIn'>Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    
                ";
            }
            else
            {
                echo"
                <script>
                    alert(' Invalid or expired link');
                    window.location.href='signin.php';
                </script>
                ";
            }
        }
        else
        {
            echo"
            <script>
                alert('Unknowwn Error!');
                window.location.href='signin.php';
            </script>
            ";
        }
    }
    ?>

    <?php 
    if(isset($_POST['updatepassword']))
    {
        $pass=password_hash($_POST['Password'],PASSWORD_BCRYPT);
        $update ="UPDATE `registered_users` SET `password`='$pass',`resettoken`= NULL,`resettokenexpire`= NULL WHERE `email`='$_POST[email]'";
        if(mysqli_query($con,$update))
        {
            echo"
            <script>
                alert('Password Updated successfully');
                window.location.href='signin.php';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
                alert('Unknowwn Error!');
                window.location.href='signin.php';
            </script>
            ";
        }
    }
    ?>
</body>
</html>