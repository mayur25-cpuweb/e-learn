<?php
include'config.php';
session_start();
?>
<?php
$emailaddress = $_SESSION["email"];
//echo $emailaddress;
if (empty($emailaddress)) {

  echo "<script>alert('Login First!');</script>";
  echo "<script>window.location.href='techphp.php'</script>";
} else {
}
?>
<?php
        $sql1 = "SELECT * from Courses where id=". $_GET["id"] . "";
        $checksql1 = mysqli_query($conn, $sql1);
        while($rowrow = mysqli_fetch_array($checksql1)){
        
        $courseid = $rowrow['courseid'];
        $coursename = $rowrow['coursename'];
        $coursedetail = $rowrow['coursedetail'];
        $image = $rowrow['image'];
        $status =$rowrow['status'];
        $email=$_SESSION["email"];

        function checkcid($courseid){
            global $conn;
            $courseid1 = ($_GET["id"]);
            $checkidsql2 = "SELECT courseid FROM courses WHERE courseid='" . $courseid1 . "'";
            $check2 = mysqli_query($conn, $checkidsql2);
            if (mysqli_num_rows($check2)>0) {
                return true;
            } else {
                return false;
            }
        }
        if(checkcid($courseid)){
          echo"course already exist";}
          else{
            $insertsqlcourse = "INSERT INTO featured(fcourseid, fcoursename, fcoursedetail,fimage)
            VALUES ('{$courseid}','{$coursename}','{$coursedetail}','{$image}')";//where id=".$_GET["id"] ."";
  
            if (mysqli_query($conn, $insertsqlcourse)) {
             
               // echo "<script>alert('Course Added Successfully!');</script>";
                header("location:allcourses.php");
            } else {
              echo"<script>alert('Course Cannot be added!');</script>";
            }
          }
        }
        
?>   
