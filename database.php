<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lib";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $conn = mysqli_connect($servername,$username,$password);
// $conn -> set_charset("utf8");
// $dbconfig = mysqli_select_db($conn,$dbname);
?>


