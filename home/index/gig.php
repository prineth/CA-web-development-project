<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	table, th, td {
    border: 1px solid black;
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
	echo "<table><tr>
			<th>Post ID</th>
			<th>Post Title</th>
			<th>Details</th>
			<th>Tags</th>
		</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["postId"] . "</td><td>". $row["postTitle"]. "</td><td>". $row["details"]. "</td><td>". $row["tags"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>