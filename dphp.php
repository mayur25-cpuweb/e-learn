<?php
include 'config.php';
include 'dprocess.php';
?>
<?php
$emailaddress = $_SESSION["email"];
// echo $emailaddress;
if (empty($emailaddress)) {

  echo "<script>alert('Login First!');</script>";
  echo "<script>window.location.href='index.php'</script>";
} else {
}
?>
<!-- <a name="logout"  onclick='javascript:confirmation()' style="cursor: pointer;">logout</a> -->

<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: "Lato", sans-serif;
    }
    footer{
      margin-left: 11%;
    }
    .welcome {
      background-image: url(https://image.freepik.com/free-photo/natural-wooden-background_24837-269.jpg);
      background-attachment: fixed;
      background-size: cover;
      background-position: center center;
      width: 89.5%;
      margin-top: 1%;
      margin-left: 10%;
    }
    .topnav-centered a {
      float: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px;
    }
    .sidebar {
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: black;
      position: fixed;
      height: 100%;
      overflow: auto;
      box-shadow: 2px 4px 10px 10px rgba(0, 0, 0, 0.2);
      border-radius: 15px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 16px;
      text-decoration: none;
      margin-left: 10px;
    }

    .sidebar a.active {
      background-color: white;
      color: black;
      margin: 0;
    }

    .sidebar a:hover:not(.active) {
      background-color: white;
      color: black;
      margin: 0;
    }

    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: auto;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }

    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }


    .topnav {
      position: relative;
      overflow: hidden;
      background-color: lightblue;
      margin-left: 13.5%;

      border-radius: 25px;
      margin-top: 4px;
      box-shadow: 2px 4px 8px 8px rgba(0, 0, 0, 0.2);
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: palegreen;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    .topnav-centered a {
      float: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px;
    }

    .topnav-right {
      float: right;
      margin-right: 1%;
    }
   
  

    @media screen and (width:768px) {
      .topnav {
        width: 90%;
        margin-left: 28%;
        
      }
      .topnav-centered a {
      
      font-size: 20px;
    }
      .welcome {
        margin-left: 28%;
      }
      footer {
        margin-left: 27%;
        margin-right: auto;
      }
      
    }

    @media screen and (min-width: 769px) and (max-width: 1024px) {
      .topnav {
        margin-left: 20%;
        display: list-item;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
      }

      .welcome {
        margin-left: 11%;
      }
      .topnav-centered a {
      
      font-size: 25px;
    }
    footer{
      margin-left: 20%;
    }
    }

    /* Responsive navigation menu (for mobile devices) */
    @media screen and (max-width: 600px) {

      .topnav a,
      .topnav-right {
        float: none;
        display: block;
      }

      .topnav {
        margin-left: 0;
        margin-bottom: 2%;
        margin-top: 2%;
        padding-bottom: 10%;
      }

      .topnav-centered a {
        position: relative;
        top: 0;
        left: 0;
        transform: none;
      }

      .bodymain {
        margin: 0;
      }

      .pillstab {
        width: auto;
        justify-content: unset;
      }
      footer {
        margin: 0;
      }
    }

    @media screen and (min-width: 769px) and (max-width: 992px) {
      .topnav {
        text-align: center;
        float: none;
        margin-left: 0;
        padding-bottom: 4%;

      }

      .topnav-right {
        display: block;
        margin-top: auto;
      }

      .whypara {
        margin-left: 0;
      }

      .img1 {
        width: 100%;
        height: auto;
      }

      .welcome {
        width: 100%;
        
      }

      .pillstab {
        width: auto;
        justify-content: unset;
      }

    }

    .chip {
      display: inline-block;
      padding: 0 25px;
      height: 55px;
      font-size: 16px;
      line-height: 50px;
      border-radius: 25px;
      background-color: lightblue;
      position: relative;
  
    }

    .chip img {
      float: left;
      margin: 0 10px 0 -25px;
      height: 75px;
      width: 80px;
      border-radius: 50%;
    }

    .comp {
      width: 100%;
      max-width: 125px;
      height: auto;
    }

    

    .bodymain {
      margin-left: 1.5%;
    }


    .whypara {
      margin-right: 7%;
      text-align: justify;
      margin-left: 0%;
      color: #fff;
    }

    .img1 {
      margin-left: 20%;
      width: 60%;
      height: auto;
    }

    .why {
      margin-top: 1%;
      font-family: 'Kiwi Maru', serif;
      padding-bottom: 1%;
      font-size: medium;
    }

    .featured {
      margin-top: 2%;
      text-align: center;
      font-weight: bold;
      margin-bottom: 2%;
    }

    .rgif {
      width: 50px;
    }

    .hero {
      font-weight: bold;
      opacity: 0.6;
    }

    .pillstab {
      justify-content: center;
    }

    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    .card button:hover {
      opacity: 0.7;
    }

    /* Dropdown Button 

/* The container <div> - needed to position the dropdown content 

/* Dropdown Content (Hidden by Default) 
.dropdown-content {
  display: none;
  position: fixed;
  background-color: black;
  width:9%;
  margin-top:6%;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 0;
  z-index: 1;
}

/* Links inside the dropdown
.dropdown-content a {
  color: white;
  
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover 
.dropdown-content a:hover {background-color: transparent;}

/* Show the dropdown menu on hover 
.chip:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown 
.chip:hover .dropbtn {background-color: black;}*/
      </style>
</head>

<body>
  <div class="sidebar">
    <a class="active" href="dphp.php"><i class="fas fa-home"></i> Home</a>
    <a href="course.php"><i class="fas fa-book"></i> Courses</a>
    <a href="contact.php"><i class="fab fa-teamspeak"></i> Contact</a>
    <a href="about1.php"><i class="fab fa-teamspeak"></i> About</a>
    <hr style="color:white;">
    <a href="profile.php"><i class="fas fa-user"></i>Profile</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <div class="topnav">

    <!-- Centered link -->
    <div class="topnav-centered">
      <a href="" style="font-family: 'Zen Dots', cursive; color:black;">DASHBOARD</a>
      <!-- <img src="" alt="" width="" height=""> -->
    </div>
    <!-- Left-aligned links (default) -->
    <a href="dphp.php"><img src="comp.jpg" class="comp"></a>
    <!-- Right-aligned links -->

    <div class="topnav-right">
    <a>
        <div class="chip">
<?php
$selectnamesql="SELECT * from registration WHERE email='" .$_SESSION['email']. "'";
$checkname = mysqli_query($conn, $selectnamesql);

while($row = mysqli_fetch_array($checkname)){

?>
          <img src="<?php echo $row['rimage']; ?>" alt="Person" width="96" height="96">
          <?php echo $rname; ?>
  <!-- <div class="dropdown-content">
  
    <!-- <a href="#">Link 1</a>
    <!-- <a href="#"><button class="btn btn-info"><i class="fas fa-user"></i> Profile</button></a>
    <br>
    <a href="logout.php"><button class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
  
  </div> -->
        </div>
        </a>
    </div>
<?php
}
?>

    </div>
  </div>
  </div>
  
  <div class="container-fluid bodymain">
    <div class="welcome">
      <div class="row">
        <div class="col-md-6">
          <img src="https://image.freepik.com/free-vector/astronaut-draw-with-planets_25030-38608.jpg" class="img1">

        </div>
        <div class="col-md why">
          <h1 style="color: white;">WELCOME<i class="fas fa-exclamation"></i></h1>
          <br>
          <div class="whypara">
            <h2><?php echo $rname; ?><br></h2>
            Your edX learning experience is grounded in cutting edge cognitive science. With more than two dozen
            distinct learning features to help you achieve your goals, our approach follows three key principles:
            <br>
            <hr style="width: 50%;">
          </div>
        </div>
      </div>
    </div>
    <div class="content container">
      <hr width="20">
      <div class="featured">
        <h1> Your Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
      </div>
      <div class="container-fluid">
        <div class="container">
          <nav>
            <div class="nav nav-tabs pillstab" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">In-Progress</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</button>
            </div>
          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                $sqladd ="SELECT * FROM addedcourse WHERE addedemail='" . $_SESSION["email"]. "'";
                $checksqladd = mysqli_query($conn, $sqladd);
                while($rowrow3=mysqli_fetch_assoc($checksqladd)) {
                  ?>
                <form method="post">
                  <div class='col'>
                    <div class='card'>
                      <img src=<?php echo $rowrow3['addedimage'];?> style="width:100%;height:120px;"
                        class='card-img-top1'>
                      <div class='card-body'>
                        <input name="id" type="hidden" value="<?php echo $rowrow3['id']; ?>" name="id" />
                        <h5 class='card-title' name="courseid" value="<?php echo $rowrow3['addedcourseid']; ?>">
                          <?php echo $rowrow3['addedcourseid']; ?></h5>
                        <h5 class='card-title' name="coursename" value="<?php echo $rowrow3['addedcoursename']; ?>">
                          <?php echo $rowrow3['addedcoursename']; ?></h5>
                        <p class='card-text' name="coursedetail" value="<?php echo $rowrow3['addedcoursedetail']; ?>">
                          <?php echo $rowrow3['addedcoursedetail']; ?></p>
                      </div>
                      <div>
                        <button type='submit' name='addbtn1' value='<?php echo $rowrow3['addedcourseid']; ?>'><a
                            href="techtimeline.php?addedvideocourseid=<?php echo $rowrow3['addedcourseid'];?>"
                            style="text-decoration:none; color:white;">In-Progress</a></BUTTON>
                      </div>
                    </div>
                  </div>
                </form>
                <?php
                    }
                    ?>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                $sqladd ="SELECT * FROM completecourse WHERE compemail='" . $_SESSION["email"]. "'";
                $checksqladd = mysqli_query($conn, $sqladd);
                while($rowrow3=mysqli_fetch_assoc($checksqladd)) {
                  ?>
                <form method="post">
                  <div class='col'>
                    <div class='card'>
                      <img src=<?php echo $rowrow3['compimage'];?> style="width:100%;height:120px;"
                        class='card-img-top1'>
                      <div class='card-body'>
                        <input name="id" type="hidden" value="<?php echo $rowrow3['id']; ?>" name="id" />
                        <h5 class='card-title' name="courseid" value="<?php echo $rowrow3['compcourseid']; ?>">
                          <?php echo $rowrow3['compcourseid']; ?></h5>
                        <h5 class='card-title' name="coursename" value="<?php echo $rowrow3['compcoursename']; ?>">
                          <?php echo $rowrow3['compcoursename']; ?></h5>
                        <p class='card-text' name="coursedetail" value="<?php echo $rowrow3['compcoursedetail']; ?>">
                          <?php echo $rowrow3['compcoursedetail']; ?></p>
                      </div>
                      <div>
                        <button type='submit' name='addbtn1' value='<?php echo $rowrow3['compcourseid']; ?>' onclick="alert('THIS COURSE HAS BEEN COMPLETED')">
                        <a href="congo.php" style="text-decoration:none; color:white;">Complete</a></BUTTON>
                          
                            
                      </div>
                    </div>
                  </div>
                </form>
                <?php
                    }
                    ?>
              </div>
            </div>


          </div>
        </div>
      </div>

    </div>
    <div class="content container" style="padding-left: 6%;padding-right:6%;">
      <hr width="20">
      <div class="featured">
        <h1> Our Special Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
        <p class="hero" style="text-align: center;">
          We are providing following highly demanded courses in hindi.</p>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        $sql = "SELECT * from featured";
        $checksql = mysqli_query($conn, $sql);
        // $rowrow = mysqli_fetch_array($checksql);
        while($rowrow1=mysqli_fetch_assoc($checksql)) {
        ?><form method="post" id="addcourse">

          <div class='col'>
            <div class='card'>
              <img 
                src=<?php echo $rowrow1['fimage'];?> style="width:100%;height:120px;"
                class='card-img-top1'>

              <div class='card-body'>
                <input name="id" type="hidden" value="<?php echo $rowrow1['id']; ?>" name="id" />
                <h5 class='card-title' name="courseid" value="<?php echo $rowrow1['fcourseid']; ?>">
                  <?php echo $rowrow1['fcourseid']; ?></h5>
                <h5 class='card-title' name="coursename" value="<?php echo $rowrow1['fcoursename']; ?>">
                  <?php echo $rowrow1['fcoursename']; ?></h5>
                <p class='card-text' name="coursedetail" value="<?php echo $rowrow1['fcoursedetail']; ?>">
                  <?php echo $rowrow1['fcoursedetail']; ?></p>
              </div>
              <div>
                <button type='submit' name='addbtn1' value='<?php echo $rowrow1['id']; ?>'><a
                    href="insert.php?id=<?php echo $rowrow1['id'];?> " style="text-decoration: none; color:white;">Add
                    Course</a></BUTTON>
              </div>
            </div>
          </div>
        </form>
        <?php
        }
        //$main1=$rowrow1['id'];
        ?>
      </div>
    </div>
  </div>
</body>

</html>
<script>
  function confirmation(logout) {
    mess1 = 'YOU WANT TO LOGOUT?';
    x = confirm(mess1);
    if (x == true) {
      window.location.href = 'logout.php';

    }
  }
</script>
<?php
include 'techfooter.php';
?>