<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="sidenav">
        <a href="index.php" class="topic"><b>Travel Agent</b></a><br>
        <a href="all.php" class="active">All posts</a>
        <a href="add new.php">Add new post</a>
        <a href="../register/Agent signup form/signup.php">Sign in</a>
        <a href="../register/Agent signup form/login.php">Log in</a>
        <?php if (isset($_SESSION["username"])): ?>
           <a href="index.php?logout='1'" style="color: red;"></a>
            <label class="uname">Welcome,<br> <b><?php echo $_SESSION["username"] ?></b></label>
            

        <?php endif ?>
        <!--label class="uname">Welcome, <b>Prineth</b></label-->
      </div>