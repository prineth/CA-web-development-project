<?php include 'header.php';?>
      
      <div class="main">
        <h2>Lets see your all posts</h2>

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

$sql = "SELECT title, details, tags, image_url FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table >";
        echo "<tr><th>". $row["title"]. "</th></tr><tr><td>". $row["details"]. "</td></tr><tr><td>". $row["tags"]. "</td></tr><tr><th>" . "<button>Start chat</button>"."</th></tr><tbody>";
        echo "</table>";
        echo "<br><br>";
    }
   // echo "</table>";
   
    

} else {
    echo "0 results";
}

$conn->close();
?>

      </div>

<?php include 'footer.php';?>