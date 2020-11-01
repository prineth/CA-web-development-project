<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-image: linear-gradient(to right, #ff5722, #ff9800);
            margin-top: 150px !important;
        }
    </style>
</head>
<body>
    <h1>HOME PAGE MODER PUKER</h1>
    <!-- Calling user name -->
        <?php if(isset($_SESSION['success'])): ?>
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        <?php endif ?>
        
        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <h3><?php echo $_SESSION["username"] ?></h3></p>
            <p><a href="index.php?logout='1'" style="color: red;"></a></p>

        <?php endif ?>
</body>
</html>