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

    <nav class="navbar navbar-dark navbar-expand-sm bg-success fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand">AroundlLanka</a>
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
                    <!--li class="nav-item active"><a href="register/login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="register/register.php" class="nav-link">Signup</a></li-->
                    
                
                 <!--Sarchbar-->
                 <form class="form-inline ">
                    <input class="form-control col-8 col-md-8 mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                  </form>

  					 <li class="nav-item active nav-link loging" id="myBtn"><!--a href="register/login.php" -->Login<!---/a-->
  					 <!-- The Modal -->
	                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close"></span>
                          <div class="container">
                          <div class="row ">
                             <div class="col-md-6 border border-success logc text-success ">
                             	<h1 class="display-4 font-weight-bold ">Are you a traveller?</h1> 
                             	<h3>paragraph </h3>
                             	<div class="bg-success logx">
                             	<a href="register/login.php"><center><h4 class="bg-success text-white">Login</h4></center></a>
                             	</div>
                             </div> 
                             <div class="col-md-6 border border-success logc text-dark bg-success">
                             		<h1 class="display-4 font-weight-bold ">Are you a Guid?</h1> 
                             			<h3>paragraph </h3>
                             			<div class="bg-dark logx">
                             			<a href="register/login.php"><center><h4 class="text-white">Login</h4></center></a>
                             			</div>
                             </div> 
                          </div>  
                          </div>
                        </div>
                    </li>
                    <!-- Trigger/Open The Modal -->
					<!--li><button id="myBtn">Open Modal</button></li-->
                    <li class="nav-item"><a href="register/register.php" class="nav-link">Signup</a></li>
                  </ul>
            </div>

        </div>
    </nav>

    <div id="layoutSidenav_content"></div>
        <nav class="navbar navbar-dark navbar-expand-sm bg-primary">
            <a href="User.html"><button>user</button></a>
        </nav>
    </div>

<!-- parelllex effect -->
    
    <header>
             
        <!--h1 class="big-title translate" data-speed="0.1">  </h1>< TOPIC "travel lanka"-->

        <!--img src="img/person.png" class="person translate" data-speed="-0.25" alt=""-->
        <img src="includes/img/sigiriya/sigiriya.png" class="mountain1 translate" data-speed="-0.2" alt="">
        <img src="includes/img/sigiriya/sigiriya back2.png" class="mountain2 translate" data-speed="0.4" alt="">
        <img src="includes/img/sigiriya/far mountain copy2.png" class="mountain3 translate" data-speed="0.3" alt="">
        <img src="includes/img/sigiriya/sky.png" class="sky translate" data-speed="0.5" alt="">
    </header>

    <section>
        <div class="shadow"></div>

        <div class="container">
            <div class="content opacity">
                <h3 class="title">
                    Why AroundLanka?
                    <!--the border-->
                    <!--div class="border"></div-->
                </h3>
                <ol>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officiis quos expedita ipsa, a quidem inventore voluptates debitis accusamus tenetur qui et voluptas dicta, culpa earum, doloribus odio consectetur consequuntur soluta quasi nobis! Deserunt voluptatum reiciendis iure expedita sequi quisquam laboriosam temporibus exercitationem.</p>
                </ol>
                
            </div>

            <div class="imgContainer opacity">
                <img src="includes/img/peocock.jpg" alt="">
            </div>
        </div>
    </section>
    <br><br><br>
   <div  class="container-fluid text-center "> <!--class="jumbotron"-->
  <h1 class="display-2 text-secondary col-sm-12">Do You know where to go?</h1><br><br>
  <!--p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead"-->
  	<div>
    <div class="row divz" >
       <div class="col-md-6 bg-success">
       	<h1 class="display-4 font-weight-bold text-light">Yes</h1> <br>
       	<a class="btn btn-light btn-lg" href="file:///C:/xampp/htdocs/CA-web-development-project/home/index/Travel%20Plan/plan.html" role="button">Plan Your Trip</a>
       </div> 
       <div class="col-md-6 col-sm-12 border border-success">
       <h1 class="display-4 font-weight-bold text-success" >No</h1>  <br>
   		<a class="btn btn-success btn-lg" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html" role="button">Click Explore</a>
   	</div> 
    </div>
