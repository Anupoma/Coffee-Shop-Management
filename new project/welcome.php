<?php

   include 'config.php';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Welcome</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand">Cafephile</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./welcomepage.webp" class="d-block w-100" style="width:80%; height:60%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="./login.php"><button type="button"class="btn btn-outline-light btn-lg " style="width:20%">Log In </button></a>
        <a href="./register.php"><button  type="button" class="btn btn-outline-secondary btn-lg " style="width:20%">Registration</button></a>
        <h3>Connect with us</h5>
        <p>Life Begins After Coffee</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./OIP (1).jpg" class="d-block w-100"  style="width:80%; height:60%" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="./login.php"><button type="button"class="btn btn-outline-light btn-lg " style="width:20%">Log In </button></a>
        <a href="./register.php"><button  type="button" class="btn btn-outline-secondary btn-lg " style="width:20%">Registration</button></a>
        <h5>Get Your Coffee</h5>
        <p>“Life is like coffee, the darker it gets, the more it energizes.” – Ankita Singhal</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./R (2).jpg" class="d-block w-100"  style="width:80%; height:60%"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="./login.php"><button type="button"class="btn btn-outline-light btn-lg " style="width:20%">Log In </button></a>
        <a href="./register.php"><button  type="button" class="btn btn-outline-secondary btn-lg " style="width:20%">Registration</button></a>
        <h5>Find Yourself</h5>
        <p>“Want to hear a really dark joke? Decaf.”</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> <br>
<div class="middle">
    <section class="mid-bg" id="mid-bg">
        <div class="midcont">
        <h1 style="text-align: center; white-space: pre-wrap;"> <span>CafePhile</h1> <hr>
            <h1 style="text-align: center; white-space: pre-wrap; color:brown;"> <span>Our Indoor Dining</h1>
            <h2 style="text-align: center; white-space: pre-wrap; color:lightsalmon;">Take Out & Delivery</h2>
            <h2 style="text-align: center; white-space: pre-wrap; color:chocolate">Breakfast, Lunch & Brunch</h2>
            <p style="text-align: center; white-space: pre-wrap; color:coral">Noyasorok | 3100 Sylhet</p>
        </div>  
    </section>
</div>
<div class="conatiner-fluid">
        <div class="row justify-content-center mt-5">
            
      </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>

