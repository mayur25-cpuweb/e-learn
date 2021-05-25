<?php
include'config.php';
session_start();
?>
<h1>HEloo world</h1>
<?php
$emailaddress=$_SESSION["email"];
echo $emailaddress;
if(empty($emailaddress)){
    
    echo"<script>alert('Login First!');</script>";
    echo"<script>window.location.href='techphp.php'</script>";
}else{
    
}
?>
<br>
<!-- <a name="logout"  onclick='javascript:confirmation()' style="cursor: pointer;">logout</a> -->

<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
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

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
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
  background-color:lightblue;
  margin-left:14%;
  margin-right:2%;
  border-radius: 25px;
  margin-top:4px;
  box-shadow: 2px 4px 10px 10px rgba(0,0,0,0.2);
  
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
  background-color:palegreen;
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
  font-size:40px;
}

.topnav-right {
  float: right;
  margin-right: 1%;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;

  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
@media screen and (max-width: 992px) {
  .topnav{
    text-align: center;
    float: none;
    margin: 1%;
    padding-bottom: 4%;

  }
  .topnav-right {
    display: block;
    margin-top: auto;
  }
  .whypara{
    margin-left: 0;
  }
  .img1{
    width: 100%;
    height: auto;
  }
  .welcome{
    width: 100%;
    padding-right: 2%;
    padding-left: 2%;
  }
  .bodymain{
    margin: 0;
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
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.comp{
  width: 100%;
  max-width: 125px;
  height: auto;
}
.welcome{background-image: url(https://image.freepik.com/free-photo/natural-wooden-background_24837-269.jpg); 
  background-attachment: fixed; background-size: cover; background-position: center center;
  width:70%;
  margin-top:2%;
}

.bodymain{margin-left:1.5%;}


.whypara{
  margin-right: 2%;
  text-align:justify;
  margin-left: 0%;
  color: #fff;
}
.img1{
  z-index:9;
  width: 60%;
  height: auto;
}
.why{
  margin-top: 1%;
  font-family: 'Kiwi Maru', serif;
  padding-bottom: 1%;
  font-size: medium;
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
.hero{
font-weight: bold;
opacity: 0.6;
}
</style>
</head>
<body>
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
  <a href ="" style="font-family: 'Zen Dots', cursive; color:black;">DASHBOARD</a>
  <!-- <img src="" alt="" width="" height=""> -->
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="#news"><img src="comp.jpg" class="comp"></a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
   <a><div class="chip">
   <img src="img_avatar.jpg" alt="Person" width="96" height="96">
   John Doe</a>
   </div>
  </div>
</div>
<div class="container-fluid bodymain">
<div class=" container welcome">
<div class="row">
    <div class="col-md" >
      <img src="https://image.freepik.com/free-vector/astronaut-draw-with-planets_25030-38608.jpg" class="img1">
  
    </div>
    <div class="col-md why">
      <h1 style="color: white;" >WELCOME<i class="fas fa-question"></i></h1>
      <br>
      <div class="whypara"><h2>MAYUR<br></h2>
        Your edX learning experience is grounded in cutting edge cognitive science. With more than two dozen distinct learning features to help you achieve your goals, our approach follows three key principles:
        <br><hr style="width: 50%;">
       </div>
    </div>
  </div>
</div>
<hr>

<div class="container row row-cols-1 row-cols-md-4 g-4">
  
<div class="featured">
  <h1> Our Special Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
  <p class="hero"  style="text-align: center;">
 We are providing following highly demanded courses in lowest price in hindi.</p>
</div>

<div class="col">
    <div class="card">
    <img src="https://1.bp.blogspot.com/-u6m6p2Xg15U/WT5USPk1sFI/AAAAAAAAAmM/xrK498qe2xIhxCuS2859bUJ26cMlvcHnACLcB/s1600/data%2Bentrya.png" class="card-img-top1" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="content container" style="padding-left: 6%;padding-right:6%;">
<div class="featured">
  <h1> Our Special Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
  <p class="hero"  style="text-align: center;">
 We are providing following highly demanded courses in lowest price in hindi.</p>
</div>
  <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
    <img src="https://1.bp.blogspot.com/-u6m6p2Xg15U/WT5USPk1sFI/AAAAAAAAAmM/xrK498qe2xIhxCuS2859bUJ26cMlvcHnACLcB/s1600/data%2Bentrya.png" class="card-img-top1" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="https://scalefactor.com/wp-content/uploads/2018/06/accounting-for-startups-1.jpeg" class="card-img-top1" alt="...">
     <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="http://1.bp.blogspot.com/-LhE0_TjoYZg/UXUyEFbvYBI/AAAAAAAAAYM/6EWcmZIjzWI/s1600/TallyERP_9_Spalsh_Screen_300-3-4.jpg" height="150"class="card-img-top1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="https://th.bing.com/th/id/OIP.RmIZyVgjuynU1UdkaoDAFwAAAA?pid=ImgDet&rs=1" class="card-img-top1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>

<script>
function confirmation(logout)
{
    mess1='YOU WANT TO LOGOUT?';
x = confirm(mess1); 
if (x == true)
   {
    window.location.href='logout.php';
    
   }
}
</script>

<?php
include'config.php';
session_start();
?>
<h1>HEloo world</h1>
<?php
$emailaddress=$_SESSION["email"];
echo $emailaddress;
if(empty($emailaddress)){
    
    echo"<script>alert('Login First!');</script>";
    echo"<script>window.location.href='techphp.php'</script>";
}else{
    
}
?>
<br>
<!-- <a name="logout"  onclick='javascript:confirmation()' style="cursor: pointer;">logout</a> -->

<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
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

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
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
  background-color:lightblue;
  margin-left:14%;
  margin-right:2%;
  border-radius: 25px;
  margin-top:4px;
  box-shadow: 2px 4px 10px 10px rgba(0,0,0,0.2);
  
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
  background-color:palegreen;
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
  font-size:40px;
}

.topnav-right {
  float: right;
  margin-right: 1%;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;

  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
@media screen and (max-width: 992px) {
  .topnav{
    text-align: center;
    float: none;
    margin: 1%;
    padding-bottom: 4%;

  }
  .topnav-right {
    display: block;
    margin-top: auto;
  }
  .whypara{
    margin-left: 0;
  }
  .img1{
    width: 100%;
    height: auto;
  }
  .welcome{
    width: 100%;
    padding-right: 2%;
    padding-left: 2%;
  }
  .bodymain{
    margin: 0;
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
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.comp{
  width: 100%;
  max-width: 125px;
  height: auto;
}
.welcome{background-image: url(https://image.freepik.com/free-photo/natural-wooden-background_24837-269.jpg); 
  background-attachment: fixed; background-size: cover; background-position: center center;
  width:70%;
  margin-top:2%;
}

.bodymain{margin-left:1.5%;}


.whypara{
  margin-right: 2%;
  text-align:justify;
  margin-left: 0%;
  color: #fff;
}
.img1{
  z-index:9;
  width: 60%;
  height: auto;
}
.why{
  margin-top: 1%;
  font-family: 'Kiwi Maru', serif;
  padding-bottom: 1%;
  font-size: medium;
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
.hero{
font-weight: bold;
opacity: 0.6;
}
</style>
</head>
<body>
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
  <a href ="" style="font-family: 'Zen Dots', cursive; color:black;">DASHBOARD</a>
  <!-- <img src="" alt="" width="" height=""> -->
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="#news"><img src="comp.jpg" class="comp"></a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
   <a><div class="chip">
   <img src="img_avatar.jpg" alt="Person" width="96" height="96">
   John Doe</a>
   </div>
  </div>
</div>
<div class="container-fluid bodymain">
<div class=" container welcome">
<div class="row">
    <div class="col-md" >
      <img src="https://image.freepik.com/free-vector/astronaut-draw-with-planets_25030-38608.jpg" class="img1">
  
    </div>
    <div class="col-md why">
      <h1 style="color: white;" >WELCOME<i class="fas fa-question"></i></h1>
      <br>
      <div class="whypara"><h2>MAYUR<br></h2>
        Your edX learning experience is grounded in cutting edge cognitive science. With more than two dozen distinct learning features to help you achieve your goals, our approach follows three key principles:
        <br><hr style="width: 50%;">
       </div>
    </div>
  </div>
</div>
<hr>

<div class="container row row-cols-1 row-cols-md-4 g-4">
  
<div class="featured">
  <h1> Our Special Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
  <p class="hero"  style="text-align: center;">
 We are providing following highly demanded courses in lowest price in hindi.</p>
</div>

<div class="col">
    <div class="card">
    <img src="https://1.bp.blogspot.com/-u6m6p2Xg15U/WT5USPk1sFI/AAAAAAAAAmM/xrK498qe2xIhxCuS2859bUJ26cMlvcHnACLcB/s1600/data%2Bentrya.png" class="card-img-top1" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>

<div class="content container" style="padding-left: 6%;padding-right:6%;">
<div class="featured">
  <h1> Our Special Courses <img src="rocket.gif" class="rgif" alt="..."></h1>
  <p class="hero"  style="text-align: center;">
 We are providing following highly demanded courses in lowest price in hindi.</p>
</div>
  <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card">
    <img src="https://1.bp.blogspot.com/-u6m6p2Xg15U/WT5USPk1sFI/AAAAAAAAAmM/xrK498qe2xIhxCuS2859bUJ26cMlvcHnACLcB/s1600/data%2Bentrya.png" class="card-img-top1" alt="...">
    
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="https://scalefactor.com/wp-content/uploads/2018/06/accounting-for-startups-1.jpeg" class="card-img-top1" alt="...">
     <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="http://1.bp.blogspot.com/-LhE0_TjoYZg/UXUyEFbvYBI/AAAAAAAAAYM/6EWcmZIjzWI/s1600/TallyERP_9_Spalsh_Screen_300-3-4.jpg" height="150"class="card-img-top1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="https://th.bing.com/th/id/OIP.RmIZyVgjuynU1UdkaoDAFwAAAA?pid=ImgDet&rs=1" class="card-img-top1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>

<script>
function confirmation(logout)
{
    mess1='YOU WANT TO LOGOUT?';
x = confirm(mess1); 
if (x == true)
   {
    window.location.href='logout.php';
    
   }
}
</script>

