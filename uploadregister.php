<?php
session_start();
include'config.php';
?>
<?php
if (isset($_POST['submitimage'])){
   $file=$_FILES['file'];
   
   $filename=$file['name'];
   $filetempname=$file['tmp_name'];
   $filesize=$file['size'];
   $fileerror=$file['error'];
   $filetype=$file['type'];

$fileext=explode('.',$filename);
$fileactualext=strtolower(end($fileext));

$allowed=array('jpg','jpeg','png');
if (in_array($fileactualext,$allowed)) {
    if ($fileerror==0) {
        if ($filesize<500000) {
            $filenamenew=uniqid('',true).".".$fileactualext;
            $filedir='uploads/'.$filenamenew;
            move_uploaded_file($filetempname,$filedir);
            header("location:techregister.php?uploadsuccess");
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
