<?php
session_start();
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
header("Location:index.php");

$e=$_SESSION["email"];
if(empty($e)){
    echo"<script>window.location.href='index.php'</script>";
}else{
    
}
?> 















