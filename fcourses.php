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
  <title>Featured Courses</title>
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
  echo"<span class='badge rounded-pill bg-danger'>Enter Course ID</span>";
}else{
    $result1 = mysqli_query($conn,"SELECT * FROM featured where fcourseid='$search'");
	if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_array($result1)) {
        
?>
<div class="table-responsive">
  <table class="table table-dark table-hover table-striped caption-top table-bordered">
    <caption><?php echo $row['fcourseid']; ?></caption>
    <thead>
      <tr>
        <th scope="col">Course ID</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Details</th>
        <th scope="col">Course Image View</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['fcourseid']; ?></th>
        <td><?php echo $row['fcoursename']; ?></td>
        <td><?php echo $row['fcoursedetail']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row['fimage'] ?>" target="_blank">
              <img src='<?php echo $row['fimage']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
            
          </td>
          <td>
             <button class="btn btn-danger"  value='<?php echo $row['fcourseid']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
          </td>       
        </form>
      </tr>
      <?php
	}    
}else{
    echo"<span class='badge rounded-pill bg-danger'>No Course Found</span>";
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
    <caption>List of Featured Courses</caption>
    <thead>
      <tr>
        <th scope="col">Course ID</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Details</th>
        <th scope="col">Course Image View</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $result = mysqli_query($conn,"SELECT * FROM featured");
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
?>
      <tr>
        <th scope="row"><?php echo $row['fcourseid']; ?></th>
        <td><?php echo $row['fcoursename']; ?></td>
        <td><?php echo $row['fcoursedetail']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row['fimage'] ?>" target="_blank">
              <img src='<?php echo $row['fimage']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
            
          </td>
          <td><button class="btn btn-danger"  value='<?php echo $row['fcourseid']; ?>' data-bs-placement="top" title="Delete From Featured" name='deletebtn' onclick="return confirm('Are you sure you want to delete?')">
             <i class="far fa-trash-alt"> </i></button>
          </td>
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

              $query12 = "DELETE FROM featured WHERE fcourseid='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query12)){
              echo"<script>alert('Featured Course Deleted Successfully!');</script>";
              
              }else{
                echo"Delete Error.";
              }
              header("location:allcourses.php");
              
        }
?>



</html>
<?php
    include'techfooter.php';
    ?>