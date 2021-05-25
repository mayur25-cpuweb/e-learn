<?php
session_start();
include'config.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #474e5d;
      font-family: Helvetica, sans-serif;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background-color: white;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
    }

    /* Container around content */
    .container {
      padding: 10px 40px;
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    /* The circles on the timeline */
    .container::after {
      content: '';
      position: absolute;
      width: 25px;
      height: 25px;
      right: -17px;
      background-color: white;
      border: 4px solid #FF9F55;
      top: 15px;
      border-radius: 50%;
      z-index: 1;
    }

    /* Place the container to the left */
    .left {
      left: 0;
    }

    /* Place the container to the right */
    .right {
      left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      right: 30px;
      border: medium solid white;
      border-width: 10px 0 10px 10px;
      border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
      content: " ";
      height: 0;
      position: absolute;
      top: 22px;
      width: 0;
      z-index: 1;
      left: 30px;
      border: medium solid white;
      border-width: 10px 10px 10px 0;
      border-color: transparent white transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
      left: -16px;
    }

    /* The actual content */
    .content {
      padding: 20px 30px;
      background-color: white;
      position: relative;
      border-radius: 6px;
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

      /* Place the timelime to the left */
      .timeline::after {
        left: 31px;
      }

      /* Full-width containers */
      .container {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      /* Make sure that all arrows are pointing leftwards */
      .container::before {
        left: 60px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
      }

      /* Make sure all circles are at the same spot */
      .left::after,
      .right::after {
        left: 15px;
      }

      /* Make all right containers behave like the left ones */
      .right {
        left: 0%;
      }
    }

    #myVideo {
      width: 100%;
    }
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
</head>

<body>
  <?php

 $sql1 = "SELECT * from coursevideos where addedvideocourseid='".$_GET['addedvideocourseid']."'";
        $checksql1 = mysqli_query($conn, $sql1);
        while($rowrow4 = mysqli_fetch_array($checksql1)){
        
        $addedvideocourseid = $rowrow4['addedvideocourseid'];
        $addedvideoname = $rowrow4['addedvideoname'];
        $vname1=$rowrow4['vname1'];
        $vtext1=$rowrow4['vtext1'];
        $videourl1 = $rowrow4['videourl1'];
        $vname2=$rowrow4['vname2'];
        $vtext2=$rowrow4['vtext2'];
        $videourl2 = $rowrow4['videourl2'];
        $vname3=$rowrow4['vname3'];
        $vtext3=$rowrow4['vtext3'];
        $videourl3 = $rowrow4['videourl3'];
        $vname4=$rowrow4['vname4'];
        $vtext4=$rowrow4['vtext4'];
        $videourl4 = $rowrow4['videourl4'];

        $emailvideo=$_SESSION["email"];
       


        echo"<div class='timeline'>
        <div class='container left'>
          <div class='content'>
            <h2>".$vname1."</h2>
            <video controls id='myVideo'>
                 <source src='".$videourl1."' type='video/mp4'>
               Your browser does not support HTML5 video.
            </video>
           <div>
           ".$vtext1."
           </div>
            </div>
        </div>
        <div class='container right'>
          <div class='content'>
            <h2>".$vname2."</h2>
            <video controls id='myVideo'>
                 <source src='".$videourl2."' type='video/mp4'>
               Your browser does not support HTML5 video.
            </video>
            <div>
            ".$vtext2."
            </div>
            </div>
        </div>
        <div class='container left'>
          <div class='content'>
            <h2>".$vname3."</h2>
            <video controls id='myVideo'>
                 <source src='".$videourl3."' type='video/mp4'>
               Your browser does not support HTML5 video.
            </video>
            <div>
            ".$vtext3."
            </div>           
            </div>
        </div>
        <div class='container right'>
          <div class='content'>
            <h2>".$vname4."</h2>
            <video controls id='myVideo'>
                 <source src='".$videourl4."' type='video/mp4'>
               Your browser does not support HTML5 video.
            </video>
            <div>
            ".$vtext4."
            </div>  
            </div>
        </div>      
      </div>
      <br>
      <hr>
      <div class='container-fluid' style='float:right;'>
      <form method='post' onclick='return confirm('Are you sure you want to delete All Related Database?')'>
      <a href='congo.php'><button type='submit' class='button' style='vertical-align:middle' name='complete'><span>Completed!</span></button></a>
      </form>
      </div>";
      break;
      ?>
<?php
}
?>
<?php
if(isset($_POST['complete'])){
//echo"<script>alert('ok')</script>";

$sql0 = "SELECT * from addedcourse where addedcourseid='$addedvideocourseid'";
$checksql0 = mysqli_query($conn, $sql0);
while($rowrow0 = mysqli_fetch_array($checksql0)){

$addedcourseid = $rowrow0['addedcourseid'];
$addedcoursename = $rowrow0['addedcoursename'];
$addedcoursedetail = $rowrow0['addedcoursedetail'];
$addedimage = $rowrow0['addedimage'];
// $status =$rowrow['fstatus'];
$addedemail=$_SESSION["email"];

    $insertsqlcourse0 = "INSERT INTO completecourse (compcourseid, compcoursename, compcoursedetail,compemail,compimage)
    VALUES ('{$addedcourseid}','{$addedcoursename}','{$addedcoursedetail}','{$addedemail}','{$addedimage}')";

    if (mysqli_query($conn, $insertsqlcourse0)) {
      
    } else {
      echo"<script>alert('Course Cannot be Added!');</script>";
    }
  }

  $query12 = "DELETE FROM addedcourse WHERE addedcourseid='$addedvideocourseid'";
  if(mysqli_query($conn,$query12)){
  
  }else{
    echo"Delete Error.";
  }
  echo"<script>alert('THANK YOU!')</script>";
  echo"<script>window.location.href='congo.php'</script";
}

        
?>

</body>

</html>