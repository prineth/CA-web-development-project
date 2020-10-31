<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Agent signup page</title>
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
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
                            <form method="post" action="signup.php">
                            <!-- Display validation errors here -->
                                <?php include('errors.php'); ?>
                            <!-- start of inputs -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Date of birth">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="NIC">
                                </div>

                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Contact Number">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Retype Password" name="password_2">
                                </div>

                                <button type="button" class="btn btn-primary">Signup</button>
                                
                                Already signup? <a href="login.html"> Login</a>
                            </form>
                            </div>


                            
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
