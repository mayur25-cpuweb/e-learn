<!doctype html>
<html lang="en">
<?php
include'config.php';
?>

<head>
  <!-- Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
  <title>Hello, world!</title>
</head>
<body>

<form action="" method="post">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Search</label>
  </div>
  <div class="col-auto">
    <input type="text" name="search" class="form-control" placeholder="Courseid">
  </div>
  <div class="col-auto">
  <input type="submit" name="searchbtn" class="form-control btn btn-danger" value="Search"/>
  </div>
</div>
</form>
<?php
if(isset($_POST['searchbtn'])){

$search=$_POST['search'];
if (empty($search)) {
  echo"&nbsp;&nbsp;&nbsp;Enter Course id to search";
}else{
    $result1 = mysqli_query($conn,"SELECT * FROM courses where courseid='$search'");
	if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_array($result1)) {
?>
<div class="table-responsive">
  <table class="table table-dark table-hover table-striped caption-top table-bordered">
    <caption><?php echo $row['courseid']; ?></caption>
    <thead>
      <tr>
        <th scope="col">Course ID</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Details</th>
        <th scope="col">Course Image View/ Update</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['courseid']; ?></th>
        <td><?php echo $row['coursename']; ?></td>
        <td><?php echo $row['coursedetail']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row['image'] ?>" target="_blank">
              <img src='<?php echo $row['image']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
            <button class="btn btn-warning" type='submit' name='imagebtn' value="<?php echo $row['courseid']; ?>"><i class="far fa-file-image"></i> Update
              Image</button>
          </td>
          <td><button class="btn btn-light" type='submit' name='editbtn' value='<?php echo $row['courseid']; ?>' data-bs-placement="top" title="Edit">
              <i class="far fa-edit"></i></button>&nbsp;&nbsp;
             <button class="btn btn-danger"  value='<?php echo $row['courseid']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
                 
                <button class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Featured" 
                value='<?php echo $row['courseid']; ?>'><a href="finsert.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color:black;" >
                <i class="fas fa-star"></i> Add</a></button></td>
        </form>
      </tr>
      <?php
	}    
}
}
}
?>

    </tbody>
  </table>
</div>
<br>
<hr>








<div class="table-responsive">
  <table class="table table-dark table-hover table-striped caption-top table-bordered">
    <caption>List of All Courses</caption>
    <thead>
      <tr>
        <th scope="col">Course ID</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Details</th>
        <th scope="col">Course Image View/ Update</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $result = mysqli_query($conn,"SELECT * FROM courses");
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
?>
      <tr>
        <th scope="row"><?php echo $row['courseid']; ?></th>
        <td><?php echo $row['coursename']; ?></td>
        <td><?php echo $row['coursedetail']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row['image'] ?>" target="_blank">
              <img src='<?php echo $row['image']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
            <button class="btn btn-warning" type='submit' name='imagebtn' value="<?php echo $row['courseid']; ?>"><i class="far fa-file-image"></i> Update
              Image</button>
          </td>
          <td><button class="btn btn-light" type='submit' name='editbtn' value='<?php echo $row['courseid']; ?>' data-bs-placement="top" title="Edit">
              <i class="far fa-edit"></i></button>&nbsp;&nbsp;
             <button class="btn btn-danger"  value='<?php echo $row['courseid']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
                 
                <button class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Featured" 
                value='<?php echo $row['courseid']; ?>' ><a href="finsert.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color:black;" onclick="return alert('Course Added Successfully!')">
                <i class="fas fa-star"></i> Add</a></button></td>
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
<?php
if (isset($_GET['deletebtn'])){

              $query12 = "DELETE FROM courses WHERE courseid='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query12)){
              echo"<script>alert('Course All Database Deleted Successfully!');</script>";
              
              }else{
                echo"Delete Error.";
              }

              $query121 = "DELETE FROM addedcourse WHERE addedcourseid='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query121)){
              }else{
                echo"Delete Error.";
              }
              $query122 = "DELETE FROM coursevideos WHERE addedvideocourseid='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query122)){
              }else{
                echo"Delete Error.";
              }
              $query122 = "DELETE FROM featured WHERE fcourseid='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query122)){
              }else{
                echo"Delete Error.";
              }
              header("location:allcourses.php");
              
        }
?>
<style>
  .form1 {
    margin-left: 30%;
    width: 100%
  }

  @media screen and (max-width: 992px) {
    .form1 {
      margin-left: 0;
      width: 100%
    }
  }
