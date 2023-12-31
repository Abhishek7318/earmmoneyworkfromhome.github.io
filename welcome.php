<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <script src="./script.js" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
     h5{
      text-align: center;
      color: white;
      font-size: 26px;
      padding-top: 10px;
     }
     </style>
    <title>PHP login system!</title>
  </head>
  <body>
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">workFromhome</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>
 <!-- top front section image name -->
 <header>
    <div>
   <h5> Earn Money </h3>
   <center>
    <div class="topcheck"> <img class="logo" src="assets/check.png" width="20px" height="20px" alt="verfi"> <p class="joinearn">&nbsp; Share & Earn money</p></div>
    </center>
  </header>
    <center>
      <div class="newuser card">
        <div class="flex">
      <img src="assets/book-open-solid.svg" width="24px" height="24px" alt="read"><p>&nbsp; New user must read</p></div>

      <!-- all buttons  -->
      <center>
       <button class="btn"><a href="intro.html">platform Introduction</a></button>
       <button class="btn"><a href="login.html">Login Tutorial</a></button>
       <br>
       <button class="btn"><a href="https://forms.gle/bdq9sUrSSLoJ1nE26">Join Direct</a></button>
       <button class="btn"> <a href="https://forms.gle/YLyAaf9nkhAPRCeV7">Refer throw join</a></button>
       <button class="btn"> <a href="premium.html"><div class="point"><p>P</p></div> Valid Premium plans </a></button>
       </center>
      </div>
    </center>
</div>

    <!-- hero section image  -->
<img class="grow" src="https://static.vecteezy.com/system/resources/previews/010/417/197/large_2x/coins-and-money-growing-plant-for-finance-and-banking-saving-money-or-interest-increasing-concept-business-growth-free-photo.jpg" height="220px" width="100%" alt="">
   <h1 class="right">100% will you be able to make money </h1>
  <center> 
   <button class="shareBtn" id="shareBtn">SHARE & REFER</button>  
  </center>
  <center>
  <img src="assets/offerrefer.png" alt="offer" width="100%">
  <p class="pra">© 2023-2024, workFromhomw.com</p>
</center>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
