
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">


<title>Add Todo</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
<style>
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
  <li><a class="active" href="myphp.php">Add</a></li>
  <li><a href="show.php">Show</a></li>
</ul>
<!-- CONTACT SECTION -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div>
                         <h2>Add ToDo</h2>
                       </div>
               </div>

               <div class="col-md-12 col-sm-12">
                     <!-- CONTACT FORM HERE -->
                    <div>
                    <?php
                    if(array_key_exists('submit', $_POST)) {
					            button1();
					        }
					        function button1() {



					if( $_POST["name"] || $_POST["dateofbirth"] ) {
					$txt = $_POST['name'];
					$date = $_POST['dateofbirth'];


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
					VALUES ('$txt','$date')";

					if (mysqli_query($conn, $sql)) {
					  echo "New record created successfully";
					} else {
					  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}

					mysqli_close($conn);
					header('Location: http://localhost/todo/myphp.php');
					  exit();
										   }
					   }
?>
                        <form  method="POST" id="contact-form">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="name" placeholder="Todo Title">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="dateofbirth" id="dateofbirth" placeholder="Dead Line" onfocus="(this.type='date')">
                              </div >
                              <div class="col-md-12 col-sm-6">

                              <br><br>
                              </div>
                              <div class="col-md-offset-1 col-md-2 col-sm-offset-3 col-sm-2">

							                                	<input id="submit" class="form-control" type = "reset" value="reset" name="submit"/>
                              </div>

                              <div class="col-md-offset-3 col-md-2 col-sm-offset-3 col-sm-6">

                              	<input id="submit" class="form-control" type = "submit" value="add" name="submit"/>
                              </div>
                        </form>
                    </div>
               </div>

          </div>
     </div>
</section>

</body>
</html>
