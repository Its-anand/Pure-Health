<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Index_files/css_and_script/index_css.css">
  <title>Pure Health</title>
  <link rel="shortcut icon" type="image/jpg" href="./Index_files/Image/Fevcon_logo.png" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <?php
include './Index_files/Data/connection.php';
session_start();
?>
</head>

<body onload="loader()">
  <div id="loading">

  </div>
  <header>
    <div id="fheader">
      <div id='logo'>
        <span><img src="./Index_files/Image/logo_header.png" alt=""></span><span class="logo-text">Natural</span><span
          class="logo-text"><br>Products</span>
      </div>
      <input type="button" value="ACCOUNT" id="account_button">
      <div id="account">
        <div id="account_img_holder">
          <img src="./Index_files/Image/account_logo.png" class="account_img" alt="">
        </div>
        <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
        echo"
        <div id='account_details_holder'>

        <a href='./Index_files/Data/account and card/profile.php'>
        <button class='account_button_signin' type='button'>
          My Profile
        </button>
        </a>
        <br>
        <a href='./Index_files/Data/account and card/logout.php'>
        <button class='account_button_signin' type='button'>
          Logout
        </button>
        </a>
      </div>
      ";
      }
      else
      {
        echo"
        <div id='account_details_holder'>

        <a href='./Index_files/Data/account and card/signin.php'>
        <button class='account_button_signin' type='button'>
          Sign in
        </button>
        </a>
        <br>
        <a href='./Index_files/Data/account and card/signup.php'>
        <button class='account_button_signin' type='button'>
          Sign up
        </button>
        </a>
      </div>
      ";
      }
      ?>

      </div>
    </div>
    <span id='nav-button' style="z-index:10;" class="navopen" onclick="openmenu()"><svg style="cursor: pointer;"
        xmlns="http://www.w3.org/2000/svg" fill="#00A700" viewBox="0 0 50 50">
        <path
          d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z" />
        </svg></span>
    <div id="navholder" style="z-index:10; ">
      <nav id="menu">
        <span id='nav-button' class="navclose" onclick="closemenu()"><svg style="cursor: pointer;"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#00A700" version="1.1"
            id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
            xml:space="preserve">
            <g>
              <path
                d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
            </g>
          </svg></span>
        <ul>
          <a href="Index.php">
            <li class="nav-bar">Home</li>
          </a>
          <a href="#post">
            <li class="nav-bar">Buy Products</li>
          </a>
          <a href="#aboutus-holder">
            <li class="nav-bar">About Us</li>
          </a>
          <a href="#footer1">
            <li class="nav-bar">Contact Us</li>
          </a>
          <a href="./Index_files/Data/admin controll room/Admin Panel.php">
            <li class="nav-bar">Admin Panel</li>
          </a>
          <a href="Index_files/Navigation_bar/Privacy Policy.html">
            <li class="nav-bar far-far">Privacy Policy</li>
          </a>
          <a href="Index_files/Navigation_bar/Terms and condition.html">
            <li class="nav-bar">Terms And Condition</li>
          </a>
          <li>
            <table id="table1">
              <tr>
                <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
          echo"
          <td><a href='./Index_files/Data/account and card/profile.php'><input type='button' value='My Profile'/></a></td>
          <td><a href='./Index_files/Data/account and card/logout.php'><input type='button' value='Logout'/></a></td>
        ";
      }
      else{
      echo"
      <td><a href='./Index_files/Data/account and card/signin.php'><input type='button' value='Sign In'/></a></td>
      <td><a href='./Index_files/Data/account and card/signup.php'><input type='button' value='Sign Up'/></a></td>
    ";
      }
      ?>
              </tr>
            </table>
          </li>
          <li>
            <table id="table2">
              <tr>
                <td>
                  <a href="https://www.facebook.com/"><svg id="facebook" class="social-media-page"
                      xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50">
                      <path
                        d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 25.832031 46 A 1.0001 1.0001 0 0 0 26.158203 46 L 31.832031 46 A 1.0001 1.0001 0 0 0 32.158203 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 33 44 L 33 30 L 36.820312 30 L 38.220703 23 L 33 23 L 33 21 C 33 20.442508 33.05305 20.398929 33.240234 20.277344 C 33.427419 20.155758 34.005822 20 35 20 L 38 20 L 38 14.369141 L 37.429688 14.097656 C 37.429688 14.097656 35.132647 13 32 13 C 29.75 13 27.901588 13.896453 26.71875 15.375 C 25.535912 16.853547 25 18.833333 25 21 L 25 23 L 22 23 L 22 30 L 25 30 L 25 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 32 15 C 34.079062 15 35.38736 15.458455 36 15.701172 L 36 18 L 35 18 C 33.849178 18 32.926956 18.0952 32.150391 18.599609 C 31.373826 19.104024 31 20.061492 31 21 L 31 25 L 35.779297 25 L 35.179688 28 L 31 28 L 31 44 L 27 44 L 27 28 L 24 28 L 24 25 L 27 25 L 27 21 C 27 19.166667 27.464088 17.646453 28.28125 16.625 C 29.098412 15.603547 30.25 15 32 15 z" />
                      </svg></a>
                </td>
                <td>
                  <a href="https://www.instagram.com/"><svg id="instagram" class="social-media-page"
                      xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50">
                      <path
                        d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z" />
                      </svg></a>
                </td>
                <td>
                  <a href="https://twitter.com/"><svg id="twitter" class="social-media-page"
                      xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 50 50">
                      <path
                        d="M 34.21875 5.46875 C 28.238281 5.46875 23.375 10.332031 23.375 16.3125 C 23.375 16.671875 23.464844 17.023438 23.5 17.375 C 16.105469 16.667969 9.566406 13.105469 5.125 7.65625 C 4.917969 7.394531 4.597656 7.253906 4.261719 7.277344 C 3.929688 7.300781 3.632813 7.492188 3.46875 7.78125 C 2.535156 9.386719 2 11.234375 2 13.21875 C 2 15.621094 2.859375 17.820313 4.1875 19.625 C 3.929688 19.511719 3.648438 19.449219 3.40625 19.3125 C 3.097656 19.148438 2.726563 19.15625 2.425781 19.335938 C 2.125 19.515625 1.941406 19.839844 1.9375 20.1875 L 1.9375 20.3125 C 1.9375 23.996094 3.84375 27.195313 6.65625 29.15625 C 6.625 29.152344 6.59375 29.164063 6.5625 29.15625 C 6.21875 29.097656 5.871094 29.21875 5.640625 29.480469 C 5.410156 29.742188 5.335938 30.105469 5.4375 30.4375 C 6.554688 33.910156 9.40625 36.5625 12.9375 37.53125 C 10.125 39.203125 6.863281 40.1875 3.34375 40.1875 C 2.582031 40.1875 1.851563 40.148438 1.125 40.0625 C 0.65625 40 0.207031 40.273438 0.0507813 40.71875 C -0.109375 41.164063 0.0664063 41.660156 0.46875 41.90625 C 4.980469 44.800781 10.335938 46.5 16.09375 46.5 C 25.425781 46.5 32.746094 42.601563 37.65625 37.03125 C 42.566406 31.460938 45.125 24.226563 45.125 17.46875 C 45.125 17.183594 45.101563 16.90625 45.09375 16.625 C 46.925781 15.222656 48.5625 13.578125 49.84375 11.65625 C 50.097656 11.285156 50.070313 10.789063 49.777344 10.445313 C 49.488281 10.101563 49 9.996094 48.59375 10.1875 C 48.078125 10.417969 47.476563 10.441406 46.9375 10.625 C 47.648438 9.675781 48.257813 8.652344 48.625 7.5 C 48.75 7.105469 48.613281 6.671875 48.289063 6.414063 C 47.964844 6.160156 47.511719 6.128906 47.15625 6.34375 C 45.449219 7.355469 43.558594 8.066406 41.5625 8.5 C 39.625 6.6875 37.074219 5.46875 34.21875 5.46875 Z M 34.21875 7.46875 C 36.769531 7.46875 39.074219 8.558594 40.6875 10.28125 C 40.929688 10.53125 41.285156 10.636719 41.625 10.5625 C 42.929688 10.304688 44.167969 9.925781 45.375 9.4375 C 44.679688 10.375 43.820313 11.175781 42.8125 11.78125 C 42.355469 12.003906 42.140625 12.53125 42.308594 13.011719 C 42.472656 13.488281 42.972656 13.765625 43.46875 13.65625 C 44.46875 13.535156 45.359375 13.128906 46.3125 12.875 C 45.457031 13.800781 44.519531 14.636719 43.5 15.375 C 43.222656 15.578125 43.070313 15.90625 43.09375 16.25 C 43.109375 16.65625 43.125 17.058594 43.125 17.46875 C 43.125 23.71875 40.726563 30.503906 36.15625 35.6875 C 31.585938 40.871094 24.875 44.5 16.09375 44.5 C 12.105469 44.5 8.339844 43.617188 4.9375 42.0625 C 9.15625 41.738281 13.046875 40.246094 16.1875 37.78125 C 16.515625 37.519531 16.644531 37.082031 16.511719 36.683594 C 16.378906 36.285156 16.011719 36.011719 15.59375 36 C 12.296875 35.941406 9.535156 34.023438 8.0625 31.3125 C 8.117188 31.3125 8.164063 31.3125 8.21875 31.3125 C 9.207031 31.3125 10.183594 31.1875 11.09375 30.9375 C 11.53125 30.808594 11.832031 30.402344 11.816406 29.945313 C 11.800781 29.488281 11.476563 29.097656 11.03125 29 C 7.472656 28.28125 4.804688 25.382813 4.1875 21.78125 C 5.195313 22.128906 6.226563 22.402344 7.34375 22.4375 C 7.800781 22.464844 8.214844 22.179688 8.355469 21.746094 C 8.496094 21.3125 8.324219 20.835938 7.9375 20.59375 C 5.5625 19.003906 4 16.296875 4 13.21875 C 4 12.078125 4.296875 11.03125 4.6875 10.03125 C 9.6875 15.519531 16.6875 19.164063 24.59375 19.5625 C 24.90625 19.578125 25.210938 19.449219 25.414063 19.210938 C 25.617188 18.96875 25.695313 18.648438 25.625 18.34375 C 25.472656 17.695313 25.375 17.007813 25.375 16.3125 C 25.375 11.414063 29.320313 7.46875 34.21875 7.46875 Z" />
                      </svg></a>
                </td>
              </tr>
            </table>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div id='bgimg'>
      <div id="search" class="search-input">
        Your health <br />is our priority <br>
        <input type="text" placeholder="Search  products.." id="search_bar" oninput="showresult()" onkeyup="search()">
        <div id="search_result" class='autocom-box'>
          <ul id="myUL">

            <li><a href="./Index_files/products/body_lotion.php">Body lotion with natural ingredients, 250ml</a></li>
            <li><a href="./Index_files/products/facewash.php">Face wash - Cleans Skin Deeply, 150ml</a></li>
            <li><a href="./Index_files/products/herbal_conditioner.php">Herbal Conditioner for Dry Hair, 150ml</a></li>
            <li><a href="./Index_files/products/moisturizer.php">Moisturizing with Coconut oil, 150 ml</a></li>
            <li><a href="./Index_files/products/soap.php">Pure health Cucumber & Coconut Soap, 75 g</a></li>
            <li><a href="Index_files/products/shampoo.php">Onion Shampoo For Hair Fall Control, 200ml</a></li>

          </ul>
        </div>
      </div>
      <svg class="bgsvg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" style="cursor: pointer;">
        <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#fff"></path>
      </svg>
    </div>
    <div class="text-box">
      <h1><span class="auto-input"></span></h1>
    </div>
    <svg class="bgsvg1" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#d9eee1"></path>
    </svg>


    <!--PHP START-->
    <?php
