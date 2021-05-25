<!doctype html>
<html lang="en">
<?php
session_start();
include'config.php';
//include'profileprocess.php';
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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">

  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

</head>

<div class="table-responsive">
  <table class="table table-dark table-hover table-striped caption-top table-bordered">
    
    <thead>
      <tr>
        <th scope="col"> ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Gender</th>
        <th scope="col">Display Picture</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT * from registration WHERE email='" .$_SESSION['email']. "'");
	if (mysqli_num_rows($result) > 0) {
    while($row1 = mysqli_fetch_array($result)) {
?>
      <tr>
        <th scope="row"><?php echo $row1['id']; ?></th>
        <td><?php echo $row1['rname']; ?></td>
        <td><?php echo $row1['email']; ?></td>
        <td><?php echo $row1['mnumber']; ?></td>
        <td><?php echo $row1['address']; ?></td>
        <td><?php echo $row1['city']; ?></td>
        <td><?php echo $row1['state']; ?></td>
        <td><?php echo $row1['gender']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row1['rimage'] ?>" target="_blank">
              <img src='<?php echo $row1['rimage']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
          
          </td>
          <td>
             <button class="btn btn-danger"  value='<?php echo $row['email']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
      
        </form>
      </tr>
      <?php
	}    
}
?>

    </tbody>
  </table>
</div>
<br>



<div class="container-fluid col-md-6">

