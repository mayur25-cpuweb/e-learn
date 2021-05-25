<?php
$servername = "localhost";
$username = "root";
$password = "";;
// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,'elearn')or die("cannot select DB");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo"<br>";}
// }else
// echo "Connected successfully";
// echo"<br>";
?>