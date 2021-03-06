<?php include('register/server.php'); ?>
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
    <link rel="stylesheet" type="text/css" href="style/top.css">
    <style type="text/css">
.card h1
{
    font-size: 2rem;
    color: #333;
    margin: 1.5rem 0;

}
.job-title
{
    color: #777;
    font-size: 1rem;
    font-weight: 300;
    
}

.about 
{
    font-size: 1rem;
    margin: 1.5rem 0;
    font-style: italic;
    text-align: center;
    color: #333;
}

.card .btn 
{
    padding: 1rem 2.5rem;
    background-color: #445ae3;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform: uppercase;
    color: #eee;
    font-size: 1.4rem;
    transition: all .5s;
}

.card .btn:hover 
{
    transform: translateY(-2px);
    box-shadow: .5rem .5rm 2rem rgba(0,0,0,.2);
}

.card .btn:active
{
    transform: translateY(0);
    box-shadow: none;
}
.social-media
{
    width: 100%;
    list-style: none;
    display: flex;
    justify-content: space-evenly;
    padding: 2rem 0;
    margin-top: 1.5rem;
    border-top: 1px solid rgba(0,0,0,.1);
}

.social-media i
{
    font-size: 3rem;
    transition: color .5s;
}

.fa-facebook-square
{
    color: #3b5999;
}

.fa-twitter-square
{
    color: #55acee;
}

.fa-instagram
{
    color: #e6683c;
}
.fa-google-plus-square
{
    color: #dd4b39;
}



.fa-facebook-square:hover,
.fa-twitter-square:hover,
.fa-instagram:hover,
.fa-google-plus-square:hover
{
   color: #45e19f; 
}

.card{
	   					width: 100%;
   						 background-color: #ebeef8;
   						 align-items: center;
   						 justify-content: center;
   						 margin: 0px;
   						 box-shadow: .5rem .5rem 3rem rgba(0,0,0,0.2);

}
.card-img{
	height: 15rem;
	width: 100%;
    object-fit: cover;
    -webkit-clip-path: polygon(0 0, 100% 0,100% 78%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 71%, 0% 100%);"
}

.profile-img{
	    width: 15rem;
    height: 15rem;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -11rem;
    z-index: 999;
    border: 1rem solid #ebeef8;

}

@media screen and (min-width: 700px) 
{
    .card-wrapper
    {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    .card
    {
        margin: 2rem;
        transition: transform .5s;
    }

    @keyframes fadeIn {
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }   
        
    }
    .card:nth-child(1)
    {
        animation:fadeIn .5s .5s backwards;
    }
    .card:nth-child(2)
    {
        animation:fadeIn .5s 1s backwards;
    }
    .card:nth-child(3)
    {
        animation:fadeIn .5s 1.5s backwards;
    }
    .card:nth-child(4)
    {
        animation:fadeIn .5s 2s backwards;
    }

    .card:hover
    {
        transform: scale(1.05);
    }
   
    
}
    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>  
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-sm bg-success fixed-top">
        <div class="container-fluid">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand">AroundlLanka</a>
            <div class="collapse navbar-collapse" id="Navbar">
               
                <ul class="navbar-nav mr-auto"> 
                    
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <!--Attraction dropdown-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            Attraction</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html">Explore</a>
                            <a class="dropdown-item" href="#exname" target="#exname">Best tourist destinations</a>
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
<!--####################################################################################################################### -->
                  <!-- login php part CREATE a SESSION -->
             
<!--####################################################################################################################### -->

 <!----------Login button----->

	<a href="register/logx.html"><li class="nav-item active nav-link singup" id="myBtn" style="cursor: pointer;"><!--a href="register/login.php" -->Login<!---/a-->
  	
                    </li></a>
 <!----------------------------------------------------------------------->


