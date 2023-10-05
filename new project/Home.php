
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafephile</title>

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--CSS File Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .navbar .nav-item .nav-link{color:black; font-size:1.6rem;  margin: 0 1rem; }
      .navbar .nav-item .nav-link:hover{color:chocolate;}
      .home-bg{background:url(cover2.jpg)no-repeat;background-size: cover;background-position: center;min-height: 45rem;}
      .home-bg .content{width: 50rem;align-items: center;display: inline;}
      .home-bg .content .p{color: chocolate;}
      .header{position: fixed; width:100%;}
    </style>
  </head>
<body>
    
<header class="header">
    
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="Cafephile Logo.jpg" alt="logo" height = 50px ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./Coffee.php">Coffee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Our Story.html">Our Story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./Admin.php">Admin Panel</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Navbar end-->    
</header>


<!---home Screen starts-->
<div class="home-bg">
    <section class="home" id="home">
        <div class="content">
            
            <a href="#" class="btn">Get Yours Now</a>
        </div>

    </section>
</div>
<div class="middle">
    <section class="mid-bg" id="mid-bg">
        <div class="midcont">
            <h1 style="text-align: center; white-space: pre-wrap;"> <span>Our Indoor Dining</h1>
            <h2 style="text-align: center; white-space: pre-wrap;">Take Out & Delivery</h2>
            <h2 style="text-align: center; white-space: pre-wrap;">Breakfast, Lunch & Brunch</h2>
            <p style="text-align: center; white-space: pre-wrap;">Noyasorok | 3100 Sylhet</p>
        </div>  
        <div class="midlink">
            <div>
                <a class='coffeelink' href="./Coffee.html">Coffee</a>
                <a class='findlink' href="./Find Us.html">Find Us</a> 
            </div>           
            
        </div>
    </section>
</div>
<!--home Screen ends-->

<!--Footer Start-->

<footer>
    <div class="footercontent">
        <h3 class="cont">Cafephile</h3>
        <p class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias obcaecati voluptate quaerat veritatis nobis commodi. Facilis inventore iusto nihil facere? Doloremque, reprehenderit aliquid nemo reiciendis ab quae obcaecati possimus amet!</p>
        <div class="socials">
            <ul class="social-links">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
        </div>
        
        
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2023 Cafephile. designed by <span>anu</span></p>

    </div>
</footer>

<!--footer end-->


<!--Js file Link-->
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>