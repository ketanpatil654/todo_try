<?php

if( $_POST["name"] || $_POST["dateofbirth"] ) {
      echo "Welcome ". $_POST['name']. "<br />";
      echo "You are ". $_POST['dateofbirth']. " years old.";

      exit();
   }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Todo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO todolist (title,date)
VALUES ('John','2008-7-04')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>