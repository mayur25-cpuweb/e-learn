<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = $cityerr = $stateerr = $passerr = $passconfirmerr = " ";
$name = $email = $gender = $comment = $mnumber = $city = $state = $password = $passwordConfirm = "";


  //name.....error...........
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

  if (strlen($name) < 3) { // Minimum 
    $nameErr = 'Please enter First Name using 3 charaters atleast.';
  } 
  if (strlen($name) > 20) {  // Max 
    $nameErr = 'Name: Max length 20 Characters Not allowed';
  }
 
  //name.........error...........

  //email.....error..........
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
  }

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
   
  if (strlen($email) > 50) {  // Max 
    $error[] = 'Email: Max length 50 Characters Not allowed';
  }
  
  //email.......error..............



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

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php
$password = $_POST["password"] = "";
$passwordConfirm = $_POST["passwordConfirm"] = "";

if (empty($_POST["password"])) {
  $passerr = "Password  is required";
} else {
  $password = test_input($_POST["password"]);
}

if (empty($_POST["passwordConfirm"])) {
  $passconfirmerr = "Please confirm the password.";
} else {
  $password = test_input($_POST["passwordConfirm"]);
}

if ($password != $passwordConfirm) {
  $passconfirmerr = 'Passwords do not match.';
}

if (strlen($password) < 5) { // min 
  $passerr = 'The password is 6 characters long.';
}

if (strlen($password) > 20) { // Max 
  $passerr = 'Password: Max length 20 Characters Not allowed';
}
?>
