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
  <title>Admin Panel</title>
</head>
<style>
  .img-fluid {
        width: 70px;
    }
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="comp.jpg" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Home Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about1.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="course.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">MAIN PAGE</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <style>
    .icon81 {
      width: 48px;
    }
  </style>
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="https://img.icons8.com/fluent/48/000000/upload--v16.png" class="card-img-top icon81" alt="..." />
        <div class="card-body">
          <h1 class="card-title">Upload Courses</h1>

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Upload and View
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <form class="row g-3" method="POST" enctype="multipart/form-data"> 
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Course id</label>
                      <input type="text" class="form-control" id="inputEmail4" name="cid">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Course Name</label>
                      <input type="text" class="form-control" id="inputPassword4" name="cname">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Course Detail</label>
                      <textarea type="text" class="form-control" id="inputAddress" placeholder="Detail"
                        name="cdetail"></textarea>
                    </div>
                    <div class="col-md-6">
                      <label for="inputfile" class="form-label">Course Image</label>
                      <input type="file" class="form-control" name="cimage"></input>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                    </div><hr><br>
                    <div class="row row-cols-md-3 ">
                    <a href="allcourses.php" target="_blank" class="link-info">View All Courses</a>
                    <a href="fcourses.php" target="_blank" class="link-info">View Featured Courses</a>
                    </div>
                  </form>
                  <?php
 function checkid1($courseid){
    global $conn;
    $courseid = ($_POST["cid"]);
    $checkisql = "SELECT courseid FROM courses WHERE courseid='" . $courseid . "'";
    $check1 = mysqli_query($conn, $checkisql);
    if (mysqli_num_rows($check1) > 0) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST["submit"])){
  
  $file0=$_FILES["cimage"];
   
  $filename0=$file0['name'];
  $filetempname0=$file0['tmp_name'];
  $filesize0=$file0['size'];
  $fileerror0=$file0['error'];  
  $filetype0=$file0['type'];
  $id=$_POST['cid'];
  //print_r($file0);

    $courseid=$_POST["cid"];
$coursename=$_POST["cname"];
$coursedetail=$_POST["cdetail"];

    $uniqueid1=checkid1($courseid);
    if (empty($courseid)) {
        echo "<script>alert('Enter Course Id!');</script>";
    }elseif (empty($coursename)) {
        echo "<script>alert('Enter Course Name!');</script>";
    }
    elseif ($uniqueid1) {
        echo"<script>alert('Course Already Exist!');</script>";
    }else{   

  
 
$fileext0=explode('.',$filename0);
$fileactualext0=strtolower(end($fileext0));
$allowed0=array('jpg','jpeg','png');
if (in_array($fileactualext0,$allowed0)) {
  
   if ($fileerror0==0) {
       if ($filesize0<50000000000) {
           $filenamenew0=uniqid('',true).".".$fileactualext0;
           $filedir0='uploads/'.$filenamenew0;
           if(move_uploaded_file($filetempname0,$filedir0)){
          //  $query0 = "INSERT INTO courses(image)values('.$filedir0.') WHERE courseid='".$id."'";
          //  mysqli_query($conn,$query0);
          //  echo"<span class='badge rounded-pill bg-success'>Course Image inserted Successfully</span>";
          $insertsqlcourse="INSERT INTO courses(courseid,coursename,coursedetail,image,imagename)
          VALUES ('$courseid','$coursename','$coursedetail','$filedir0','$filename0')";
          $result=mysqli_query($conn,$insertsqlcourse);
          if ($result){
             echo"<span class='badge rounded-pill bg-success'>Record inserted Successfully</span>";
          }else{
             echo"<span class='badge rounded-pill bg-danger'>Error:could not insert</span>";
          }
         
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
}

?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://img.icons8.com/dusk/64/000000/upload.png" class="card-img-top icon81" alt="..." />
        <div class="card-body">
          <h1 class="card-title">Upload Course videos</h1>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Create Database and Insert Video Details
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form method="post">
                  <h5> Enter course id and name to create video database</h5>
                  <div class="col-md-6">
                    <label for="inputid" class="form-label">Course Id</label>
                    <input type="text" class="form-control" id="inputid" name="id1">

                    <label for="inputPassword4" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="inputPassword4" name="iname">
                    <br>
                    <td><input type="submit" name="submitvideoid"></input></td>
                  </div>
                </form>

                <?php

            
            function checkid($courseid1){
                global $conn;
                $courseid1 = ($_POST["id1"]);
                $checkidsql = "SELECT addedvideocourseid FROM coursevideos WHERE addedvideocourseid='" . $courseid1 . "'";
                $check = mysqli_query($conn, $checkidsql);
                if (mysqli_num_rows($check) > 0) {
                    return true;
                } else {
                    return false;
                }
            }
            function checkcid($courseid1){
              global $conn;
              $courseid1 = ($_POST["id1"]);
              $checkidsql2 = "SELECT courseid FROM courses WHERE courseid='" . $courseid1 . "'";
              $check2 = mysqli_query($conn, $checkidsql2);
              if (mysqli_num_rows($check2)==0) {
                  return true;
              } else {
                  return false;
              }
          }
            if (isset($_POST["submitvideoid"])){
                $courseid1=$_POST["id1"];
            $coursename1=$_POST["iname"];
           

                $uniqueid=checkid($courseid1);
                $uniqueid2=checkcid($courseid1);
                
            if (empty($courseid1)) {
                echo "<script>alert('Enter Course Id!');</script>";
            }elseif (empty($coursename1)) {
                echo "<script>alert('Enter Course Name!');</script>";
            }
            elseif ($uniqueid) {
                echo"<script>alert('Course Database Already Exist!');</script>";
              }
            elseif($uniqueid2) {
              echo"<script>alert('First Add This New Course!');</script>";
            }else{
              $insertsqlcourse="INSERT INTO coursevideos(addedvideocourseid,addedvideoname)VALUES ('$courseid1','$coursename1')";
                $result=mysqli_query($conn,$insertsqlcourse);
                if ($result){
                    echo"<script>alert('Record Inserted!');</script>";
                }
                else{
                    echo"<script>alert('Error:Cannot Insert Record!');</script>";
                    
                }
               
            }
        }

        ?>
                <br>
                <form method="post" enctype="multipart/form-data">
                  <h5> Enter Particular course ID to add video Details in Database</h5>
                  <div class="col-md-6">
                    <label class="form-label">Course Id</label>
                    <span style="color:red">*</span>
                    <input type="text" class="form-control" name="id2">
                    
                  </div>
                  
                    <br>
                     VIDEO-1
                    <br><div class="col-md-10">
                    <input type="text" class="form-control" name="vname1" placeholder="Video-Title"/>
                    <textarea class="form-control" name="vtext1" placeholder="Video-Description"></textarea>
                    <input type="file" name="file1[]" multiple></input>
                    <input type="submit" name="submitimage1"></input></div>
                    <hr><br>
                  <!-- VIDEO-2
                  <br><div class="col-md-10">
                    <input type="text" class="form-control" name="vname2"  placeholder="Video-Title"/>
                    <textarea class="form-control" name="vtext2" placeholder="Video-Description"></textarea>
                    <input type="file" name="file2"></input>
                    <input type="submit" name="submitimage2"></input></div>
                      <hr><br>
                  VIDEO-3
                  <br><div class="col-md-10">
                    <input type="text" class="form-control" name="vname3"  placeholder="Video-Title"/>
                    <textarea class="form-control" name="vtext3" placeholder="Video-Description"></textarea>

                    <input type="file" name="file3"></input>
                    <input type="submit" name="submitimage3"></input></div>
                      <hr><br>
                  VIDEO-4
                  <br><div class="col-md-10">
                    <input type="text" class="form-control" name="vname4" placeholder="Video-Title"/>
                    <textarea class="form-control" name="vtext4" placeholder="Video-Description"></textarea>

                    <input type="file" name="file4"></input>
                    <input type="submit" name="submitimage4"></input>
                    </div> -->
                </form>
                
                <?php
//...........................submit-image-1........................................
if (isset($_POST['submitimage1'])){
  $id=$_POST['id2'];
  if (empty($id)) {
    echo"<span class='badge rounded-pill bg-danger'>Enter Id</span><br>";

  }else{
  $vname1=$_POST['vname1'];
  $vtext1=$_POST['vtext1'];
  if (empty($vname1 && $vtext1)) {
    echo"<span class='badge rounded-pill bg-danger'>Enter video-1 Details</span><br>";
  } else{
    foreach($_FILES['file1']['name'] as $id=>$val){
  $file1=$_FILES['file1'];
   
   $filename1=$file1['name'][$id];
   $filetempname1=$file1['tmp_name'][$id];
   $filesize1=$file1['size'][$id];
   $fileerror1=$file1['error'][$id];
   $filetype1=$file1['type'][$id];
   $id=$_POST['id2'];
  // print_r($file);
  
$fileext1=explode('.',$filename1);
$fileactualext1=strtolower(end($fileext1));
$allowed1=array("mp4","avi","3gp","mov","mpeg","Mp4");
if (in_array($fileactualext1,$allowed1)) {
   
    if ($fileerror1==0) {
        if ($filesize1<50000000000) {
            $filenamenew1=uniqid('',true).".".$fileactualext1;
            $filedir1='uploads/'.$filenamenew1;
            if(move_uploaded_file($filetempname1,$filedir1)){
            $sqlVal = "('".$filetempname1."', '".$filedir1."')";
            $query1 = "UPDATE coursevideos SET videourl1='.$sqlVal.'";
            //WHERE addedvideocourseid='".$id."'";
            mysqli_query($conn,$query1);
            echo"<span class='badge rounded-pill bg-success'>Video-1 inserted Successfully</span>";
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
}
  }
}
//...........................submit-image-2........................................


?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     
                <br>
                <form method="post" enctype="multipart/form-data">
                  <h5> enter course id to add video in database</h5>
                  <div class="col-md-6">
                    <label class="form-label">Course Id</label>
                    <input type="text" class="form-control" name="id2">
                  </div>
                  <table>
                    <br>
                    <th>VIDEO-1</th>
                    <tr>
                    <input type="text" class="form-control" name="vname"/>
                      <td><input type="file" name="file1"></input></td>
                      <td><input type="submit" name="submitimage1"></input></td>
                    </tr>
                    <th>VIDEO-2</th>
                    <tr>
                      <td><input type="file" name="file2"></input></td>
                      <td><input type="submit" name="submitimage2"></input></td>
                    </tr>
                    <th>VIDEO-3</th>
                    <tr>
                      <td><input type="file" name="file3"></input></td>
                      <td><input type="submit" name="submitimage3"></input></td>
                    </tr>
                    <th>VIDEO-4</th>
                    <tr>
                      <td><input type="file" name="file4"></input></td>
                      <td><input type="submit" name="submitimage4"></input></td>
                    </tr>
                  </table>
                </form>



<?php
//...........................submit-image-1........................................
if (isset($_POST['submitimage1'])){

  $vname=$_POST['vname'];
  
   $file1=$_FILES['file1'];
   
   $filename1=$file1['name'];
   $filetempname1=$file1['tmp_name'];
   $filesize1=$file1['size'];
   $fileerror1=$file1['error'];
   $filetype1=$file1['type'];
   $id=$_POST['id2'];
  // print_r($file);
  
$fileext1=explode('.',$filename1);
$fileactualext1=strtolower(end($fileext1));
$allowed1=array("mp4","avi","3gp","mov","mpeg","Mp4");
if (in_array($fileactualext1,$allowed1)) {
   
    if ($fileerror1==0) {
        if ($filesize1<50000000000) {
            $filenamenew1=uniqid('',true).".".$fileactualext1;
            $filedir1='uploads/'.$filenamenew1;
            if(move_uploaded_file($filetempname1,$filedir1)){
            $query1 = "UPDATE coursevideos SET videourl1 = '".$filedir1."',vname1='".$vname."'WHERE addedvideocourseid='".$id."'";
            mysqli_query($conn,$query1);
            echo"<span class='badge rounded-pill bg-success'>Video-1 inserted Successfully</span>";
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
//...........................submit-image-2........................................
if (isset($_POST['submitimage2'])){
   $file2=$_FILES['file2'];
   $filename2=$file2['name'];
   $filetempname2=$file2['tmp_name'];
   $filesize2=$file2['size'];
   $fileerror2=$file2['error'];
   $filetype2=$file2['type'];
   $id=$_POST['id2'];
  // print_r($file);2
  
$fileext2=explode('.',$filename2);
$fileactualext2=strtolower(end($fileext2));
$allowed2=array("mp4","avi","3gp","mov","mpeg","Mp4","MP4");
if (in_array($fileactualext2,$allowed2)) {
    if ($fileerror2==0) {
        if ($filesize2<5000000000) {
            $filenamenew2=uniqid('',true).".".$fileactualext2;
            $filedir2='uploads/'.$filenamenew2;
            if(move_uploaded_file($filetempname2,$filedir2)){
            $query2 ="UPDATE coursevideos SET videourl2 = '".$filedir2."'WHERE addedvideocourseid='".$id."'";
            
            mysqli_query($conn,$query2);
            echo"<span class='badge rounded-pill bg-success'>Video-2 inserted Successfully</span>";
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
//...........................submit-image-3........................................
if (isset($_POST['submitimage3'])){
   $file3=$_FILES['file3'];
   $filename3=$file3['name'];
   $filetempname3=$file3['tmp_name'];
   $filesize3=$file3['size'];
   $fileerror3=$file3['error'];
   $filetype3=$file3['type'];
   $id=$_POST['id2'];
  // print_r($file);
  
$fileext3=explode('.',$filename3);
$fileactualext3=strtolower(end($fileext3));
$allowed3=array("mp4","avi","3gp","mov","mpeg","Mp4");
if (in_array($fileactualext3,$allowed3)) {
    if ($fileerror3==0) {
        if ($filesize3<5000000000) {
            $filenamenew3=uniqid('',true).".".$fileactualext3;
            $filedir3='uploads/'.$filenamenew3;
            if(move_uploaded_file($filetempname3,$filedir3)){
            $query3 ="UPDATE coursevideos SET videourl3 = '".$filedir3."'WHERE addedvideocourseid='".$id."'";
            mysqli_query($conn,$query3);
            echo"<span class='badge rounded-pill bg-success'>Video-3 inserted Successfully</span>";
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
//...........................submit-image-4........................................
if (isset($_POST['submitimage4'])){

   $file4=$_FILES['file4'];
   $filename4=$file4['name'];
   $filetempname4=$file4['tmp_name'];
   $filesize4=$file4['size'];
   $fileerror4=$file4['error'];
   $filetype4=$file4['type'];
   $id=$_POST['id2'];
  // print_r($file);
  
$fileext4=explode('.',$filename4);
$fileactualext4=strtolower(end($fileext4));
$allowed4=array("mp4","avi","3gp","mov","mpeg","Mp4");
if (in_array($fileactualext4,$allowed4)) {
    if ($fileerror4==0) {
        if ($filesize4<8388608000) {
            $filenamenew4=uniqid('',true).".".$fileactualext4;
            $filedir4='uploads/'.$filenamenew4;
            if(move_uploaded_file($filetempname4,$filedir4)){
            $query4 = "UPDATE coursevideos SET videourl4 = '".$filedir4."'WHERE addedvideocourseid='".$id."'";
            mysqli_query($conn,$query4);
            echo"<span class='badge rounded-pill bg-success'>Video-4 inserted Successfully</span>";
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
  </div>
</div>
  </div>
       
        </div>
        <div class="col">
      <div class="card">
        <img src="https://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/96/User-Group-icon.png" class="card-img-top icon81" alt="..." />
        <div class="card-body">
          <h1 class="card-title">User</h1>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                User Database
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <div class="row row-cols-md-3 ">
                    <a href="registeredusers.php" target="_blank" class="link-info">View All REGISTERED USERS</a>
                    <a href="techlogs.php" target="_blank" class="link-info">View LOGS</a>
                    <a href="techmsz.php" target="_blank" class="link-info">View Messages</a>
                    </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
  </div>


    </div>
  </div>
  <br><br>

  <?php
    include'techfooter.php';
    ?>

  <!--<div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div> -->
  <!-- Optional JavaScript; choose one of the two! -->

  <!--Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>

</body>

</html> -->
  <!-- 
<!doctype html>
<html>

<head>
  <title>Upload and Store video to MySQL Database with PHP</title>
</head>

<body>
  <div>

    <?php
    //  $fetchVideos = mysqli_query($conn, "SELECT * FROM coursevideos where addedvideocourseid='csl244'");
    //  while($row = mysqli_fetch_assoc($fetchVideos)){
    //    $location = $row['addedvideourl'];
    //    $name = $row['addedvideoname'];
    //    echo "<div style='float: left; margin-right: 5px;'>
    //       <video src='".$location."' controls width='320px' height='320px' ></video>     
    //       <br>
    //       <span>".$name."</span>
    //    </div>";
    //  }
     ?>

  </div>

</body>

</html> -->