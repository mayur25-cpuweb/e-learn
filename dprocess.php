<?php
session_start();
require'config.php';
$addedemail=$_SESSION['email'];
?>
<?php
$selectnamesql="SELECT * from registration WHERE email='" .$_SESSION['email']. "'";
$checkname = mysqli_query($conn, $selectnamesql);

$row = mysqli_fetch_array($checkname);
$rname = $row['rname'];

?> 
<?php
// if (isset($_POST['addbtn1'])) {
//     $insertsqlcourse="INSERT INTO addedcourse(addedcourseid,addedcoursename,addedcoursedetail,addedstatus,addedemail)
//     VALUES ('$addedcourseid','$addedcoursename','$addedcoursedetail','$addedstatus','$addedemail')WHERE addedemail='" .$_SESSION['email']. "'";
// mysqli_query($con, $insertsqlcourse);
// $status = "Record Updated Successfully. </br></br>";
// }
?>