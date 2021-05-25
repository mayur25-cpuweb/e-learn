<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = $cityerr = $stateerr = $passerr = $passconfirmerr = " ";
$name = $email = $gender = $comment = $mnumber = $city = $state = $password = $passwordConfirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (empty($_POST["name"])) {
  $nameErr = "Name is required";
} 
else {
  $name = test_input($_POST["name"]);
  // check if name only contains letters and whitespace
  if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $nameErr = "Only letters and white space allowed";
  }
}

if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}

if (empty($_POST["mnumber"])) {
  $contactErr = "Contact Number is Required";
}
 else {
  $mnumber = test_input($_POST["mnumber"]);
}

if (strlen($mnumber) > 10) {  // Max 
  $contactErr = 'Error: Mobile Number: Enter 10 Digits Number';
}

if (empty($_POST["comment"])) {
  $comment = "";
} else {
  $comment = test_input($_POST["comment"]);
}

if (empty($_POST["city"])) {
  $cityerr = "City Name is Required";
} else {
  $city = test_input($_POST["city"]);
}


if (empty($_POST["state"])) {
  $stateerr = "State Name is Required";
} else {
  $state = test_input($_POST["state"]);
}


if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}

if (empty($_POST["password"])) {
  $passerr = "Password is required";
} else {
  $password = test_input($_POST["password"]);
}

if (empty($_POST["passwordConfirm"])) {
  $passconfirmerr = "Confirm Your Password";
} else {
  $passwordConfirm = test_input($_POST["passwordConfirm"]);
}
if (strlen($password) < 5) { // min 
  $passerr = 'The password is 6 characters long.';
}

if (strlen($password) > 20) { // Max 
  $passerr = 'Password: Max length 20 Characters Not allowed';
}

$password = $_POST["password"];
$passwordConfirm = $_POST["passwordConfirm"];
if ($password != $passwordConfirm) {
  $passconfirmerr = "Password Does Not match";
}
else {}
function unique_email($email){
  
  global $db;
  $sql = "SELECT email FROM users WHERE email='".$email."'";
  $check = $db->query($sql);
 if ($check->num_rows > 0) {
   return true;
 }else{
   return false;
 }
}
if($nameErr ==1 && $emailErr ==1 && $genderErr ==1 && $contactErr ==1 && $cityerr ==1 && $stateerr ==1 && $passerr ==1 && $passconfirmerr ==1)
{
   
   // $firstName =data($first_name);
    //$lastName  =legal_input($last_name);

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $mnumber = test_input($_POST["mnumber"]);
    $comment = test_input($_POST["comment"]);
    $city = test_input($_POST["city"]);
    $state = test_input($_POST["state"]);
    $gender = test_input($_POST["gender"]);
    $password = test_input($_POST["password"]);
    $passwordConfirm = test_input($_POST["passwordConfirm"]);
   
    // check unique email
    $checkEmail=unique_email($email);
    if($checkEmail)
    {
      $register=$email." is already exist";

    }


}

  ?>