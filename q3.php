<?php
session_start();
require'config.php';
?>
<div class="container">
    <form method="post" action="">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="email" placeholder="email" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="password" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="login" id="but_submit" />
            </div>
        </div>
    </form>
</div>
<?php
$emailErr="";
$passworderr="";
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
if ($emailErr=="" && $passworderr=="") {
    $uniqueemail=checkemail($email);
    $uniquepassword=checkpassword($password);
    $email=$_POST["email"];
    $password=$_POST["password"];

      if ($uniqueemail) {
          if ($uniquepassword) {
             $_SESSION['email'] =$email;
             echo"<script>window.location.href='welcome.php'</script>";

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
?>
