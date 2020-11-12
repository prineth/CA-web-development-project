<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agent login page</title>
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- Bootstrap CSS -->
        <!--link rel="stylesheet" href="file:///C:/xampp/htdocs/CA-web-development-project/home/index/includes/node_modules/bootstrap/dist/css/bootstrap.min.css"-->

    </head>
    <body>
        <!-- Nav bar -->
            <nav class="navbar navbar-dark navbar-expand-sm bg-danger fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="<?php echo "http://localhost/CA-web-development-project/home/index/agentindex.php"; ?>" class="navbar-brand">TravelLanka</a>
            <div class="collapse navbar-collapse" id="Navbar">
               
                <ul class="navbar-nav mr-auto"> 
                    
                    <li class="nav-item"><a href="<?php echo "http://localhost/CA-web-development-project/home/index/agentindex.php"; ?>" class="nav-link">Home</a></li>
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
                    <li class="nav-item active"><a href="<?php echo "http://localhost/CA-web-development-project/Agent signup form/login.php"; ?>" class="nav-link">Login</a></li>
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

    <!-- nav bar end -->

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <div class="col-md-5 register-left">
                            <img src="images/a.png">
                            <h3>Join Us</h3>
                            <p>Travel is fun. It is a fantastic adventure. More than that, however, travel can enrich your life in numerous ways.</p>
                            <a href="about.html">
                                <button type="button" class="btn btn-primary">About Us</button>
                            </a>
                        </div>

                        <div class="col-md-7 register-right">
                            <h2>Signup Here</h2>
                            <div class="register-form">
                            <form method="post" action="login.php">
                             <!-- Display validation errors here -->
                             <?php include('errors.php'); ?>
                             
                                <div class="form-group">           
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                              
                                    </a><button type="submit" class="btn btn-primary" name="login">Login</button>
                                    Do you have an account?<a href="signup.php"> Sign up</a>
                            </form>
                            </div>


                            
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
