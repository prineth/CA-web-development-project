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
