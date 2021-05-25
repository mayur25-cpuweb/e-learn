<!doctype html>
<?php
include_once'techlogin.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='refresh' content='500'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="sublimeregistercss.css">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

    <title>E-Learn</title>
  </head>
  <body id="main">
<style>
  .img-fluid {
        width: 70px;
    }
</style>
    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
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
                <a class="nav-link active" aria-current="page" href="techphp.php">Home</a>
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
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
     
     <style>
       .toptext{
        margin-top:9%;margin-right:10%;text-align:right;font-family: 'Cinzel', serif
       }
       .rest{
        font-size:60px;color:white;font-weight:bold;
       }
       .change{
        font-size:55px;color:darkred;font-weight:bold
       }

       @media screen and (max-width: 992px) {
        .edximg{
         display: none;
       }
       .toptext h1{
         margin-top: 11%;
         margin-right:auto; 
         margin-left: auto;
        font-size:100%;
       }
       #myVideo {
         width: fit-content;
       }
      }
      #myVideo {
        z-index: -1;
        position:absolute;
        width: 100%; 
        height:auto;
      }

     </style>
    <section class="home-banner-area">
   
    <div class="d-flex ">
    
    <video autoplay muted loop id="myVideo">
  <source src="ecv.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
    
    <div class="container-fluid edximg">
    <img src="https://www.edx.org/images/marketing/homepage-hero-lg.png">
    </div>
    
    <div class="container-fluid toptext" >
    <h1 class="rest">RESTLESS LEARNERS</h1>
     <h1 class="change">CHANGE THE WORLD!</h1>
    </div>
    </div>
          </section>

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
<div class="d-grid gap-2 d-md-block btngrp">
  <a href="techregister.php"><button class="btn btn-light col-md-2" type="button" >Create Account</button></a>
  <a action="techlogin.php"><button class="btn btn-success col-md-1" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  >Login</button></a>
</div>
</section>
<div class="container-fluid goals">
  <h1 class="titlegoal">Achieve Your Goals With Us</h1>
  <div class="card-deck col-md-12 cardgoals">
    <div class="card card1 ">
      <img src="https://icons.iconarchive.com/icons/graphicloads/medical-health/96/human-brain-icon.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <h5 class="card-title">Learn the
          latest skills</h5>
        <p class="card-text">like business analytics, graphic design, Python, and more</p>
      </div>
    </div>
    <div class="card card1">
      <img src="https://icons.iconarchive.com/icons/google/noto-emoji-people-profession/96/10225-woman-teacher-light-skin-tone-icon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Get ready
          for a career</h5>
        <p class="card-text">in high-demand fields like IT, AI and cloud engineering.</p>
      </div>
      
    </div>
    <!-- <div class="card card1">
      <img src="https://icons.iconarchive.com/icons/inipagi/job-seeker/96/certificate-icon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Earn
          a degree</h5>
        <p class="card-text">from a leading university in business, computer science, and more
        </p> 
      </div>
     </div> -->
    <div class="card card1">
      <img src="https://icons.iconarchive.com/icons/icons-land/vista-people/96/Groups-Rescuers-Dark-icon.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Upskill your
          organization</h5>
        <p class="card-text">with on-demand training and development programs</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid whycontain">
  <div class="row">
    <div class="col-md" >
      <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/6xXERT0XZPJDXgjPzr8Bve/d858e0cda1a5e5df2cb8accd65d5c1b7/outcomes.png " class="img1">
  
    </div>
    <div class="col-md why">
      <h1 style="color: white;" >Why To Learn With Us<i class="fas fa-question"></i></h1>
      <br>
      <div class="whypara"><h2>Enabling transformation<br></h2>
        Your learning experience is grounded in cutting edge cognitive science.our approach follows three key principles:
        <br><hr style="width: 50%;">
        <h3>Experience</h3>
        Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics to data visualizations and interactive elements.
        <br><br>
        <h3>Practice</h3>
        Demonstrating your knowledge is a critical part of learning.
        <br><br>
        <h3>Apply</h3>
        Learning on- how you think and what you can do, and translates directly into the real world—immediately apply your new capabilities in the context of your job. 
      </div>
    </div>
  </div>
</div>

<div class="featured">
  <h1>Featured Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4">
