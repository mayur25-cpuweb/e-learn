<!doctype html>
<html lang="en">
<?php
include'config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS-->
 
<html>
<head>
    <title>REGISTERED USERS</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="table-responsive">
  <table class="table table-hover table-striped table-bordered">
  <caption>List of Registered Users</caption>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Gender</th>
        <th scope="col">Password</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php
    

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM registration";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        
        $sql = "SELECT * FROM registration LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            
            ?>
       
    <tbody>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['rname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mnumber']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <form method="get">
          <td><a href="<?php echo $row['rimage'] ?>" target="_blank">
              <img src='<?php echo $row['rimage']; ?>' style="width:200px;height:100px;"></a>&nbsp;&nbsp;
           
          </td>
          <td>
             <button class="btn btn-danger"  value='<?php echo $row['email']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete All Related Database?')">
             <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
          </td>       
        </form>
      </tr>
<?php
	} 
?>

    </tbody>
  </table>
</div>
<?php
if (isset($_GET['deletebtn'])){

              $query12 = "DELETE FROM registration WHERE email='".$_GET["deletebtn"]."'";
              if(mysqli_query($conn,$query12)){
              echo"<script>alert('Featured Course Deleted Successfully!');</script>";
              
              }else{
                echo"Delete Error.";
              }
              
              
        }
?>

    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>
<?php
include'techfooter.php';
?>
</html>