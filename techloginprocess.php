<?php
session_start();
require'config.php';
?>
<?php
$emailErr="";
$passworderr="";
$oneerror="";
$email="";
$password="";
if (isset($_POST["login"])) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function checkemail($email)
    {
        global $conn;
        $email = ($_POST["email"]);
        $checkemailsql = "SELECT * FROM registration WHERE email='" . $email . "'";
        $check = mysqli_query($conn, $checkemailsql);
        if (mysqli_num_rows($check) > 0) {
            return true;
        } else {
            return false;
        }
    }
    function checkpassword($password){
        global $conn;
        $password = ($_POST["password"]);
        $checkpasswordsql = "SELECT * FROM registration WHERE password='" . $password . "'";
        $checkpass = mysqli_query($conn, $checkpasswordsql);
        if (mysqli_num_rows($checkpass) > 0) {
            return true;
        } else {
            return false;
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif($email) {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    else{
        $emailErr="";
    }

    $password = test_input($_POST["password"]);

    if (empty($_POST["password"])) {
        $passworderr = "Password is required";
    } 
     elseif (strlen($password) < 5) { // min 
        $passworderr = 'The password is 6 characters long.';
      }
      
      elseif (strlen($password) > 20) { // Max 
        $passworderr = 'Password: Max length 20 Characters Not allowed';
      }
      
    else{
        $passworderr="";
    }
if ($emailErr=="" && $passworderr=="" && $oneerror=="") {
    $uniqueemail=checkemail($email);
    $uniquepassword=checkpassword($password);
    $email=$_POST["email"];
    $password=$_POST["password"];

    $result1 = mysqli_query($conn,"SELECT * FROM admin where email='$email'");
	if (mysqli_num_rows($result1) ==1) {
    while($row = mysqli_fetch_array($result1)) {
$emailadmin=$_POST["email"];
$passadmin=$_POST["password"];
    if ($email==$emailadmin&&$password==$passadmin) {
        
        echo"<script>window.location.href='admin.php'</script>";
    }elseif(!$email==$emailadmin){
        $email="";
        $password="";
    }
}
    }
    

    $sql = "SELECT * FROM registration WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    
    $count = mysqli_num_rows($result);

      if ($uniqueemail) {
          if ($uniquepassword) {
            if($count == 1){ 
            $loginsertsql="INSERT INTO logs(email,password)
            VALUES ('$email','$password')";
            if (mysqli_query($conn, $loginsertsql)) {  
            }    
            else {
                echo "<script>alert('Some Error Occured!')</script>". mysqli_error($conn);
            }
             $_SESSION['email'] =$email;
             echo"<script>window.location.href='dphp.php'</script>";
             }elseif($count != 1){
                 $oneerror="Username OR Password is Incorrect!";
             }
          }elseif ($uniquepassword==false) {
            $passworderr="Wrong Password";
          }else {
            $passworderr="";
          }
          
      }elseif($uniqueemail==false) {
        $emailErr="Email Not Registerd";
      } else{
        $emailErr="";
      }
    }

    }
//}

?>
