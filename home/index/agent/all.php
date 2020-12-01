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
      echo "<table>
                  <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Post details</th>
                        <th>Post Tags</th>
                        <th>Update</th>
                        <th>Delete</th>
                  </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>". $row["title"] ."</td><td>" . $row["image_url"] ."</td><td>". $row["tags"] ."</td><td>" . $row["details"];

    }
    echo "</table>";
   
    

} else {
    echo "0 results";
}

$conn->close();
?>

      </div>

<?php include 'footer.php';?>