</div>
    
  </p>
</div>



    <div class="container">
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <h2>Uthappizza</h2>
                <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm col-md">
                <h2>Weekend Grand Buffet</h2>
                <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <h2>Alberto Somayya</h2>
                <h4>Executive Chef</h4>
                <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
            </div>
        </div>
    </div>
    <!--slide shaw-->
      <h1 class="display-2 text-secondary col-sm-12 font-weight-bold">Top Trending Destinations</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <a href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/Catgry/categories/Hikes/ella/template.html">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagez/a.jpg" alt="First slide" style="width:100em; height:40em;">
    <div class="carousel-caption d-none d-md-block">
    <h5>Nine Arch Bridge</h5>
    <p>Ella</p>
  </div>
</a>
    </div>

    <a href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/Catgry/categories/waterfalls/diyaluma/template.html">
    <div class="carousel-item">
      <img class="d-block w-100" src="imagez/b.jpg" alt="Second slide" style="width:100em; height:45em;">
   <div class="carousel-caption d-none d-md-block">
    <h5>Diyaluma Falls</h5>
    <p>Badulla</p>
  </div>
  </a>
    </div>

<a href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/Catgry/categories/Anciant%20Cites/kandy/template.html">
    <div class="carousel-item">
      <img class="d-block w-100" src="imagez/c.jpg" alt="Third slide"  style="width:100em; height:40em;">
     <div class="carousel-caption d-none d-md-block">
    <h5>Temple of the Sacred Tooth Relic</h5>
    <p>Kandy</p>
  </div> 
  </a>  
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
    <div class="row">
       <div class="col-md-6">
           <h1 class="display-2  col-sm-12 font-weight-bold">Choose Place you like</h1>
       </div> 
       <div class="col-md-6">
         <iframe src="https://www.google.com/maps/d/embed?mid=17WqQPF-grsLrI2q3rxfy0RuQTOnG6R7L" width="400" height="500" class="map"></iframe>
       </div> 
    </div>   
  </div>
  <div class="container">
    <div class="row" id="imaged">
       <div class="col-sm-2">
         <a href="https://www.google.com/maps/d/edit?mid=1s2ZhSylhiatnyVHA7mdWp3VQidfxDdUA&ll=7.720483798814996%2C80.20659910937502&z=8">
         <img src="imagez\boat.png" id="imagex"> <br>
         Tours
       </a>
       </div> 

       <div class="col-sm-2">
         
          <a href="https://www.google.com/maps/d/edit?mid=1HVBNHxbiSEzmPTdCl3w49d1YYt1um1ql&ll=7.863821109889235%2C80.78779460000003&z=7">
          <img src="imagez\dear.png" id="imagex"> <br>Parks
        </a>
       </div> 
     <div class="col-sm-2">
     	<a href="https://www.google.com/maps/d/edit?mid=19vRdhBOUtpmSOfY0FQf-musnEbOhm45d&ll=7.863821109889235%2C80.78779460000003&z=7">
        <img src="imagez\hiking.png" id="imagex"> <br> Hiking
    </a>
     </div> 
       <div class="col-sm-2">
        <!--a href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/Catgry/categories/Beach%20Activities/table.html"-->
        	<a href="https://www.google.com/maps/d/edit?mid=1WPBxGJOC9I6fDTrd1wI7h21M8CfwzkcL&usp=sharing">
          <img src="imagez\swimming.png" id="imagex"><br> Swimming
        </a>
       </div> 
        <div class="col-sm-2">
        	<a href="https://www.google.com/maps/d/edit?mid=16keH0dYKsZIkyly-tPtEy3O9hdW6Vx1S&ll=7.863821109889235%2C80.78887450000002&z=7">
           <img src="imagez\heli.png" id="imagex"> <br>Anciant Places
       </a>
        </div> 
       <div class="col-sm-2">
        <a href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/Catgry/categories/OffRoad/table.html">
           <img src="imagez\images.png" id="imagex"><br>Off Road
         </a>
        </div> 
    </div>  
  </div>
   <!--footer --->
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
