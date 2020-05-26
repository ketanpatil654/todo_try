<?php
$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "Todo";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM todolist WHERE  id='".$id."'");
mysqli_close($conn);
header("Location: show.php");
?>