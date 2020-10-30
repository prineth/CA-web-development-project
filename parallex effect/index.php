<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parallax Scrolling Effect</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
    <?php include 'navigator.php' ?>

    <header>
             
        <h1 class="big-title translate" data-speed="0.1">  </h1><!-- TOPIC "travel lanka"-->

        <!--<img src="img/person.png" class="person translate" data-speed="-0.25" alt=""> -->
        <img src="img/sigiriya/sigiriya.png" class="mountain1 translate" data-speed="-0.2" alt="">
        <img src="img/sigiriya/sigiriya back2.png" class="mountain2 translate" data-speed="0.4" alt="">
        <img src="img/sigiriya/far mountain copy2.png" class="mountain3 translate" data-speed="0.3" alt="">
        <img src="img/sigiriya/sky.png" class="sky translate" data-speed="0.5" alt="">
    </header>

    <section>
        <div class="shadow"></div>

        <div class="container">
            <div class="content opacity">
                <h3 class="title">
                    About
                    <div class="border"></div>
                </h3>
                <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque officiis quos expedita ipsa, a quidem inventore voluptates debitis accusamus tenetur qui et voluptas dicta, culpa earum, doloribus odio consectetur consequuntur soluta quasi nobis! Deserunt voluptatum reiciendis iure expedita sequi quisquam laboriosam temporibus exercitationem.</p>
            </div>

            <div class="imgContainer opacity">
                <img src="img/image.jpg" alt="">
            </div>
        </div>
    </section>
    
    <script src="app.js"></script>
</body>
</html>