<?php
$selectnamesql="SELECT * from registration WHERE email='" .$_SESSION['email']. "'";
$checkname = mysqli_query($conn, $selectnamesql);
while($row = mysqli_fetch_array($checkname))
{
    ?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Update Profile</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Change Password</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Update Your DP</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  
  <form method="get" refresh="1">
  <div class="row mb-3">
  <input type="hidden" class="form-control" value="<?php echo $row['id']?>" name="id"/>
    <label for="inputEmail3" class="col-sm-2 col-form-label" >Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['rname']?>" name="rname">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" id="inputPassword3" value="<?php echo $row['email']?>" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile Number</label>
    <div class="col-sm-12">
      <input type="number" class="form-control" id="inputPassword3" value="<?php echo $row['mnumber']?>" name="mnum">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-12">
      <textarea type="text" class="form-control" id="inputPassword3" value="<?php echo $row['address']?>" name="address"><?php echo $row['address']?></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $row['city']?>" name="city">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">State</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $row['state']?>" name="state">
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="detailbtn">Update</button>
</form>
<?php
if (isset($_GET['detailbtn'])){
 
  $rname=$_GET["rname"];
  $remail=$_GET["email"];
  $mnum=$_GET["mnum"];
  $address=$_GET["address"];
  $city=$_GET["city"];
  $state=$_GET["state"];
  $id=$_GET["id"];
 
              $query1 = "UPDATE registration SET rname='".$rname."',email='".$remail."',mnumber='".$mnum."',
              address='".$address."',city='".$city."',state='".$state."' WHERE id='".$id."'";
              if(mysqli_query($conn,$query1)){
              echo"<span class='badge rounded-pill bg-success'>Course Updated Successfully</span>";
              unset($_SESSION['email']);
              if (!isset($_SESSION["email"])) {
                $_SESSION["email"] = $_GET["email"];
              }else
              { 
                  UnsetPreviousSession();
              }

              function UnsetPreviousSession()
              {
                 unset($_SESSION['email']); 
              }

              }else{
                echo"Upload Error.";
              }
        }
      
        
      
?>

</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <form method="post">
    <?php
    $passerr = $passconfirmerr ="";
    $password = $passwordConfirm ="";
    
    ?>
  <style>
    .error {color: #FF0000;}
  </style>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Old Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name="oldpass"/>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3" name="password"/>
     
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword4" class="col-sm-2 col-form-label">Confirm New Password</label>
    
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword4"  name="passwordConfirm"/>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Update</button>
 
  </form>

  </div>
  <?php
  if (isset($_POST['submit'])){
    // echo"<script>alert('ok')</script>";

    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    $oldpass=$_POST['oldpass'];
    $sql = "SELECT * FROM registration WHERE email = '$emailaddress' and password = '$oldpass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count==0){ 
      echo"<script>alert('Old Password is Wrong')</script>";
    }else{
    
    if (empty($_POST["password"])) {
        echo "<script>alert('Password is required')</script>";
    } 
     elseif (strlen($password) < 5) { // min 
        echo"<script>alert('The password is 6 characters long')</script>";
      }
      
      elseif (strlen($password) > 20) { // Max 
        echo "<script>alert('Password: Max length 20 Characters Not allowed')";
      }

    else if (empty($_POST["passwordConfirm"])) {
        echo "<script>alert('Confirm Your Password')</script>";
    }
  

    elseif ($password != $passwordConfirm) {
        echo "<script>alert('Password Does Not match')</script>";
    
      }else{
        
         
                    $query1 = "UPDATE registration SET password='".$password."' WHERE email='".$emailaddress."'";
                    if(mysqli_query($conn,$query1)){
                    echo"<span class='badge rounded-pill bg-success'>Password Updated Successfully</span>";
                   // header("Location:allcourses.php");
                    }else{
                      echo"Update Error in all Course.";
                    }
      }


    }

    }

  ?>

  
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
    <form method="post" enctype="multipart/form-data" id="form1" runat="server">
   <!-- <div class="card cardimginput container"> -->
   <a href="<?php echo $row['rimage'] ?>" target="_blank">
              <img src='<?php echo $row['rimage']; ?>' style="width:200px;height:100px;" id="blah"></a>
  
  <div class="card-body col-md-12">
  
  <input class="form-control form-control-sm" id="formFileSm" type="file" onchange="readURL(this);" style="width:100%" name="filedp"/>
<br>
  <input type="submit" name="imagebtn" value="Create Account" class="submitbtn btn-primary"></input> 
  </div> 
  </form>
  </div>
 
 
  <?php
  if (isset($_POST['imagebtn'])) {
  
  
         $file10=$_FILES["filedp"];
                       
         $filename10=$file10['name'];
         $filetempname10=$file10['tmp_name'];
         $filesize10=$file10['size'];
         $fileerror10=$file10['error'];
         $filetype10=$file10['type'];
                      
        // print_r($file10);
             $fileext10=explode('.',$filename10);
                    $fileactualext10=strtolower(end($fileext10));
                    $allowed10=array("jpg","jpeg","png","gif");
                    if (in_array($fileactualext10,$allowed10)) {
                       
                        if ($fileerror10==0) {
                            if ($filesize10<50000000000) {
                                $filenamenew10=uniqid('',true).".".$fileactualext10;
                                $filedir10='uploads/'.$filenamenew10;
                                if(move_uploaded_file($filetempname10,$filedir10)){
                                $query10 = "UPDATE registration SET rimage = '".$filedir10."'WHERE email='".$emailaddress."'";
                                mysqli_query($conn,$query10);
                                echo"<span class='badge rounded-pill bg-success'>Course Image Updated Successfully</span>";
                                echo"<meta http-equiv='refresh' content='0'>";
                                }else{
                                  echo"Upload Error.";
                                }
                            
                              }else {
                                echo"file size exceeds";
                            }
                        }else {
                            echo"error uploading file";
                        }
                    }else {
                        echo"you cannot upload file of this type";
                    }
                  }

  ?>
  </div>
  </div>
<?php
}
?>
</div>
<br>
<?php

    include'techfooter.php';
    ?>
        <!-- <form method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label" >Name</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $row['rname']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" id="inputPassword3" value="<?php echo $row['email']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile Number</label>
    <div class="col-sm-12">
      <input type="number" class="form-control" id="inputPassword3" value="<?php echo $row['mnumber']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-12">
      <textarea type="text" class="form-control" id="inputPassword3" value="<?php echo $row['address']?>"><?php echo $row['address']?></textarea>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">City</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $row['city']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">State</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $row['state']?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
    </div>
    
  </div>
</form> -->