include './Index_files/Data/connection.php';
$selectquery = "select * from products where id = 1 ";
$query = mysqli_query($con,$selectquery);
$res = mysqli_fetch_array($query);
?>
    <!--PHP ENDS-->


    <div class="posts">
      <h1 id="post">- Products -</h1>
      <div id='flex-container'>
        <div id="flex">
          <?php
    $productquery = "SELECT * FROM products";
    $productresult = mysqli_query($con,$productquery);
if($productresult)
{

    if(mysqli_num_rows($productresult)>0)
    {
        while($res = mysqli_fetch_array($productresult))
        {
        ?>

          <a href="<?php echo $res['pageurl']?>">
            <div id="post<?php echo $res['id']?>" class="CommanCss">
              <img src="data:image/webp;base64,<?php echo base64_encode($res['image']); ?>">
              <h2 id="price">Price- <?php echo $res['price']?>/- Only</h2>
              <h2><?php echo $res['product_name']?></h2>
              <p><?php echo $res['description']?></p>
            </div>
          </a>
          <?php
        }
    }
}
        ?>
        </div>
      </div>
    </div>
    <svg id="thought_svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" style="cursor: pointer;">
      <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#fff"></path>
    </svg>

    </div>
    <div id="thought">
      <h1>- Our Products -</h1>
      <p>We sell the best product at low price because our priority is your health not your money. <br>All of our
        Products are verified and are completely safe to use. <br>Please feel free to buy any product at bare minimum
        price with top notch quality.</p>
      <img src="./Index_files/Image/thought_img.webp" alt="">
    </div>
    <svg class="bgsvg1" id="thought_svg_bottom" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#d9eee1"></path>
    </svg>
    <div id="aboutus-holder">
      <img id="about-image2" src="./Index_files/Image/about-background-2.png" alt="image was here">
      <img id="about-image" src="./Index_files/Image/about-background.png" alt="image was here">
      <div id="aboutus">
        <img id="photo-background" src="./Index_files/Image/img-background-for-mobile.png" alt="">
        <img id="profile-image" src="./Index_files/Image/profile-image.webp" alt="">
        <div id="aboutus-text-holder">
          <h2 class="about-text" id="about-name">Anand Choudhary</h2>
          <p class="about-text" id="about-info">Hi! I'm the founder, developer, designer of pure health products. Nice
            to meet you! <br>I built close to 10 websites in the past years and I've always been building <br> different
            type of website to improve my workflow.</p>
        </div>
      </div>
    </div>
  </main>
  <footer id="footer1">
    <div id="footer_holder">
      <div id="footer">
        <div id="contact_form">
          <form action="./Index_files/Data/contactus/process.php" method="post" id="contactusform">
            <h2 style="font-weight: 400;">Contact Us</h2>
            <?php 
          $msg= "";
          if(isset($_GET['error']))
          {
              $msg="Please fill all the option";
              echo ( "<div style=' width: 100%; height: 3rem; background-color: #04aa49; margin:2rem 0; box-sizing:border-box; '><p style='padding:3% 0;'>".$msg."</p></div>");
              ;
          }
          if(isset($_GET['success']))
          {
              $msg="Message is sended successfully";
              echo ( "<div style=' width: 100%; height: 3rem; background-color: #04aa49; margin:2rem 0; box-sizing:border-box; '><p style='padding:3% 0;'>".$msg."</p></div>");
              ;
          }
          ?>
            <input type="text" name="subject" placeholder="Subject" id="subject">
            <input type="email" name="email" id="email" placeholder="Enter Email">
            <textarea name="msg" placeholder="Write Your Message..." id="message" cols="30" rows="10"
              form="contactusform"></textarea>
            <input type="submit" name="Submit" id="submit" placeholder="Enter Submit" style="width: 40%;">
            <input type="reset" value="reset" id="reset" placeholder="Enter Reset" style="width: 40%;">
          </form>
        </div>
      </div>
    </div>
  </footer>
  <footer id="footer2">
    <div id="footer_wave_holder">
      <div id="footer_wave">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
    </div>
    <div id="footer_section">
      <div id="share">
        <p id="share-text">Share Us</p>
        <table id="share_icon">
          <tr>
            <td>
              <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//its-anand.github.io/CollegeProject-Sem5th/"
                target="_blank"><svg id="facebook_share" class="share_style" xmlns="http://www.w3.org/2000/svg"
                  fill="#00e300" viewBox="0 0 50 50">
                  <path
                    d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 25.832031 46 A 1.0001 1.0001 0 0 0 26.158203 46 L 31.832031 46 A 1.0001 1.0001 0 0 0 32.158203 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 41 6 C 42.668484 6 44 7.3315161 44 9 L 44 41 C 44 42.668484 42.668484 44 41 44 L 33 44 L 33 30 L 36.820312 30 L 38.220703 23 L 33 23 L 33 21 C 33 20.442508 33.05305 20.398929 33.240234 20.277344 C 33.427419 20.155758 34.005822 20 35 20 L 38 20 L 38 14.369141 L 37.429688 14.097656 C 37.429688 14.097656 35.132647 13 32 13 C 29.75 13 27.901588 13.896453 26.71875 15.375 C 25.535912 16.853547 25 18.833333 25 21 L 25 23 L 22 23 L 22 30 L 25 30 L 25 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 32 15 C 34.079062 15 35.38736 15.458455 36 15.701172 L 36 18 L 35 18 C 33.849178 18 32.926956 18.0952 32.150391 18.599609 C 31.373826 19.104024 31 20.061492 31 21 L 31 25 L 35.779297 25 L 35.179688 28 L 31 28 L 31 44 L 27 44 L 27 28 L 24 28 L 24 25 L 27 25 L 27 21 C 27 19.166667 27.464088 17.646453 28.28125 16.625 C 29.098412 15.603547 30.25 15 32 15 z" />
                  </svg></a>
            </td>
            <td>
              <a href="https://msng.link/o/?https://its-anand.github.io/CollegeProject-Sem5th/=ig" target="_blank"><svg
                  id="instagram_share" class="share_style" xmlns="http://www.w3.org/2000/svg" fill="#00e300"
                  viewBox="0 0 50 50">
                  <path
                    d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z" />
                  </svg></a>
            </td>
            <td>
              <a href="https://twitter.com/intent/tweet?text=https%3A//its-anand.github.io/CollegeProject-Sem5th/"
                target="_blank"><svg id="twitter_share" class="share_style" xmlns="http://www.w3.org/2000/svg"
                  fill="#00e300" viewBox="0 0 50 50">
                  <path
                    d="M 34.21875 5.46875 C 28.238281 5.46875 23.375 10.332031 23.375 16.3125 C 23.375 16.671875 23.464844 17.023438 23.5 17.375 C 16.105469 16.667969 9.566406 13.105469 5.125 7.65625 C 4.917969 7.394531 4.597656 7.253906 4.261719 7.277344 C 3.929688 7.300781 3.632813 7.492188 3.46875 7.78125 C 2.535156 9.386719 2 11.234375 2 13.21875 C 2 15.621094 2.859375 17.820313 4.1875 19.625 C 3.929688 19.511719 3.648438 19.449219 3.40625 19.3125 C 3.097656 19.148438 2.726563 19.15625 2.425781 19.335938 C 2.125 19.515625 1.941406 19.839844 1.9375 20.1875 L 1.9375 20.3125 C 1.9375 23.996094 3.84375 27.195313 6.65625 29.15625 C 6.625 29.152344 6.59375 29.164063 6.5625 29.15625 C 6.21875 29.097656 5.871094 29.21875 5.640625 29.480469 C 5.410156 29.742188 5.335938 30.105469 5.4375 30.4375 C 6.554688 33.910156 9.40625 36.5625 12.9375 37.53125 C 10.125 39.203125 6.863281 40.1875 3.34375 40.1875 C 2.582031 40.1875 1.851563 40.148438 1.125 40.0625 C 0.65625 40 0.207031 40.273438 0.0507813 40.71875 C -0.109375 41.164063 0.0664063 41.660156 0.46875 41.90625 C 4.980469 44.800781 10.335938 46.5 16.09375 46.5 C 25.425781 46.5 32.746094 42.601563 37.65625 37.03125 C 42.566406 31.460938 45.125 24.226563 45.125 17.46875 C 45.125 17.183594 45.101563 16.90625 45.09375 16.625 C 46.925781 15.222656 48.5625 13.578125 49.84375 11.65625 C 50.097656 11.285156 50.070313 10.789063 49.777344 10.445313 C 49.488281 10.101563 49 9.996094 48.59375 10.1875 C 48.078125 10.417969 47.476563 10.441406 46.9375 10.625 C 47.648438 9.675781 48.257813 8.652344 48.625 7.5 C 48.75 7.105469 48.613281 6.671875 48.289063 6.414063 C 47.964844 6.160156 47.511719 6.128906 47.15625 6.34375 C 45.449219 7.355469 43.558594 8.066406 41.5625 8.5 C 39.625 6.6875 37.074219 5.46875 34.21875 5.46875 Z M 34.21875 7.46875 C 36.769531 7.46875 39.074219 8.558594 40.6875 10.28125 C 40.929688 10.53125 41.285156 10.636719 41.625 10.5625 C 42.929688 10.304688 44.167969 9.925781 45.375 9.4375 C 44.679688 10.375 43.820313 11.175781 42.8125 11.78125 C 42.355469 12.003906 42.140625 12.53125 42.308594 13.011719 C 42.472656 13.488281 42.972656 13.765625 43.46875 13.65625 C 44.46875 13.535156 45.359375 13.128906 46.3125 12.875 C 45.457031 13.800781 44.519531 14.636719 43.5 15.375 C 43.222656 15.578125 43.070313 15.90625 43.09375 16.25 C 43.109375 16.65625 43.125 17.058594 43.125 17.46875 C 43.125 23.71875 40.726563 30.503906 36.15625 35.6875 C 31.585938 40.871094 24.875 44.5 16.09375 44.5 C 12.105469 44.5 8.339844 43.617188 4.9375 42.0625 C 9.15625 41.738281 13.046875 40.246094 16.1875 37.78125 C 16.515625 37.519531 16.644531 37.082031 16.511719 36.683594 C 16.378906 36.285156 16.011719 36.011719 15.59375 36 C 12.296875 35.941406 9.535156 34.023438 8.0625 31.3125 C 8.117188 31.3125 8.164063 31.3125 8.21875 31.3125 C 9.207031 31.3125 10.183594 31.1875 11.09375 30.9375 C 11.53125 30.808594 11.832031 30.402344 11.816406 29.945313 C 11.800781 29.488281 11.476563 29.097656 11.03125 29 C 7.472656 28.28125 4.804688 25.382813 4.1875 21.78125 C 5.195313 22.128906 6.226563 22.402344 7.34375 22.4375 C 7.800781 22.464844 8.214844 22.179688 8.355469 21.746094 C 8.496094 21.3125 8.324219 20.835938 7.9375 20.59375 C 5.5625 19.003906 4 16.296875 4 13.21875 C 4 12.078125 4.296875 11.03125 4.6875 10.03125 C 9.6875 15.519531 16.6875 19.164063 24.59375 19.5625 C 24.90625 19.578125 25.210938 19.449219 25.414063 19.210938 C 25.617188 18.96875 25.695313 18.648438 25.625 18.34375 C 25.472656 17.695313 25.375 17.007813 25.375 16.3125 C 25.375 11.414063 29.320313 7.46875 34.21875 7.46875 Z" />
                  </svg></a>
            </td>
          </tr>
        </table>
        <p id="declaimer">All the images used here don't belongs to us<br>Please contact us in order to remove them</p>
      </div>

    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script>
    var typed = new Typed(".auto-input", {
      strings: ["Millions of products has been sold to", "Millions of happy customers",
        "Buy now to become one of them", "Pure health", "Bring nature into your home"
      ],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true
    })
  </script>
  <script>
    var preloader = document.getElementById('loading');

    function loader() {
      preloader.style.display = "none";
    }

    var navholder = document.getElementById("navholder");

    function openmenu() {
      navholder.style.display = "inline";
      setTimeout(function () {
        navholder.classList.add("show");
      }, 1);
    }

    function closemenu() {
      navholder.classList.remove('show');
      setTimeout(function () {
        navholder.style.display = "none";
      }, 700);
    }

    var accBtn = document.getElementById("account_button");
    var accHolder = document.getElementById("account");
    var menuBtn = document.getElementById("nav-button");
    accBtn.addEventListener('click', () => {
      if (accHolder.style.display === 'none') {
        accHolder.style.display = 'block';
        menuBtn.style.display = 'none';
      } else {
        accHolder.style.display = 'none';
        menuBtn.style.display = 'block';
      }
    })
  </script>




  <!-- search -->

  <script>
    function showresult() {
      document.getElementById('search_result').style.display = "block";
    }
    window.addEventListener('load', function () {
      var search_result = document.getElementById('search_result');
      document.onclick = function (e) {
        if (e.target.id !== 'search_result') {
          search_result.style.display = 'none';
        }
      };
    });
    const search = () => {
      let filter = document.getElementById('search_bar').value.toUpperCase();
      let autocom = document.getElementById('search_result');
      let ul = document.getElementById('myUL');
      let li = ul.getElementsByTagName('li');
      if (!filter === undefined) {
        autocom.style.display = "none";
      } else {
        for (var i = 0; i < li.length; i++) {
          let a = li[i].getElementsByTagName('a')[0];
          let textValue = a.textContent || a.innerHtml;
          if (textValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = '';
          } else {
            li[i].style.display = 'none';
          }
        }
      }
    }
  </script>
</body>

</html>