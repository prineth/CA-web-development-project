<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>TravelLanka</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="homecss.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <!--script for font ganna one fonawsome.com eken-->
      <script src="https://kit.fontawesome.com/0224d319d2.js" crossorigin="anonymous"></script>
      <head>
        <script src="jquery-3.5.1.min.js"></script>
      </head>
      
      <style>
        /*body {font-family: Arial, Helvetica, sans-serif;}*/
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px;
          border: none;
          cursor: pointer;
          width: 100%;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        
        img.avatar {
          width: 10%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>

  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">

      <!--For bars-->
      <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
      </label>

      <label class="logo">TravelLanka</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">My Trips</a></li>
        <li><a href="Explore/test 1.html">Attactrion</a></li>
        
        <div class="dropdown">
          <!--<a class="dropbtn">Dropdown</a>--> 
          <li><a class="dropbtn" href="#">About us</a></li>
          <div class="dropdown-content">
            <a href="about us/contact.html">Contact</a>
            <a href="about us/about.html">About us</a>
            <a href="about us/privacy.html">Privacy Policy</a>
          </div>
        </div>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login_hover" id="active_login">Login</a></li>
        <li><a id="active_signup" class="signup_hover" href="signup(hela)/text.html">Sign up</a></li>

        

      </ul>
    </nav>

    <section>
      <div> 

        <slider>    <!--you can insert text <p>  </p>-->
          <slide><p></p></slide>
          <slide><p></p></slide>
          <slide><p></p></slide>
          <slide><p></p></slide>
        </slider>
    
            <!--
            <div class="topics">
                <h1 class="mainTopic">Whats your wish?</h1>
                <h2 class="subtitle">Let's explore</h2>
            </div>
                -- search bar--
            <div class="search-box">
                  <input class="search-txt" type="text" name="" placeholder="Type to explore">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
          -->
      </div>
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div id="id01" class="modal">
  
      <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="sign in/login.png" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
            
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

  </body>
</html>