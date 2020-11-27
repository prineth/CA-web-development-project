<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
	table, th, td {
        border: 1px solid black;
        width: 100%;
    }
    table th{
        background-color: #4CAF50;
        color: white;
    }
    table tr:nth-child(even){background-color: #f2f2f2;}
    table tr:hover {background-color: #ddd;}
}
    table tbody button{
        background-color: #4CAF50; /* Green */
    }
</style>
	<title>Document</title>
</head>
<body>
<h1 class="text-center">Agent posts</h1><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT postId, postTitle, details, tags FROM gigpost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table >";
        echo "<thead><tr><th>". $row["postTitle"]. "</th></tr></thead><tbody><tr><td>". $row["details"]. "</td></tr><tr><td>". $row["tags"]. "</td></tr><tr><td>" . "<button>Start chat</button>"."</td></tr><tbody>";
        echo "</table>";
        echo "<br><br>";
    }
   // echo "</table>";
   
    

} else {
    echo "0 results";
}

$conn->close();
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>