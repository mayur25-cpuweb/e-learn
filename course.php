<!DOCTYPE html>
<html lang="en">
<?php
include_once'techlogin.php';
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
</head>
<style>
    
    .navbar{
  background-color: #111;
  width: 100%;
  display: block;


}

.navbar a {
    
    display: block;
    color:black;
   
    padding: 15px;
    text-decoration: none;
    font-size: 17px;
  }

body{
   
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;

}
.nav-item{
    text-decoration-style: solid;
    text-shadow: 0 0 black;
    text-transform: uppercase;
    display: inline-block;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 20px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-fluid {
        width: 70px;
    }
    .featured{
  margin-top: 2%;
  text-align: center;
  font-weight: bold;
  margin-bottom: 2%;
}
.rgif{
  width:50px;
}
.card-img-top2{
  width:100px;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  height:auto;
  text-align: center;
  font-family: arial;
}
.card2 button {
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

.card2 button:hover {
  opacity: 0.7;
}

.titleword{
  text-align: center;
  padding-top:20px;
  position: relative;
  text-transform: uppercase;
  width: 60%;
  color: #fff;
  padding-bottom: 2%;
}
.comp{
  width: 100%;
  max-width: 125px;
  height: auto;
}
.card-deck{
width: 80%;
margin-left: 10%;

}
.titlecard {
  box-shadow: 2px 8px 14px 14px rgba(0,0,0,0.2);
transition: 0.3s;
}
.titlecard:hover {
  box-shadow: 4px 14px 20px 20px rgba(0,0,0,0.2);
}
.card-img-top{
  width: 20%;
  align-self: center;
}
#title{background-image: url(https://image.freepik.com/free-photo/ready-back-school_1134-12.jpg); 
  background-attachment: fixed; background-size: cover; background-position: center center;}

.titlegoal{
  text-align: center;
  text-decoration:underline;
}

.goals{
  margin-top:2%;
  text-align: center;
}
    </style>
   <body id="main"> 

<nav class="navbar navbar-expand-lg navbar-dark " id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="comp.jpg" class="img-fluid"></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="sidenav" data-bs-target="#mySidenav" aria-controls="mySidenav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"  onclick="openNav()"></span>
    </button>
    <div id="mySidenav" class="sidenav" style="z-index:9;position:fixed;">
      <button type="button" class="btn-close btn-close-white closebtn" aria-label="Close" onclick="closeNav()" ></button>
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a> -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about1.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" action="techlogin.php" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor:pointer;">Login/Register</a>
              </li>
              
             <?php
             
             ?>
            </ul>
</div>
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="line"  class="navbar-toggler-icon" onclick="openNav()" ></span>
            <i id="close" class="far fa-window-close" class="closebtn" onclick="closeNav()"></i>
          </button> -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about1.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" action="techlogin.php" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor:pointer;">Login/Register</a>
              </li>
             
            </ul>
         </div>
        </div>
      </nav>
      <section id="title" style="padding-bottom:4%;">
  <div class="container-fluid titleword">
    <h1 style="border:3px; border-style:solid; border-color:cornsilk;"><a href="#"><img src="comp.jpg" class="comp"></a> Rashtirya kaushal vikas yojna</h1>
    <br>
    <h2>Certified courses</h2>
  </div>
<div class="container-sm">
  <div class="card-deck text-center">
    <div class="card titlecard ">
      <img src="nsdc.png" class="card-img-top1" alt="...">
      
    </div>
    <div class="card titlecard ">
      <img src="cpisd.png" class="card-img-top1" alt="...">
    </div>
  </div>
  </div>
<br>
</section>



      <div class="featured">
  <h1>All Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
<?php
        $sql = "SELECT * from courses";
        $checksql = mysqli_query($conn, $sql);
        // $rowrow = mysqli_fetch_array($checksql);
        while($rowrow1=mysqli_fetch_assoc($checksql)) {
        ?><form method="post">
        
            <div class="col">
            <div class="card2 card">
              <img src='<?php echo $rowrow1['image']; ?>' class='card-img-top1'>

              <div class='card-body'>
                <input name="id" type="hidden" value="<?php echo $rowrow1['id']; ?>" name="id" />
                <h5 class='card-title' name="courseid" value="<?php echo $rowrow1['courseid']; ?>">
                  <?php echo $rowrow1['courseid']; ?></h5>
                <h5 class='card-title' name="coursename" value="<?php echo $rowrow1['coursename']; ?>">
                  <?php echo $rowrow1['coursename']; ?></h5>
                <p class='card-text' name="coursedetail" value="<?php echo $rowrow1['coursedetail']; ?>">
                  <?php echo $rowrow1['coursedetail']; ?></p>
              </div>
              <div>
                <button type='submit' class="btncard"name='addbtn1' value='<?php echo $rowrow1['id']; ?>'><a
                    href="cadd.php?id=<?php echo $rowrow1['id'];?>" style="text-decoration: none; color:white;">Add
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
   


</body>
      <script>
      function openNav() {
        
        document.getElementById("mySidenav").style.width = "250px";
        
        
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      
      }
      </script>
<?php
include'techfooter.php'
?>
     