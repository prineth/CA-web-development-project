<?php 
	$server = "localhost";
	$user = "root";
	$pw = "";
	$db = "agent";

	$postTitle = $_POST['postTitle'];
	$photo = $_POST['photo'];
	$details = $_POST['details'];
	$tags = $_POST['tags'];

	//create connection
	$conn = new mysqli($server, $user, $pw, $db);

	if($conn->connect_errno){
		die("Connection Failed" . $conn->connect_error);
	}
	 /*   else {
        echo "success";
    }*/

    //gettign values
    $sql = "INSERT INTO gigpost (postTitle,photo,details,tags) VALUES('$postTitle','$photo','$details','$tags')";

    if($conn->query($sql)==TRUE){
    	echo "New post created successfully.";
    }
    else{
    	echo "There is an error!!!". $sql . "<br>" . $conn->error;
    }

    $conn->close();

 ?>