<!------sign up button---------------------------------------------->
				<a href="register/signx.html" class="text-light "><li class="nav-item active nav-link singup ">Sign up</a>

			  		<!--li class="nav-item active nav-link singup" id="myBtns" style="cursor: pointer;"--><!--a href="register/login.php" --><!---/a-->
  					 <!--
	                      <div id="myModals" class="modal">

                      
                        <div class="modal-content">
                          <span class="close"></span> 
                          <div class="container">
                          <div class="row ">
                             <div class="col-md-6 border border-success logc text-success ">
                             	<h1 class="display-4 font-weight-bold ">Traveller</h1> 
                             	<h5>Join with us to find out favourite destinations in Sri Lanka and you can easily find out nearby hotels, restuarants, pubs and bars.
                             	It will make easy to find out travel guide to make your trip smoother.</h5>
                             	<div class="bg-success logx"  style="margin-top:10%;">
                             	<a href="register/login.php"><center><h4 class="bg-success text-white">Sign</h4></center></a>
                             	</div>
                             </div> 
                             <div class="col-md-6 border border-success logc text-dark bg-success">
                             		<h1 class="display-4 font-weight-bold ">Guide</h1> 
                             			<h5>Post your service as a travel guide and you can get a major benefit like finding customers very easily.</h5>
                             			<div class="bg-dark logx" style="margin-top:20%;">
                             			<a href="register/login.php"><center><h4 class="text-white">Sign</h4></center></a>
                             			</div>
                             </div> 
                          </div>  
                          </div>
                        </div>
                    </li>
                  -->
                     <!--User dropdown-->
                   
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php if (isset($_SESSION['success'])): ?>
                            <div class="error success">
                                <h3>
                                    <?php 
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    ?>
                                </h3>
                            </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION["username"])): ?>
                            <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
                            <!--p><a href="index.php?logout='1'" style="color: red;">Logout</a></p-->
                        <?php endif ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html">Profile Settings</a>
                            <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html">My Favourite</a>
                            <a class="dropdown-item" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html">My Trips</a>
                               <a class="dropdown-item"
                                    <?php if (isset($_SESSION["username"])): ?>
                                        <a href="index.php?logout='1'"> Logout </a>
                                    <?php endif ?>
                            </a>
                        </div>
                    </li>
                
			<!----------------------------------------------------------------------------------------------------------->
             
                    </li>
                  </ul>
            </div>

        </div>
    </nav>

  <!--div class="covidcontainer">
      <div class="coviddiv">
        <h6>TRAVEL NOTICE:
        <a href="https://covid19.who.int/"> Learn more about COVID-19</a>
        <button class="colsebutton">&times;</button>
        </h6> 
      </div>
  </div-->

	<div class="covidcontainer">
    	<div class="coviddiv" style="position: absolute; top: 120px; z-index: 10;">
    		<h6>TRAVEL NOTICE:
    		<a href="https://covid19.who.int/" style="position: absolute; top: 10px; left: 150px; z-index: 10;"> Learn more about COVID-19</a>
    		<button class="colsebutton" style="position: absolute; top: 0px; left: 1150px; z-index: 10;">&times;</button>
    		</h6> 
    	</div>
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
                    <h5>The AroundLanka website makes it easy to find specisl destinations of your choice in Sri Lanka as well as the hotels, villas and many other places where you can find accommodations. This site also does help to find your clients as a guide. </h5>
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
       	<a class="btn btn-light btn-lg" href="file:///C:/xampp/htdocs/CA-web-development-project/home/index/Travel%20Plan/plan.php" role="button">Plan Your Trip</a>
       </div> 
       <div class="col-md-6 col-sm-12 border border-success">
       <h1 class="display-4 font-weight-bold text-success" >No</h1>  <br>
   		<a class="btn btn-success btn-lg" href="file:///C:/xampp/htdocs/CA-web-development-project/home/Explore/test%201.html" role="button">Click Explore</a>
   	</div> 
    </div>
</div>
    
  </p>
</div>
    


    <!--div class="container">
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm order-sm-first col-md">
                <h2>Uthappizza</h2>
                <p>You can make your  own plan to your trip by our site.It is very easy to find popular places, hotels, restuarants, pubs and other special places. <br>
                Also you can explore different kinds of place categories such as beach activities, 

            how to make a trip?
        how ro </p>
                
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
    </div-->

    <!---Top Agent f* div -->
    <center><h3 class="heading display-3 text-secondary col-sm-12" >Connect With Our Top Agents</h1></center>
   

  <div class="fcontainer" style="width: 95%;" >
    <div class="row">
       <div class="col-3">
          <div class="card">
                      <img src="imagez/background 1.jpg" alt="card background" class="card-img">
                      <img src="imagez/logo1.jpg" alt="profile image" class="profile-img" style=" 
">
                      <h1>Michille Gomes</h1>
                      <p class="job-title">Travel Guide</p>
                      <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Esse, officiis obcaecati asperiores voluptas ducimus est. 
                          Atque nesciunt eveniet commodi natus eos quo, 
                          veritatis soluta temporibus repudiandae velit sequi, 
                          porro doloribus.
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                        </ul>
                  </div>
       </div> 
       <div class="col-3">
                    <div class="card" style="    
