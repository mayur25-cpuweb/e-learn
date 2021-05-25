<?php
include'config.php';

?>
<html>
<head>
    <title>Pagination</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2c740d50fa.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 1;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM courses";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        ?>
       <div class="table-responsive">
        <table class="table table-dark table-hover table-striped caption-top table-bordered">
          <caption>List of Courses</caption>
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
        $sql = "SELECT * FROM courses LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
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
                 <button class="btn btn-danger"  value='<?php echo $row['courseid']; ?>' data-bs-placement="top" title="Delete" name='deletebtn' onclick="return confirm('Are you sure you want to delete?')">
                 <i class="far fa-trash-alt"> </i></button>&nbsp;&nbsp;
                     
                    <button class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Featured" 
                    value='<?php echo $row['courseid']; ?>'><a href="finsert.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color:black;" >
                    <i class="fas fa-star"></i> Add</a></button></td>
            </form>
          </tr>
<?php
        }
        if (isset($_GET['editbtn'])) {

$result0 = mysqli_query($conn,"SELECT * FROM courses where courseid='".$_GET["editbtn"]."' ");
if (mysqli_num_rows($result0) > 0) {
  while($row0 = mysqli_fetch_array($result0)) {
?>
<div class="form1 container-fluid">
  <form method='get' onsubmit="confirm('Are You Sure! You Want To Update?')">
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
      <button type="submit" class='btn btn-primary' name='submit0'>Upload</button>
    </div>
  </form>
</div>
<?php
}
}
}
        ?>

</body>
<ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="?pageno=1" tabindex="-1" aria-disabled="true">First</a>
    </li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a></li>
    <li class=" <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
    <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
    <li class="">
      <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a>
    </li>
  </ul>
</html>