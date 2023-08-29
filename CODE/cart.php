<?php
  
@include 'config.php';

session_start();



if(!isset($_SESSION['cart'])){
   header('location:cart.html');
}


   

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart</title>
     <link rel="stylesheet" href="cart.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  </head>

  <body>
  <div class="hero">
   <a href="home.html">
     <h2>CT<span>Pharma</span></h2>
     </a>
  
  

<div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
        <h1 class="cart-is-empty">Cart is empty</h1>
      
        <div class="product-rows">
        </div>
        <div class="total">
          <h1 class="cart-total">TOTAL</h1>
            <span class="total-price">&#8377;0</span>
              <button class="purchase-btn">PURCHASE</button>
        </div>
      </div>
</div>
      

  <div class="cart-btn">
    <i id="cart" class="fas fa-shopping-cart"></i>
      <span class ="cart-quantity">0</span>
  </div>

  <div class="items-container">
    <div class="card-1 card">
      <img class="product-image" src="img/calc.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">&#8377;200</span>
    </div>
    <div class="card-2 card">
      <img class="product-image" src="img/Diabetes.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
        <span class="product-price">&#8377; 300 </span>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="img/Vitamin.jpg" alt="">
        <button class="add-to-cart">Add to cart</button>
          <span class="product-price">&#8377;86.4</span>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="img/skin1.jpg" alt="">
         <button class="add-to-cart">Add to cart</button>
        <span class="product-price">&#8377;599</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/skin2.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;499</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/soap.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;64</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/zandu balm.png" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;34.4</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/crocin.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;26.7</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/vaporub.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;86.4</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/himalaya.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;109.2</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/protein.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;949</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/bournvita.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;410</span>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="img/peanut butter.jpg" alt="">
      <button class="add-to-cart">Add to cart</button>
      <span class="product-price">&#8377;240</span>
    </div>
  </div>  
 
 
 
  <script  src="script.js"></script>
  </body>
</html>