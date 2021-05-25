<?php
include'config.php';
session_start();
?>
<?php
$emailaddress = $_SESSION["email"];

if (empty($emailaddress)) {

  echo "<script>alert('Login First!');</script>";
  echo "<script>window.location.href='index.php'</script>";
} else {
}
?>
<?php
        $sql1 = "SELECT * from courses where id=". $_GET["id"] . "";
        $checksql1 = mysqli_query($conn, $sql1);
        while($rowrow = mysqli_fetch_array($checksql1)){
        
        $courseid = $rowrow['courseid'];
        $coursename = $rowrow['coursename'];
        $coursedetail = $rowrow['coursedetail'];
        $status =$rowrow['status'];
        $addedimage =$rowrow['image'];
        $email=$_SESSION["email"];

            $insertsqlcourse = "INSERT INTO addedcourse (addedcourseid, addedcoursename, addedcoursedetail, addedstatus,addedemail,addedimage)
            VALUES ('{$courseid}','{$coursename}','{$coursedetail}','{$status}','{$email}','{$addedimage}')";//where id=".$_GET["id"] ."";
  
            if (mysqli_query($conn, $insertsqlcourse)) {
             
                echo "<script>alert('Course Added Successfully!');</script>";
                echo "<script>window.location.href='dphp.php'</script>";
            } else {
              echo"<script>alert('Course Cannot be added!');</script>";
            }
          }
        
?>   
