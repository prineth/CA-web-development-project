<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="includes/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style/parallex-style.css">
    <link rel="stylesheet" href="includes/style/index-style.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm bg-danger fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand">TravelLanka</a>
            <div class="collapse navbar-collapse" id="Navbar">
               
                <ul class="navbar-nav mr-auto"> 
                    
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">My Trips</a></li>
                    <!--Attraction dropdown-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Attraction</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html">Explore</a>
                            <a class="dropdown-item" href="#!">Best tourist destinations</a>
                        </div>
                    </li>
                
                    <!--About Us dropdown-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                           href="#" role="button" aria-haspopup="true" aria-expanded="false">
                           About Us</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/about%20us/about/about.html">About Us</a>
                          <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/about%20us/contact/contact.html">Contact</a>
                          <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/about%20us/privacy.html">Privacy Policy</a>
                        </div>
                      </li>
                    <li class="nav-item"><a href="<?php echo "http://localhost/CA-web-development-project/Agent signup form/login.php"; ?>" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="<?php echo "http://localhost/CA-web-development-project/Agent signup form/signup.php"; ?>" class="nav-link">Signup</a></li>
                    
                </ul>
                 <!--Sarchbar-->
                 <form class="form-inline ">
                    <input class="form-control col-8 col-md-8 mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                  </form>
            </div>

        </div>
    </nav>



    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                      121, Clear Water Bay Road<br>
                      Clear Water Bay, Kowloon<br>
                      HONG KONG<br>
                      Tel.: +852 1234 5678<br>
                      Fax: +852 8765 4321<br>
                      Email: <a href="mailto:confusion@food.net">confusion@food.net</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a href="http://google.com/+">Google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
  <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
  <script src="includes/node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="includes/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="includes/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="includes/style/app.js"></script>
</body>

</html>