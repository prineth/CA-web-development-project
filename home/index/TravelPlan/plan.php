<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="stylesheet" href="plan.css">
        <link rel="stylesheet" href="../../Explore/Catgry/css/nav.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <title>Plan your trip</title>
        <style>
          table, th, td {
        border: 1px solid black;
        width: 100%;
        }
        table th{
            background-color: #4CAF50;
            color: white;
        }
        table tr{background-color: #f2f2f2;}
        table tr:hover {background-color: #ddd;}
        </style>
    </head>
    <body>

                <nav>

    <!--For bars-->
    <input type="checkbox" id="check">

    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <label class="logo">AroundLanka</label>
    <ul>
      <li><a href="../index2.php">Home</a></li>
      <div class="dropdown">
        <!--<a class="dropbtn">Dropdown</a>--> 
        <li><a class="active" class="dropbtn" href="#">Attraction</a></li>
        <div class="dropdown-content">
          <a href="../../../../test 1.html">Explore</a>
          <a href="#">Best destinations</a>
        </div>
      </div>

      <div class="dropdown">
        <!--<a class="dropbtn">Dropdown</a>--> 
        <li><a class="dropbtn" href="#">About us</a></li>
        <div class="dropdown-content">
          <a href="#">Contact</a>
          <a href="#">About us</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
      <div class="dropdown">
        <!--<a class="dropbtn">Dropdown</a>--> 
        <li><a class="dropbtn" href="#">Welcome,<b>Samantha</b></a></li>
        <div class="dropdown-content">
          <a href="#">Profile settings</a>
          <a href="#">My favourits</a>
          <a href="#">My trips</a>
          <a href="#">Log out</a>
        </div>
      </div>

      
          <li><a id="active_login" class="login_hover" href="#">Log in</a></li>
          <li><a id="active_signup" class="signup_hover" href="#">Sign up</a></li>


    </ul>
  </nav>

        <!-- bread crumbs -->
  
    <ul class="breadcrumb">
      <li><a href="../index.php">Home</a></li>
      <li>Trip plan</li>
   
    </ul>

        <!--div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left">Get Travel Assisttance from Several ASTA Travel Advisors</h1> <br>
                    <p class="text-left">Maybe you need help with vaction planning,honeymmon travel, tour packages, europe trips quotes? whatever your need, we can help! not sure which travel adviisor.No worries
                        Recevie multiple replies for from ASTA(American Society of Travel Advisor)travel advissors. you are in control. select how many advisors yu want to get replies form and long you want your request to be active. seriours request only, please.</p>
                </div>      
            </div>
        </div-->
        <div class="regform "><h1>Plan your trip here</h1></div>
        <div class="main">
            <form>
                <h2 class="name">Days of your trip</h2>
                <input class="trip-plan" type="number" name="days of your trip">


                <h2 class="name">Which places do you wish to visit?</h2><br><br>
                <input class="places" type="text" name="places">

                <h2 class="name">Which hotels do you select?</h2><br><br>
                <input class="places" type="text" name="places">
            
            <!--do you want travel agent-->
                  <div class="card bg-transparent border border-light d-inline-flex p-2" id="agent">
                    <div class="name" class="d-flex justify-content-center">
                      Do you want an travel agent? 
                    </div>
                    <div class="card-body text-light ">
                        <ul>
                            <li class="card-text text-light d-flex justify-content-center"> <p  class="card-text text-light">You can chat with them for free</p></li>
                            <li class="card-text text-light d-flex justify-content-center"> <p  class="card-text text-light">You can discuss about your destination</p></li>
                        </ul>
                      
                      <a href="#fname" target="#fname" class="btn btn-primary  d-flex justify-content-center">Yes I'want</a><br>
                      <a href="#!" class="btn btn-primary  d-flex justify-content-center">No I didn't</a>
                    </div>
                  </div>

                  <button type="submit">Save my plan</button>
                  <button type="reset">Clear all</button>

            </form>
        </div>   

        <!--Agent gigs-->
        <!--topic-->
        <div class="jumbotron jumbotron-fluid bg-success text-center">
            <div class="container ">
              <a  name="fname"><h1 class="display-3 text-light" id="agentTopic">Meet your agent</h1></a>
              <p class="lead text-light"  id="agentTopic">Click on "Start Chat" to start a chat</p>
            </div>
          </div>

          <!--Agent gigs-->
        <!--div class="card-deck"> 
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div>
        <br>
        <!--SECOND set>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <a href="#" class="btn btn-success">Start chat</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </div><br-->

        <!--php AGENt post-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT postId, postTitle, details, tags FROM gigpost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table >";
        echo "<thead><tr><th>". $row["postTitle"]. "</th></tr></thead><tbody><tr><td>". $row["details"]. "</td></tr><tr><td>". $row["tags"]. "</td></tr><tr><th>" . "<button>Start chat</button>"."</th></tr><tbody>";
        echo "</table>";
        echo "<br><br>";
    }
   // echo "</table>";
   
    

} else {
    echo "0 results";
}

$conn->close();
?>

         <!--pagination>
 
        <nav aria-label="..."  >
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#!" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item active">
                <a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#!">Next</a>
              </li>
            </ul>
          </nav-->
             <!--footer --->
    <footer class="footer bg-dark">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5  style="color:#CECDCD;">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" style="text-decoration: none;color:#A4A4A4;">Home</a></li>
                        <li><a href="aboutus.html" style="text-decoration: none;color:#A4A4A4;">Attraction</a></li>
                          <ul class="list-unstyled">
                              <li><a href="#" style="text-decoration: none;color:#848484;">&nbsp Explore</a></li>
                              <li><a href="#" style="text-decoration: none;color:#848484;">&nbsp Best desinations</a></li>
                          </ul>
                        <li><a href="#" style="text-decoration: none;color:#A4A4A4;">About us</a></li>
                        <ul class="list-unstyled">
                              <li><a href="#" style="text-decoration: none;color:#848484;">&nbsp About us</a></li>
                              <li><a href="#" style="text-decoration: none;color:#848484;">&nbsp Contact</a></li>
                              <li><a href="#" style="text-decoration: none;color:#848484;">&nbsp Privacy Policy</a></li>
                          </ul>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5 style="color:#CECDCD;">Our Address</h5>
                    <address class="text-muted">
                      97/1,i <br>
                      Dampe, Piliyandala<br>
                      Srilanka<br>
                      Tel.: +94 234 5678<br>
                      Fax: +94 765 4321<br>
                      Email: <a href="mailto:aroundlanka@gmail.com" style="text-decoration: none;color:#A4A4A4;">aroundlanka@gmail.com</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a href="http://google.com/+" style="text-decoration: none;color:#A4A4A4;">Google+</a><br>
                        <a href="http://www.facebook.com/profile.php?id=" style="text-decoration: none;color:#A4A4A4;">Facebook</a><br>
                        <a href="http://www.linkedin.com/in/" style="text-decoration: none;color:#A4A4A4;">LinkedIn</a><br>
                        <a href="http://twitter.com/" style="text-decoration: none;color:#A4A4A4;">Twitter</a><br>
                        <a href="http://youtube.com/" style="text-decoration: none;color:#A4A4A4;">YouTube</a><br>
                        <a href="mailto:" style="text-decoration: none;color:#A4A4A4;">Mail</a><br>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto text-secondary">
                    <p>© Copyright 2020 AroundLanka</p>
                </div>
           </div>
        </div>
    </footer>
    </body>
</html>