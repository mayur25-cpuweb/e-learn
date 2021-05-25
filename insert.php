<?php
include'config.php';
session_start();
?>
<?php
$emailaddress = $_SESSION["email"];

if (empty($emailaddress)) {

  echo "<script>alert('Login First!');</script>";
  echo "<script>window.location.href='insert.php'</script>";
} else {
}
?>
<?php
        $sql1 = "SELECT * from featured where id=". $_GET["id"] . "";
        $checksql1 = mysqli_query($conn, $sql1);
        while($rowrow = mysqli_fetch_array($checksql1)){
        
        $courseid = $rowrow['fcourseid'];
        $coursename = $rowrow['fcoursename'];
        $coursedetail = $rowrow['fcoursedetail'];
        $image = $rowrow['fimage'];
       // $status =$rowrow['fstatus'];
        $email=$_SESSION["email"];

            $insertsqlcourse = "INSERT INTO addedcourse (addedcourseid, addedcoursename, addedcoursedetail,addedemail,addedimage)
            VALUES ('{$courseid}','{$coursename}','{$coursedetail}','{$email}','{$image}')";//where id=".$_GET["id"] ."";
  
            if (mysqli_query($conn, $insertsqlcourse)) {
             
                echo "<script>alert('Course Added Successfully!');</script>";
                echo "<script>window.location.href='dphp.php'</script>";
            } else {
              echo"<script>alert('Course Cannot be added!');</script>";
            }
          }
        
?>   