</style>
<?php
if (isset($_GET['editbtn'])) {

$result0 = mysqli_query($conn,"SELECT * FROM courses where courseid='".$_GET["editbtn"]."' ");
if (mysqli_num_rows($result0) > 0) {
  while($row0 = mysqli_fetch_array($result0)) {
?>
<div class="form1 container-fluid">
  <form method='get' onsubmit=" return confirm('Are You Sure! You Want To Update?')">
    <div class='col-md-6'>
      <label for='inputEmail4' class='form-label'>Course id</label>
      <input type='text' class='form-control' id='inputEmail4' name='cid' value="<?php echo $row0['courseid']; ?>"
        readonly />
    </div>
    <div class='col-md-6'>
      <label for='inputPassword4' class='form-label'>Course Name</label>
      <input type='text' class='form-control' id='inputPassword4' name='cname'
        value="<?php echo $row0['coursename']; ?>" />
    </div>
    <div class='col-md-6'>
      <label for='inputAddress' class='form-label'>Course Detail</label>
      <textarea type='text' class='form-control' id='inputAddress' placeholder='Detail' name='cdetail'
        value="<?php echo $row0['coursedetail']; ?>"><?php echo $row0['coursedetail']; ?></textarea>
    </div>

    <br>
    <div class='col-12'>
      <button type="submit" class='btn btn-primary' name='submit0' >Update</button>
    </div>
  </form>
</div>
<?php
}
}
}
        ?>
<?php
if (isset($_GET['submit0'])){
  
  $coursename=$_GET["cname"];
  $coursedetail=$_GET["cdetail"];
  $id=$_GET['cid'];
   
              $query1 = "UPDATE courses SET coursename='".$coursename."',coursedetail='".$coursedetail."'
              WHERE courseid='".$id."'";
              if(mysqli_query($conn,$query1)){
              echo"<span class='badge rounded-pill bg-success'>Course Updated Successfully</span>";
             // header("Location:allcourses.php");
              }else{
                echo"Update Error in all Course.";
              }
              $query01 = "UPDATE featured SET fcoursename='".$coursename."',fcoursedetail='".$coursedetail."'
              WHERE fcourseid='".$id."'";
              if(mysqli_query($conn,$query01)){
              //echo"<span class='badge rounded-pill bg-success'>Course Updated Successfully</span>";
              //header("Location:allcourses.php");
              }else{
                echo"Update Error in Featured Course.";
              }
              $query01 = "UPDATE addedcourse SET addedcoursename='".$coursename."',addedcoursedetail='".$coursedetail."'
              WHERE addedcourseid='".$id."'";
              if(mysqli_query($conn,$query01)){
              //echo"<span class='badge rounded-pill bg-success'>Course Updated Successfully</span>";
              //header("Location:allcourses.php");
              }else{
                echo"Update Error in ADD Course.";
              }
              
        }
?>
<?php 

if (isset($_GET['imagebtn'])){
                
$result01 = mysqli_query($conn,"SELECT * FROM courses where courseid='".$_GET["imagebtn"]."' ");
if (mysqli_num_rows($result01) > 0) {
  while($row01 = mysqli_fetch_array($result01)) {
?>
<div class="form1 container-fluid">
  <form method='post' enctype='multipart/form-data' onsubmit="confirm('Are You Sure! You Want To Update?')">
    <div class='col-md-6'>
      <label for='inputEmail4' class='form-label'>Course id</label>
      <input type='text' class='form-control' id='inputEmail4' name='cid' value="<?php echo $row01['courseid']; ?>"
        readonly />
    </div>

    <div class='col-md-6'>
      <label for='inputfile' class='form-label'>Course Image</label>
      <input type="file" class='form-control' name="file1"></input>
    </div>
    <br>
    <div class='col-12'>
      <button type="submit" class='btn btn-primary' name='submit01'>Update</button>
    </div>
  </form>
</div>
<?php
  }
}
}
  ?>
<?php
  if (isset($_POST['submit01'])){
        
                $id = $_POST['cid'];
                $file10=$_FILES["file1"];
                              
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
                                       $query10 = "UPDATE courses SET image = '".$filedir10."',imagename='".$filename10."'WHERE courseid='".$id."'";
                                       mysqli_query($conn,$query10);
                                       echo"<span class='badge rounded-pill bg-success'>Course Image Updated Successfully</span>";
                                       header("location:allcourses.php");
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

</html>
<?php
    include'techfooter.php';
    ?>