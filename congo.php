<!DOCTYPE html>
<html>
<?php
include'congoprocess.php';
include'config.php';
?>
<?php
$emailaddress = $_SESSION["email"];
// echo $emailaddress;
if (empty($emailaddress)) {

  echo "<script>alert('Login First!');</script>";
  echo "<script>window.location.href='techphp.php'</script>";
} else {
}
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("cup.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
.button {
  display: inline-block;
  border-radius: 4px;
  
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
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

<div class="bg-image"></div>

<div class="bg-text">
<p style="font-size:25px;color:black">Hey! <?php echo $rname; ?></p>
<i class="far fa-laugh-beam" style="color:black;font-size:50px"></i>
  <h2 style="color:green">Best Wishes!</h2>
  <h1 style="font-size:50px;color:gold"><i class="fas fa-medal"></i>Congratulations!<i class="fas fa-medal"></i></h1>
  <span style="color:lawngreen">YOU HAVE COMPLETED THE COURSE!</span>
  <br>
  <p style="font-size:20px;"><i class="fas fa-star-of-life"></i> The journey of a hundren miles starts from single step. Keep the courage as you face new challenges in life. <i class="fas fa-star-of-life"></i></p>
  <a href="dphp.php"><button class="button btn-success" style="vertical-align:middle" name="complete"><span>Back To Dashboard</span></button></a>
</div>

</body>
</html>
