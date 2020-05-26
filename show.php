<!DOCTYPE html>


<html lang="en">
<head>

<meta charset="UTF-8">


<title>Add Todo</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #c68c53;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #c68c53;
}
</style>

</head>
<body>
<ul>
  <li><a  href="myphp.php">Add</a></li>
  <li><a class="active" href="#news">Show</a></li>
</ul>
<table id="customers">
    <tr>

      <th>Title</th>
      <th>Deadline</th>
<th>Action</th>
    </tr>
<?php
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

$sql = "SELECT id,title,date FROM todolist order by date";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

 		$field1name = $row["title"];
        $field2name = $row["date"];



        echo "<tr>";
                  echo "<td>$field1name</td>";
                  echo "<td>$field2name</td>";
				echo "<td><a href=\"delete.php?id=".$row['id']."\">Delete</a></td>";
              echo "</tr>";



  }
}
$conn->close();
?>
</table>
</body>
</html>