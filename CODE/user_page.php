<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title>💊CTPharma💊</title>
        <link rel="stylesheet" href="home.css"
    </head>
    <body>
        <div class="hero">
            <a href="home.html">
                <h1>CT<span>Pharma</span></h1>
                </a>
                <nav>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="register_form.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="cart.php">Cart</a></li>
                    </ul>
                </nav>
            <div class="contain">
                <img src="Images/11.png">
            </div>
            <div class="card">
            <a href="Medicines.html">
                <img src="Images/5.webp" style="width:100%;">
                </a>
                <div class="container0">
                <p style="color:#ffff"><b>Medicines</b></p>
                </div>
            </div>
            <div class="card1">
                <a href="Skincare.html">
                    <img src="Images/12.webp" style="width:100%;">
                     </a>
                    <div class="container1">
                    <p style="color:#ffff"><b>Skin Care</b></p>
                    </div>
                </div>
                <div class="card2">
                    <a href="Essentials.html">
                        <img src="Images/13.webp" style="width:100%;">
                         </a>
                        <div class="container2">
                        <p style="color:#ffff"><b>Essentials</b></p>
                        </div>
                    </div>
                    <div class="card3">
                        <a href="Food&Drinks.html">
                            <img src="Images/14.webp" style="width:100%;">
                             </a>
                            <div class="container3">
                            <p style="color:#ffff"><b>Food and Drinks</b></p>
                            </div>
                        </div>
            <div class="side-bar">
                    <div class="social-links">
                        <a href="https://www.facebook.com/">
                        <img src="Images/fb.png">
                        </a>
                        <a href="https://www.instagram.com/">
                        <img src="Images/ig.png">
                        </a>
                        <a href="https://www.twitter.com/">
                        <img src="Images/tw.png">
                        </a>
                    </div>

                    <div class="useful-links">
                        <a href="About_us.html" >
                        <img src="Images/info.png">
                        </a>
                    </div>
            </div>
        </div>
    </body>

</html>