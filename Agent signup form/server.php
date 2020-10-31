<?php 
    session_start();

    $fullname = "";
    $username = "";
    $email = "";
    $dob = "";
    $address = "";
    $nic = "";
    $contact = "";
    $errors = array();

    //connect to database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    //if signup button click
    if(isset($_POST['signup']))
    {
        $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $dob = mysqli_real_escape_string($db, $_POST['dob']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $nic = mysqli_real_escape_string($db, $_POST['nic']);
        $contact = mysqli_real_escape_string($db, $_POST['contact']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        //ensure that form fields are filled properly
        if(empty($fullname))
        {
            array_push($errors, "Fullname is required");
        }     
        if(empty($username))
        {
            array_push($errors, "Username is required");
        } 
        if(empty($email))
        {
            array_push($errors, "Email is required");
        }   
        if(empty($dob))
        {
            array_push($errors, "Date of birth is required");
        } 
        if(empty($address))
        {
            array_push($errors, "Address is required");
        } 
        if(empty($nic))
        {
            array_push($errors, "NIC is required");
        } 
        if(empty($contact))
        {
            array_push($errors, "Contact is required");
        } 
        if(empty($password_1))
        {
            array_push($errors, "Password is required");
        } 
        if($password_1 != $password_2)
        {
            array_push($errors, "Passwords are not match");
        }

        //if there is no errors, save user to data base
        if(count($errors) == 0)
        {
            $password = md5($password_1); //encrypting password beforre saving
            $sql = "INSERT INTO agent (
                        fullname, 
                        username,
                        email, 
                        dob, 
                        address, 
                        nic,
                        contact, 
                        password) 
                    VALUES (
                        '$fullname',
                        '$username',
                        '$email',
                        '$dob',
                        '$address',
                        '$nic',
                        '$contact',
                        '$password')";
            mysqli_query($db,$sql);

            	
			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "you are now logged in";
			//header('location: index.php');// redirect to home page
        }
    }

        // Log user in login form
        //ensure that form fields are filled properly
        //header('location: login.php');

        //Logout
        if (isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location: login.php');// redirect to home page
        }


?>