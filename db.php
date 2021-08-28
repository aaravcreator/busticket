<?php


$servername = "localhost";
$username = "root";
$password = "2245";
$dbname = "php_crud_tutorial";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
      die("Connection Failed!." .mysqli_connect_error());
}





 ?>       