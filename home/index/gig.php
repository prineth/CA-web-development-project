<?php

	include_once 'agent/include/server.php';
	/* 
	$conn = mysql_connect('localhost', 'root', '', 'agent');
	$query = "SELECT * FROM `gigpost`";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)) {
		# code...
		echo "".$row["postTitle"]." ".$row["photo"]." ".$row["details"]." ".$row["tags"]."<br>";
	}*/


 ?>
<!DOCTYPE html>
<html>
 <head>
 	<title> Retrive data</title>
 </head>
	<body>
		<?php 
			$sql = "SELECT * FROM gigpost;";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo $row['postTitle'] . "<br>";
				}
			}
		 ?>
	 </body>
</html>