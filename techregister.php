<!doctype html>
<html lang="en">
  <head>
    <?php
    include('config.php');
    include_once'techlogin.php';
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registercss.css">
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <title>User Registration</title>
    <style>
.error {color: #FF0000;}
</style>

<script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(190)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
  </head>
  <body>
    <Style>


.navbar{
   background-color: #111;
  width: 100%;
  display: block;
margin-bottom: 2%;
}
.nav-item{
    text-decoration-style: solid;
    text-shadow: 0 0 black;
    text-transform: uppercase;
    display: inline-block;
}
.navbar a {
    
    display: block;
    color:black;
   
    padding: 15px;
    text-decoration: none;
    font-size: 17px;
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


    </Style>
  <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
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

<?php
require('registerprocess1.php')
?>
<div class="card card1 col-md-8">

  <div class="row g-0">
  <div class="card cardimginput container">
    <form method="post" enctype="multipart/form-data" id="form1" runat="server">
   <!-- <div class="card cardimginput container"> -->
  <a href="#"><img src="https://cdn.pixabay.com/photo/2018/11/13/22/01/instagram-3814081_960_720.png" id="blah" class="card-img-top1" alt="..."></a>
  
  <div class="card-body col-md-12">
  
  <input class="form-control form-control-sm" id="formFileSm" type="file" onchange="readURL(this);"style="width:100%" name="filedp"/>

  </div>
<!-- </div> -->
    
    </div> 

    <div class="col-md-8 registerform">
      <div class="card-body">
      <h2 style="text-align: center;">Create Account</h2>
      <p class="hero"  style="text-align: center;"> Fill Up All Fields To Start With Us</p>
<p><span class="error">* Required field</span></p>
 
  <br> <i class="fas fa-user-tie">&nbsp;</i><input type="text" name="name" placeholder="Name">
  <span class="error">* <br><?php echo $nameErr;?></span>
  <br><br>
  <br><i class="fas fa-envelope"></i> <input type="text" name="email" placeholder="Email" >
  <span class="error">* <br><?php echo $emailErr;?></span>
  <br><br>
  <br><i class="fas fa-mobile-alt"></i> <input type="Number" name="mnumber" id="mnumber" placeholder="Number" maxlength=10>
  <span class="error">*<?php echo $contactErr;?></span>
  <br><br>
  <i class="fas fa-address-card"></i>
  <br> <textarea name="comment" rows="3" placeholder="Full Address"></textarea>
  <br><br>
  <i class="far fa-building"></i> <input type="text" name="city" class="city" placeholder="City">
  <span class="error"> * <?php echo $cityerr;?></span>
  <div class="statediv">
  <i class="fas fa-university"></i> <input type="text" name="state" class="state" placeholder="State">
  <span class="error">* <?php echo $stateerr;?></span></div>
  <br><br>
  <i class="fas fa-lock"></i> <input type="password" name="password" class="password" placeholder="Password :Should Be atleast 6 characters">
  <span class="error">*<br><?php echo $passerr;?></span>
  <br><br>
  <i class="fas fa-lock"></i> <input type="password" name="passwordConfirm" class="passwordConfirm" placeholder="Password Confirm">
  <span class="error">* <br><?php echo $passconfirmerr;?></span>
  <br><br>
  <i class="fas fa-venus-mars"></i> Gender:  <span class="error">* <?php echo $genderErr;?></span><br>
  <input type="radio" name="gender" class="radiobtn"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female <i class="fas fa-female"></i><br>
  <input type="radio" name="gender" class="radiobtn"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male <i class="fas fa-male"></i><br>
  <input type="radio" name="gender" class="radiobtn"<?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other <i class="fas fa-transgender"></i>

  <br><br>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
       <a href class=""style="color:black;text-decoration:none;">Agree to terms and conditions</a>
      </label>
    </div>
  </div>
  <?php echo $done;?>
  <?php echo $doneerror;?>
  <br>
  <input type="submit" name="register" value="Create Account" class="submitbtn btn-primary">  
</form>

      </div>
    </div>
  </div>
 
    <hr>
</div>
</div>
<br><br>
    <script>
      function openNav() {
        
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>
  </body>
<?php
include("techfooter.php");
?>
