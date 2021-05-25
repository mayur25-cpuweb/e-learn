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

    <!-- <link rel="stylesheet" type="text/css" href="aboutcss.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>MISSION</title>
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

    .brandname p {
        margin-top: 2.5%;
        text-align: center;
        width: auto;
        font-family: 'Lobster Two', cursive;
        font-size: 55px;
        font-weight: bold;
    }

    .brandname {
        
        margin-top: 2%;
    }

    .proud {
        background-image: url(https://image.freepik.com/free-photo/close-up-hand-taking-notes_23-2148888827.jpg);
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
    }

    .mission p {
        position: relative;
        animation-name: mymove;
        animation-duration: 3s;
    }

    @keyframes mymove {
        from {
            left: -500px;
        }

        to {
            left: 20px;
        }
    }

    .top-heading p {
        width: 100%;
        text-align: center;
        color: #808080;
        font-size: 70px;
        text-transform: capitalize;
    }

</style>

<body style="background-color:lightseagreen;" id="main">

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
                <a class="nav-link" href="course.php">Courses</a>
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
                <a class="nav-link" href="course.php">Courses</a>
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

      <div class="brandname box">
        <p>ABOUT US</p>
    </div>
    <div class="container-fluid proud">
        <div class="container">
            <div class="row top-heading pt-5 pb-5">
                <div class="mission col-md-12 ">
                    <p
                        style="color: orange;font-size:500%;font-weight: bold;text-align: right;font-family: 'Teko', sans-serif;">
                        OUR MISSION</p>
                    <h4 class="text-right text-dark" style="margin-left:50%;font-weight: bold;">

                        In Our today's processing world,<br>with the emerging advanced technology there <br>is a huge expansion
                        of crime and illegal activity.<br>On the basis of this illegal activity <br>we have launced one website
                        in which<br> there is a information of <br>latest technology with online security and online business
                        courses.
                    </h4>

                    <a href="contact.php"><button type="button" class="btn btn-lg btn-warning">VISIT US</button></a>
                </div>
            </div>
        </div>
    </div>
    <hr>

  


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
     