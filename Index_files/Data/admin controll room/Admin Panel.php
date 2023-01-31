<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location: Admin Login.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <title>Admin panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
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

        #bgimg {
            height: 100vh;
            width: 100%;
        }

        #svg_content_holder {
            position: relative;
        }

        a {
            text-decoration: none;
        }

        #button_holder {
            height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            flex-wrap: wrap;
            position: absolute;
            background:#000;
            align-content: flex-start;
            justify-content: center;
        }

        #submit_btn {
            height: 3rem;
            width: 15rem;
            background-color: #000;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            margin-bottom: 2rem;
            transition-duration: 0.4s;
            text-align:left;
            padding-left:1.5rem;
        }

        #logout_btn {
            cursor: pointer;
            border: none;
            background-color: #000;
            color: #fff;
            height: unset:
        }

        #submit_btn:hover {
            background-color: #fff;
            color: #000;
            border: 3px solid black;
            transition-duration: 0.4;

        }

        #left_div,
        #right_div a {
            display: flex;
            align-items: center;
            color: #fff;
        }

        #left_div {
            font-weight: 700;
            justify-content: space-between;
        }

        header {
            background: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 1.5rem;
        }

        .header_img {
            width: 40px;
            border: 2px solid #fff;
            border-radius: 50%;
            padding: 1px 1px 0px 1px;
        }

        .logout_svg {
            width: 20px;
            height: auto;
            fill: #fff;
        }

        .bgsvg1 {
            height: 5rem;
        }

        #flex-container {
            margin: 4% 9.5% 2% 9.5%;

        }

        .img_holder {
            margin-right: 5px;
        }

        @media screen and (max-width:400px) {
            #left_div {
                width: 11rem;
            }

            header {
                padding: 0 1rem;
            }

            .buy_all h1 {
                font-size: 8vw;
            }

            .order {
                width: 8rem;
                height: 35px;
                font-size: 1rem;
            }
        }

        @media screen and (max-width:300px) {
            #left_div {
                width: 8rem;
            }

            #logout_svg {
                width: 15px;
            }

            header h3,
            header p {
                font-size: 1rem;
            }

            header {
                padding: 0 .5rem;
            }

            .buy_all h1 {
                font-size: 10vw;
            }

            #flex-container {
                margin: 20px 0px 0px 0px;
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
            setTimeout(function () {
                navholder.style.display = "none";
            }, 700);
        }
    </script>

    <div id="bgimg">
        <header>
            <div id="left_div">
                <div class="img_holder"><img src="../../Image/account_logo.png" class="header_img" alt="account_logo">
                </div>
                <div>
                    <p><?php echo $_SESSION['AdminLoginId']?></p>
                </div>
            </div>
            <form style="cursor: pointer;" method="post" action="../../Data/admin controll room/logout.php">
                <div id="right_div" style="cursor: pointer;">
                    <a href="../../Data/admin controll room/logout.php">
                        <svg class="logout_svg" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                            viewBox="0 0 490.693 490.693" style="enable-background:new 0 0 490.693 490.693;"
                            xml:space="preserve">
                            <g>
                                <path
                                    d="M289.6,373.453c-6.613-0.96-12.267,4.16-12.267,10.56v74.667h-256V32.013h256v74.347c0,5.333,3.84,10.133,9.067,10.88     c6.613,0.96,12.267-4.16,12.267-10.56V21.347c0-5.867-4.8-10.667-10.667-10.667H10.667C4.8,10.68,0,15.48,0,21.347v448     c0,5.867,4.8,10.667,10.667,10.667H288c5.867,0,10.667-4.8,10.667-10.667v-85.013C298.667,379,294.827,374.2,289.6,373.453z">
                                </path>
                                <path
                                    d="M487.573,237.88L380.907,131.213c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827     l88.427,88.427H128.32c-5.227,0-9.92,3.627-10.773,8.853c-1.173,6.72,4.053,12.48,10.56,12.48H454.4l-88.533,88.427     c-4.267,4.053-4.373,10.88-0.213,15.04c4.053,4.267,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213     l106.667-106.667C491.733,248.867,491.733,242.04,487.573,237.88z">
                                </path>
                            </g>
                        </svg>
                        <button id="logout_btn">
                            <h3>Log Out</h3>
                        </button></a>
                </div>
            </form>
        </header>
        <div id="svg_content_holder">

            <div id="button_holder">
                <form target="_blank" action="./orders.php" method="post"><button onclick="postYourAdd()" value="submit" id="submit_btn"
                        class="form_btn">All Orders</button></form>
                <form target="_blank" action="./refunds.php" method="post"><button onclick="postYourAdd()" value="submit" id="submit_btn"
                        class="form_btn">Refunds List</button></form>
                <form target="_blank" action="./refundlist.php" method="post"><button onclick="postYourAdd()" value="submit" id="submit_btn"
                        class="form_btn">Refunded Products</button></form>
            </div>
        </div>
        <iframe data-src="http://www.w3schools.com" width="500" height="200" frameborder="0"></iframe>
    </div>
</body>

</html>