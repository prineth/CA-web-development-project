<?php include '../register/Agent signup form/server.php'; ?>

<?php 
     //connect to database
     $db = mysqli_connect('localhost', 'root', '', 'agent');

    //insert new post data to Database
    //if  submit noe itton clicked
    if(isset($_POST["submit"])){
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $details = mysqli_real_escape_string($db, $_POST['details']);
        $tags = mysqli_real_escape_string($db, $_POST['tags']);
        $image_url = mysqli_real_escape_string($db, $_POST['image']);

        $password = md5($password); //encrypting password beforre saving
            $sql = "INSERT INTO posts (
                        username,
                        password,
                        title, 
                        details,
                        tags, 
                        image) 
                    VALUES (
                        '$username',
                        '$password',
                        '$title',
                        '$details',
                        '$tags',
                        '$image_url')";
            mysqli_query($db,$sql);
    }
?>