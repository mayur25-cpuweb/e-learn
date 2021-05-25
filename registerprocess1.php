<?php
require('config.php')
?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = $cityerr = $stateerr = $passerr = $passconfirmerr =$doneerror= " ";
$name = $email = $gender = $comment = $mnumber = $city = $state = $password = $passwordConfirm = $done="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        $checkemailsql = "SELECT email FROM registration WHERE email='" . $email . "'";
        $check = mysqli_query($conn, $checkemailsql);
        if (mysqli_num_rows($check) > 0) {
            return true; 
        } else {
            return false;
        }
    }

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
        else{
            $nameErr="";
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

    
    $mnumber =$_POST["mnumber"];
    if (empty($_POST["mnumber"])) {
        $contactErr = "Contact Number is Required";
    }
      elseif(strlen($mnumber) < 10) {  // Max 
        $contactErr = 'Error: Mobile Number: Enter 10 Digits Number';
       }
      elseif(strlen($mnumber) > 10) {  // Max 
        $contactErr = 'Error: Mobile Number: Enter 10 Digits Number';
       }
    else{
        $contactErr="";
    }

    if (empty($_POST["comment"])) { 
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["city"])) {
        $cityerr = "City Name is Required";
    }
    else{
        $cityerr = "";
    }


    if (empty($_POST["state"])) {
        $stateerr = "State Name is Required";
    }
    else{
        $stateerr = "";
    }


    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    }
    else{
        $genderErr = "";

    }
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    if (empty($_POST["password"])) {
        $passerr = "Password is required";
    } 
     elseif (strlen($password) < 5) { // min 
        $passerr = 'The password is 6 characters long.';
      }
      
      elseif (strlen($password) > 20) { // Max 
        $passerr = 'Password: Max length 20 Characters Not allowed';
      }
      
    else{
        $passerr="";
    }

    if (empty($_POST["passwordConfirm"])) {
        $passconfirmerr = "Confirm Your Password";
    }
  

    if ($password != $passwordConfirm) {
        $passconfirmerr = "Password Does Not match";
    } else {
        $passconfirmerr="";
    }
    
if ($nameErr =="" && $emailErr =="" && $genderErr =="" && $contactErr =="" && $cityerr =="" && $stateerr =="" && $passerr =="" && $passconfirmerr =="")
 {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $mnumber = test_input($_POST["mnumber"]);
    $comment = test_input($_POST["comment"]);
    $city = test_input($_POST["city"]);
    $state = test_input($_POST["state"]);
    $gender = test_input($_POST["gender"]);
    $password = test_input($_POST["password"]);
    $passwordConfirm = test_input($_POST["passwordConfirm"]);
   
    
    $uniqueemail=checkemail($email);
      if ($uniqueemail) {
          $emailErr=$email." is already exist";
      }else{
          
        $file10=$_FILES["filedp"];
              
        $filename10=$file10['name'];
        $filetempname10=$file10['tmp_name'];
        $filesize10=$file10['size'];
        $fileerror10=$file10['error'];
        $filetype10=$file10['type'];
                     
        //print_r($file10);
            $fileext10=explode('.',$filename10);
                   $fileactualext10=strtolower(end($fileext10));
                   $allowed10=array("jpg","jpeg","png");
                   if (in_array($fileactualext10,$allowed10)) {
                      
                       if ($fileerror10==0) {
                           if ($filesize10<50000000000) {
                               $filenamenew10=uniqid('',true).".".$fileactualext10;
                               $filedir10='uploads/'.$filenamenew10;
                               if(move_uploaded_file($filetempname10,$filedir10)){

        $register = "INSERT INTO registration(rname,email,mnumber, address, city, state, gender,password,rimage)
         VALUES ('$name','$email','$mnumber','$comment','$city','$state','$gender','$password','$filedir10')";

        if (mysqli_query($conn, $register)) {
            $done="<span class='badge rounded-pill bg-success'>Registered Successfully</span>";
        } else {
            echo "ERROR: Could not able to execute. " . mysqli_error($conn);
            $done="";
           // <span class='badge rounded-pill bg-danger'>ERROR: Could not able to execute $sql. mysqli_error($conn); </span>
            $doneerror= "<span class='badge rounded-pill bg-danger'>ERROR: Could not able to execute</span>" . mysqli_error($conn);
        }
                                       }else{
                                        $doneerror="<span class='badge rounded-pill bg-danger'>ERROR:Upload Error</span>" . mysqli_error($conn);
                                       }
                                   
                                     }else {
                                        $doneerror="<span class='badge rounded-pill bg-danger'>ERROR: File Size Exceeds</span>" . mysqli_error($conn);
                                   }
                               }else {
                                $doneerror="<span class='badge rounded-pill bg-danger'>ERROR: Could not able to execute Query</span>" . mysqli_error($conn);
                               }
                           }else {
                            $doneerror="<span class='badge rounded-pill bg-danger'>ERROR: You Cannot Upload Image Of This Type </span>" . mysqli_error($conn);
                           }
                        }
                        }             
                    }
?>
<?php
if (isset($_post['filedp'])) {
    
}
?>
