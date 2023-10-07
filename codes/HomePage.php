<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style >

body {
  margin: 0;
  background-repeat: no-repeat;
  background-size: 100% 720px;
  font-family:Courier New;
}
div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 800px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 50px;
  margin-right: 25px;
  margin-left: 25px;
}
div.container {
  text-align: center;
  padding: 10px 20px;

}
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
  <title>Ae Halloo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-white p-md-2">
      <div class="container">
        <a class="navbar-brand" style = "color:black" href="HomePage.php" img src=""><b>Ae Halloo</b></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <h5><a class="nav-link dropdown-toggle" style = "color:black; margin-right: 25px" href="#" role="button" data-bs-toggle="dropdown">Custom Cake</a>
                <ul class="dropdown-menu" >
                   <li><a class="dropdown-item" href="wedding.php">Wedding Cake</a></li>
                  <li><a class="dropdown-item" href="kids.php">Kids Birthday Cake</a></li>
                  <li><a class="dropdown-item" href="floral.php">Floral Art Cake</a></li>
                  <li><a class="dropdown-item" href="baby.php">Baby Shower Cake</a></li>
                  <li><a class="dropdown-item" href="anniversary.php">Anniversary Cake</a></li>
                   <li><a class="dropdown-item" href="photo.php">Photo Cake</a></li>
                 </ul>
                 </li></h5>
            <li class="nav-item">
              <h5><a class="nav-link text-body" style = "color:black; margin-right: 25px" href="AboutUs.php">About</a>
            </li>
            <h5><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style = "color:black; margin-right: 25px" href="#" role="button" data-bs-toggle="dropdown">Categories</a>
          <ul class="dropdown-menu" >
            <li><a class="dropdown-item" href="cakes.php">Cake</a></li>
            <li><a class="dropdown-item" href="cupcakes.php">Cupcake</a></li>
            <li><a class="dropdown-item" href="donuts.php">Donuts</a></li>
            <li><a class="dropdown-item" href="pastries.php">Pastries</a></li>
            <li><a class="dropdown-item" href="pancakes.php">Pan Cake</a></li>
            <li><a class="dropdown-item" href="cookies.php">Cookies</a></li>
          </ul>
        </li></h5>
         <li class="nav-item">
            <h5><a class="nav-link text-body" style = "color:black;margin-right: 25px margin-left: 25px" href="ContactFrom_v17/index.html">Contact</a>
            </h5>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
</center>
<br><br><br>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="landscape-1474645974-cakes-group-193.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="Fourth+of+July+Cupcakes+Food+Photography+for+Publix+Supermarkets+Photography+by+Nick+Pecori+Tampa+Commercial+Advertising+Photographer-1.jpg" alt="Chicago" class="d-block"  style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="Lemon & Raisin Pancakes 1_landscape.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<br><br><br><br>
<a href="cakes.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="8ea5938dfd09943c8e7e265b1156c095.jpg" style="width:100%">
        <div class="container">
          <p>CAKE</p>
        </div>
      </div>
    </a>
      <a href="cupcakes.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="strawberry_milk_cupcakes01.jpg"  style="width:100%">
        <div class="container">
          <p>CUP CAKES</p>
        </div>
      </div>
      </a>
      <a href="donuts.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="d.jpg"  style="width:100%">
        <div class="container">
          <p>DONUTS</p>
        </div>
      </div>
      </a>
      <a href="pastries.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="Red-velvet-cake-recipe-8.jpg"  style="width:100%">
        <div class="container">
          <p>PASTRIES</p>
        </div>
      </div>
      </a>
      <a href="Pancakes.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="photo-1517741991040-91338b176129.jpg"  style="width:100%">
        <div class="container">
          <p>PANCAKES</p>
        </div>
      </div>
      </a>
      <a href="Cookies.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="brown-butter-chocolate-chip-cookies.jpg"  style="width:98.5%"> 
        <div class="container">
          <p>COOKIES</p>
        </div>
      </div>
      </a>
  <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="column">
    <img src="aef-a1eb0550df2645e581844a61585422ac-a1fe8db5082c4bdcb0bb6da5e7cf688a.jpg" style="width: 90%"><br><br><br><h1 style="font-family:Gabriola;"><center><b><a href="Custom.php"style="color: black;border:black; border-width:2px; border-style:solid; width: 40%">  Customize your cakes   </a></center></b></h1><br><br><br>

    <img src="hy.jpg" style="width: 90%">
  </div>
    <div class="column" style="align:right">
    <h1>Customize your cakes</h1><br>
    <h2 style="font-family:Gabriola;">Ae Halloo specialises in carefully designed custom cakes across Mumbai, Thane & Navi Mumbai.<br>


These include a wide array of:<b>3D cakes designed & customised for every occasion.</b><br> Choose from a wide range of designs for: <b><br>Wedding Cakes<br>Floral Art cakes<br> Kids birthday cakes<br> Anniversary cakes<br> Baby shower cakes<br> and Theme cakes  for birthdays and corporate events.<br></b>

Our core focus is on Design & Taste and our aim is to always give you the best cake. Distinct style & unique techniques are used to handcraft a beautiful cake.<br>
Online ordering, payment and doorstep delivery make for a seamless experience.</h2><img src="IMG_20201230_165755.jpg" style="width: 100%">
</div>
 <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-2">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <img src="20673.png" style="width: 40px"><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <img src="10wmt-superJumbo-v4.jpg"style="width: 45px"> <i class="fab fa-twitter"></i
      ></a>

      <!-- Linkedin -->
      <img src="hd-white-outline-linkedin-round-icon-png-31624153887ernclzsksg.png"style="width: 45px"><i class="fab fa-linkedin-in"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p><h3>
        Best start for the day :)
      </h3></p><br>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links --> 
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
            <li>
              <a href="cakes.php" class="text-white">Cakes</a>
            </li>
            <li>
              <a href="cupcakes.php" class="text-white">Cupcakes</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
           <li>
              <a href="cookies.php" class="text-white">Cookies</a>
            </li>
            <li>
              <a href="pancakes.php" class="text-white">Pancakes</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
           <li>
              <a href="donuts.php" class="text-white">Donuts</a>
            </li>
            <li>
              <a href="pastries.php" class="text-white">Pastries</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <ul class="list-unstyled mb-0">
            <li>
              <a href="http://localhost/ecom/ContactFrom_v17/index.html" class="text-white">Contact us</a>
            </li>
            <li>
              <a href="AboutUs.php" class="text-white">About</a>
            </li>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->  
</body>
</html>