<?php
        $sql = "SELECT * from featured";
        $checksql = mysqli_query($conn, $sql);
        // $rowrow = mysqli_fetch_array($checksql);
        while($rowrow1=mysqli_fetch_assoc($checksql)) {
        ?><form method="post">
        
            <div class="col">
            <div class="card2 card">
              <img src='<?php echo $rowrow1['fimage']; ?>' class='card-img-top1'>

              <div class='card-body'>
                <input name="id" type="hidden" value="<?php echo $rowrow1['id']; ?>" name="id" />
                <h5 class='card-title' name="fcourseid" value="<?php echo $rowrow1['fcourseid']; ?>">
                  <?php echo $rowrow1['fcourseid']; ?></h5>
                <h5 class='card-title' name="fcoursename" value="<?php echo $rowrow1['fcoursename']; ?>">
                  <?php echo $rowrow1['fcoursename']; ?></h5>
                <p class='card-text' name="fcoursedetail" value="<?php echo $rowrow1['fcoursedetail']; ?>">
                  <?php echo $rowrow1['fcoursedetail']; ?></p>
              </div>
              <div>
                <button type='submit' class="btncard"name='addbtn1' value='<?php echo $rowrow1['id']; ?>'><a
                    href="featuredinsert.php?id=<?php echo $rowrow1['id'];?>" style="text-decoration: none; color:white;">Add
                    Course</a></BUTTON>
              </div>
            </div> 
          </div>
         
        </form>
        <?php
        }
        //$main1=$rowrow1['id'];
        ?>
  <!-- <div class="card card2">
    <img src="https://scalefactor.com/wp-content/uploads/2018/06/accounting-for-startups-1.jpeg" class="card-img-top1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Accounting</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <p><button class="btncard">Add Course</button></p>
  </div>
  <div class="card card2">
    <img src="https://fanzlive.com/wp-content/uploads/2017/08/15863882-Engineering-automation-designing-Energy-Stock-Photo-engineering-software-development.jpg" class="card-img-top1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Software Enginnering</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <p><button class="btncard">Add Course</button></p>
  </div>
  <div class="card card2">
    <img src="https://th.bing.com/th/id/OIP.RmIZyVgjuynU1UdkaoDAFwAAAA?pid=ImgDet&rs=1" class="card-img-top1" alt="...">
    <div class="card-body">
      <h5 class="card-title">Database Management System</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <p><button class="btncard">Add Course</button></p>-->
  </div>
</div>


<section class="features">
<div class="featured-hero">
  <h1>Features That Make Us Hero <img src="rocket.gif" class="rgif" alt="..."></h1>
  <p class="hero"> Some Interesting Features Which Make Us Hero Of Market</p>
</div>
<br>
<div class="container-fluid flipper">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
  <div class="flip-card card3">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Places-certificate-server-icon.png" class="card-img-top2" alt="Avatar"><br><br>
      <h4>COURSE VALUE</h4>
    </div>
    <div class="flip-card-back">
      <h1>Valuable</h1> 
      
      <p>Earn a career credential, apply your knowledge to 
        hands-on projects that showcase your skills for employers, and get access to career support resources</p>
    </div>
  </div>
</div>
  </div>
  <div class="col">
    <div class="flip-card card3">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Apps-preferences-system-time-icon.png" class="card-img-top2" alt="Avatar"><br><br>
          <h4>TIME AND LEARNING EASE</h4>
        </div>
        <div class="flip-card-back">
          <h1>Convenience</h1> 
          <p>IT gives the convenience of learning which 
            is independent of time and place constraints. eLearning enables users to be able 
            to learn at any time and place without hassle.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="flip-card card3">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-5/128/Select-language-icon.png" class="card-img-top2" alt="Avatar"><br><br>
          <h4>NATIVE LANGUAGE</h4>
        </div>
        <div class="flip-card-back">
          <h1>Compatibilty</h1> 
          <p>
								All courses on are available in the Hindi language to make it easier to understand.
							</p>
        </div>
      </div>
    </div>
  </div>
 
  
</div>
</div>
</section>
<?php
include_once'techfooter.php';
?>

</body>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
      window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 10) {
    document.getElementById("navbar").style.backgroundColor = "black";
  } else {
    document.getElementById("navbar").style.backgroundColor ="transparent";
  }
}
    </script>
    <script>
      function openNav() {
        
        document.getElementById("mySidenav").style.width = "250px";
        
        
        
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      
      }
      </script>
     
   

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>