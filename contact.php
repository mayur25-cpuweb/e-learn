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

    <!-- <link rel="stylesheet" type="text/css" href="contactcss.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>CONTACT</title>
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


.brandname p{
    margin-top: 2.5%;
    text-align: center;
    width: auto;
    font-family: 'Lobster Two', cursive;
    font-size: 55px;
    font-weight: bold;
}
.brandname{
        background-color:  #D4AF37;
        margin-top: 2%;
}
    
  </style>
  <style>
  .img-fluid {
        width: 70px;
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
<br>
<div class="container-fluid contact">
  <div class="container">
    <div class="row top-heading ">
      <div class="col-md-12 text-center">
        <p style="font-size:80px;">Contact Us</p>
      </div>
    </div>
    <div class="container">
  <h2>Send us a message and we’ll get back to you as soon as possible.</h2>
  
  <form method="post">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="cname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="cemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="form-group">
      <label for="pHN">Phone No.:</label>
      <input type="number" class="form-control" name="cnumber" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="form-group">
      <label for="sel1">What You Are Getting In Touch About?:</label>
       <select class="form-control" id="sel1" name="getintouch"required>
    <option value="General">General</option>
    <option value="Careers">Careers</option>
    <option value="Private Events">Private Events</option>
    <option value="Media &Press">Media & Press</option>
    <option value="Others">Other</option>
  </select>
  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="email">Message</label>
      <Textarea type="text" class="form-control" name="message" required></Textarea>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
<br>
    <button type="submit" id="submit" class="btn btn-success" name="contactbtn">Submit</button>
  </form>
  <?php
  if (isset($_POST['contactbtn'])) {
    $cname =$_POST["cname"];
    $cemail =$_POST["cemail"];
    $getintouch =$_POST["getintouch"];
    $message =$_POST["message"];
    $cnumber =$_POST["cnumber"];

    if (empty($_POST["cnumber"])) {
        $contactErr = "Contact Number is Required";
    }
      elseif(strlen($cnumber) < 10) {  // Max 
        $contactErr = 'Error: Mobile Number: Enter 10 Digits Number';
       }
      elseif(strlen($cnumber) > 10) {  // Max 
        $contactErr = 'Error: Mobile Number: Enter 10 Digits Number';
      }else{
        
        $register = "INSERT INTO contact(cname,cemail,getintouch, message, cnumber)
        VALUES ('$cname','$cemail','$getintouch','$message','$cnumber')";

       if (mysqli_query($conn, $register)) {
           echo"<span class='badge rounded-pill bg-success'>Message Successfully Sent!</span>";
       } else {
           echo "ERROR: Could not able to execute. " . mysqli_error($conn);
           
          // <span class='badge rounded-pill bg-danger'>ERROR: Could not able to execute $sql. mysqli_error($conn); </span>
           echo"<span class='badge rounded-pill bg-danger'>ERROR: Could not able to execute</span>" . mysqli_error($conn);
       }
      }
  }
  ?>
</div>
<hr>
<p style="font-weight:bold; font-size: 350%;">Reach Us</p>
     <div class="col-md-12 google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.788137818511!2d75.85821561498143!3d25.142852583921513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f8518a31f0779%3A0x4a038f1d997aa105!2sCareer%20Point%20CP%20Tower%202!5e0!3m2!1sen!2sin!4v1608290383467!5m2!1sen!2sin" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
<hr>
    <div class="row mt-4">
      <div class="col-md-4">
        <h4>Address:</h4>
        <p>2-6-497/2,kota colony.<br/>
          kota,rajasthan-324005.</p><br/>
          <p><i class="fa fa-envelope" aria-hidden="true"></i>: bhatiamayur56@gmail.com</p>
        <p><i class="fa fa-phone" aria-hidden="true"></i> :+91 1111111111 </p>
        <p><i class="fa fa-facebook-square" aria-hidden="true"></i> : www.facebook.com </p>
        <p><i class="fa fa-fax" aria-hidden="true"></i> : 123456789</p>
      </div>
      
      
      <div class="col-md-4">
    <h4>OPENING HOURS:</h4>
    <p>Monday:   10am to 8pm</p>
    <p>Tuesday:   10am to 8pm</p>
    <p>Wednesday:   10am to 8pm</p>
    <p>Thrusday:   10am to 8pm</p>
    <p>Friday:   10am to 8pm</p>
    <p>Saturday:   10am to 8pm</p>
    
    </div>
    
    </div>
    
  </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script type="text/javascript">
    (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
 


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
     
