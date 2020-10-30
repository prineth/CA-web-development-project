<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>TravelLanka</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="nav.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    </head>

<body>
  <nav class="navbar">
    <input type="checkbox" id="check">

    <!--For bars-->
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <label class="logo">TravelLanka</label>
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">My Trips</a></li>
      <li><a href="#">Attactrion</a></li>

      <div class="dropdown">
        <!--<a class="dropbtn">Dropdown</a>--> 
        <li><a class="dropbtn" href="#">About us</a></li>
        <div class="dropdown-content">
          <a href="#">Contact</a>
          <a href="#">About us</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <li><a id="active_login" class="login_hover" href="#">Log in</a></li>
      <li><a id="active_signup" class="signup_hover" href="#">Sign up</a></li>

    </ul>
  </nav>


<!--
<div class="dropdown">
  <a class="dropbtn">Dropdown</a>
  <li><a class="dropbtn" href="#">Contact</a></li>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
-->