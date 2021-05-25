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
  <title>Messages</title>
</head>
<body>

<form action="" method="post">
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Search</label>
  </div>
  <div class="col-auto">
    <input type="text" name="search" class="form-control" placeholder="Email">
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
  echo"&nbsp;&nbsp;&nbsp;Enter Email to search";
}else{
    $result1 = mysqli_query($conn,"SELECT * FROM contact where cemail='$search'");
	if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_array($result1)) {
?>
<div class="table-responsive">
  <table class="table table-dark table-hover table-striped caption-top table-bordered">
    <caption><?php echo $row['courseid']; ?></caption>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">RELATED</th>
        <th scope="col">Message</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['cemail']; ?></td>
        <td><?php echo $row['getintouch']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['cnumber']; ?></td>
        <form method="get">
       
          <td><button class="btn btn-light" type='submit' name='editbtn' value='<?php echo $row['id']; ?>' data-bs-placement="top" title="Edit">
              <i class="far fa-edit"></i></button>&nbsp;&nbsp;
             <button class="btn btn-danger"  value='<?php echo $row['id']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
                 
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
      <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">RELATED</th>
        <th scope="col">Message</th>
        <th scope="col">Mobile Number</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $result = mysqli_query($conn,"SELECT * FROM contact");
	if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
?>
      <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['cname']; ?></td>
        <td><?php echo $row['cemail']; ?></td>
        <td><?php echo $row['getintouch']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['cnumber']; ?></td>
        <form method="get">
          <td>
             <button class="btn btn-danger"  value='<?php echo $row['id']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
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
<?php
if (isset($_GET['deletebtn'])){

              $query12 = "DELETE FROM contact WHERE id='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query12)){
              echo"<script>alert('Message Deleted Successfully!');</script>";
              
              }else{
                echo"Delete Error.";
              }

              header("location:techmsz.php");
              
        }
?>

</html>
<?php
    include'techfooter.php';
    ?>