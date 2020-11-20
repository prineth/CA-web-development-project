<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	table, th, td {
    border: 1px solid black;
    width: 30%;
}
</style>
	<title>Document</title>
</head>
<body>
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
        echo "<table>";
        echo "<tr><th>". $row["postTitle"]. "</th></tr><tr><td>". $row["details"]. "</td></tr><tr><td>". $row["tags"]. "</td></tr>";
        echo "</table>";
        echo "<br><br>";
    }
   // echo "</table>";
   
    

} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>