<!DOCTYPE html>
<html lang="en">
<?php 
require('../../Data/connection.php');

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

        #loading_holder {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            transition: opacity 0.7s;
            overflow: hidden;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @media screen and (max-width:400px) {
            #loading {

                width: 80px;
                height: 80px;
            }
        }

        .signIn_holder,
        .forget_holder {
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

        #br {
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

        .heading {
            font-family: sans-serif;
            color: #00c900;
        }

        .forget_btn {
            margin-left: 5%;
        }

        @media screen and (max-width:475px) {
            body {
                background: #fff;
            }

            .signIn_holder {
                width: 100%;
                padding: 2rem;
            }
        }

        @media screen and (max-width:300px) {
            #br {
                display: inline;
            }
        }
    </style>
</head>

<body onload="loader()">
    <div id="loading_holder">
        <div id="loading"></div>
    </div>
    <script>
        var preloader = document.getElementById('loading_holder');

        function loader() {
            preloader.style.display = "none";

        }
    </script>
    <div id="form_div">
        <div class="signIn_holder">
            <div class="leftDiv">
                <h2 class='heading'>Create Account</h2>
                <form action="login_register.php" method="post">
                    <input type="text" placeholder="Full Name *" name="fullname" class="form_input" require>
                    <input type="text" placeholder="Username *" name="username" class="form_input" require>
                    <input type="number" placeholder="Number *" name="number" class="form_input" require>
                    <input type="email" placeholder="email *" name="email" class="form_input" require>
                    <input type="password" placeholder="Password *" name="password" class="form_input" require>
                    <input type="text" placeholder="address *" name="address" class="form_input" require>
                    <input type="text" placeholder="pincode *" name="pincode" class="form_input" require>
                    <input type="submit" name="register" value="Submit" id="submit_btn" class="form_btn">
                    <a class="form_btn" href="./signin.php" id='signUp'>Sign in</a><br id="br">
                    <a class="form_btn forget_btn" href="../../../index.php" id="forget">Home</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>