<?php
session_start();
require'config.php';
?>
<?php
$selectnamesql="SELECT rname from registration WHERE email='" .$_SESSION['email']. "'";
$checkname = mysqli_query($conn, $selectnamesql);

$row = mysqli_fetch_array($checkname);
$rname = $row['rname'];
?>

<?php

$selectcoursesql1="SELECT * FROM course WHERE id='1'";
$coursequery1 = mysqli_query($conn, $selectcoursesql1);
$row1 = (mysqli_fetch_array($coursequery1));
$courseid1 = $row1['courseid'];
$coursename1 = $row1['coursename'];
$coursedetail1 = $row1['coursedetail']; 
$video1 = $row1['video'];

$selectcoursesql2="SELECT * FROM course WHERE id='2'";
$coursequery2 = mysqli_query($conn, $selectcoursesql2);
$row2 = (mysqli_fetch_array($coursequery2));
$courseid2 = $row2['courseid'];
$coursename2 = $row2['coursename'];
$coursedetail2 = $row2['coursedetail']; 
$video2 = $row2['video'];


$selectcoursesql3="SELECT * FROM course WHERE id='3'";
$coursequery3 = mysqli_query($conn, $selectcoursesql3);
$row3 = (mysqli_fetch_array($coursequery3));
$courseid3 = $row3['courseid'];
$coursename3 = $row3['coursename'];
$coursedetail3 = $row3['coursedetail']; 
$video3 = $row3['video'];


$selectcoursesql4="SELECT * FROM course WHERE id='4'";
$coursequery4 = mysqli_query($conn, $selectcoursesql4);
$row4 = (mysqli_fetch_array($coursequery4));
$courseid4 = $row4['courseid'];
$coursename4 = $row4['coursename'];
$coursedetail4 = $row4['coursedetail']; 
$video4 = $row4['video'];

?>


<?php
//$addbtn1=$_POST['addbtn1'];
// $addbtn2=$_POST['addbtn2']="";
// $addbtn3=$_POST['addbtn3']="";
// $addbtn4=$_POST['addbtn4']="";
 if (isset($_POST["addbtn1"])) {

    echo "<script>confirm('hey');</script>";
  }
?>