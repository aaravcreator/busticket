
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>
		Dashboard
	</title>
</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost:3000/index.php">
   
    ADMIN PORTAL
  </a>
</nav>



<?php

   $user =$_POST['user'];
   $pass =$_POST['pass'];





$servername = "localhost";
$username = "root";
$password = "2245";
$dbname = "php_crud_tutorial";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

   $row = mysqli_fetch_array($result) or die( mysqli_error($conn));
   
   if($row['user'] == $user && $row['pass']==$pass){

   	    echo 'Login sucess!!!  Welcome '.$row['user'];

   	   
   } 



 ?>                   



 </body>
</html>