">
                      <img src="imagez/background 1.jpg" alt="card background" class="card-img" >
                      <img src="imagez/logo2.jpg" alt="profile image" class="profile-img">
                      <h1>Mia Danel </h1>
                      <p class="job-title">Travel Guide</p>
                      <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Esse, officiis obcaecati asperiores voluptas ducimus est. 
                          Atque nesciunt eveniet commodi natus eos quo, 
                          veritatis soluta temporibus repudiandae velit sequi, 
                          porro doloribus.
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                        </ul>
                  </div>
       </div> 
     <div class="col-3">
                  <div class="card">
                      <img src="imagez/background 1.jpg" alt="card background" class="card-img">
                      <img src="imagez/logo3.jpg" alt="profile image" class="profile-img">
                      <h1>John Bell</h1>
                      <p class="job-title">Travel Guide</p>
                      <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Esse, officiis obcaecati asperiores voluptas ducimus est. 
                          Atque nesciunt eveniet commodi natus eos quo, 
                          veritatis soluta temporibus repudiandae velit sequi, 
                          porro doloribus.
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                        </ul>
                  </div>
     </div> 
       <div class="col-3">
                    <div class="card">
                      <img src="imagez/background 1.jpg" alt="card background" class="card-img">
                      <img src="imagez/logo4.jpg" alt="profile image" class="profile-img" >
                      <h1>Michille Perera</h1>
                      <p class="job-title">Travel Guide</p>
                      <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                          Esse, officiis obcaecati asperiores voluptas ducimus est. 
                          Atque nesciunt eveniet commodi natus eos quo, 
                          veritatis soluta temporibus repudiandae velit sequi, 
                          porro doloribus.
                        </p>
                        <a href="#" class="btn">Contact</a>
                        <ul class="social-media">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
                        </ul>
                  </div>
       </div> 
    </div>    
</div>
</section>
</center>
    <!--slide shaw-->
      <a  name="exname">
      	<h3 class="display-2 text-secondary col-sm-12 font-weight-bold">Top Trending Destinations</h3>

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
      </a>
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
        <a href="https://www.google.com/maps/d/edit?mid=1Bk42bLlrU-yIqTX4MAv7ghGFao4K4c2V&usp=sharing">
           <img src="imagez\camara.png" id="imagex"><br>Special
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
                      97/1,i <br>
                      Dampe, Piliyandala<br>
                      Srilanka<br>
                      Tel.: +94 234 5678<br>
                      Fax: +94 765 4321<br>
                      Email: <a href="mailto:aroundlanka@gmail.com">aroundlanka@gmail.com</a>
                   </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a href="http://google.com/+">Google+</a><br>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a><br>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a><br>
                        <a href="http://twitter.com/">Twitter</a><br>
                        <a href="http://youtube.com/">YouTube</a><br>
                        <a href="mailto:">Mail</a><br>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2020 AroundLanka</p>
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

<!-------------------------------------------------------------------------------------------------------------------------->
  				<!--	 <li class="nav-item active nav-link loging" id="myBtn"><!--a href="register/login.php" --><!--Login<!---/a-->
  					 <!-- The Modal -->
	           <!--           <div id="myModal" class="modal">

                        <!-- Modal content -->
                <!--        <div class="modal-content">
                          <span class="close"></span>
                          <div class="container">
                          <div class="row ">
                             <div class="col-md-6 border border-success logc text-success ">
                             	<h1 class="display-4 font-weight-bold ">Traveller</h1> 
                             	<h5></h5>
                             	<div class="bg-success logx"  style="margin-top:10%;">
                             	<a href="register/login.php"><center><h4 class="bg-success text-white">Login</h4></center></a>
                             	</div>
                             </div> 
                             <div class="col-md-6 border border-success logc text-dark bg-success">
                             		<h1 class="display-4 font-weight-bold ">Guide</h1> 
                             			<h5></h5>
                             			<div class="bg-dark logx" style="margin-top:20%;">
                             			<a href="register/login.php"><center><h4 class="text-white">Login</h4></center></a>
                             			</div>
                             </div> 
                          </div>  
                          </div>
                        </div>
                    </li> -->
                    <!-- Trigger/Open The Modal -->
					<!--li><button id="myBtn">Open Modal</button></li-->
<!--Covid 19 learn more js close part-->

<script>
var closebtns = document.getElementsByClassName("coviddiv");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>