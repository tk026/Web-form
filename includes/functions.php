<?php
// require 'index.php';
$nameErr = $addressErr = $emailErr = $genderErr = $ageErr = $dobErr = $movieErr = "";
$name = $address = $email = $gender = $age = $dob = $movie ="";

// All your functions will go inside this file
function dd($data) {
	die(var_dump($data));
}

function e($value)
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

}

function validateName ($name){
 if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input("name");
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  function validateEmail ($email){
	 if (empty($email)) {
	   $emailErr = "Email is required";
	 }
	 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	   $emailErr = "Please enter a correct email";
	 }
	 else {
     $email = test_input($_POST["email"]);
   }
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {  $emailErr = "Invalid email format"; }
    }

	}
	
function validateAddress ($address) {
	if (empty($_POST["address"])) {
	  $addressErr = "Address is required";
	}
	else {
     $address = test_input($_POST["address"]);
   }
}
	


function validateGender ($gender){
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

	 

function validateAge ($age){
 	if (empty($_POST["age"])) { 
 	 $ageErr = "Age is required";
	}
	else
	 {
		$age = test_input($_POST["age"]);
	}
}


function validateDOB ($dob){
	if (empty($_POST["dob"])){ 
		$dobErr = "Date of Birth is required";
	} else {
		$dob = test_input($_POST["dob"]);
	}
}

// 	if (preg_match("/\d{4}\-\d{2}-\d{2}/", $dob)) {
//     echo 'true';
// } else {
//     echo 'false';
// }

function validateMovie ($movie){
	if (empty($_POST["movie"])) {
        $movieErr= "You must select 1 or more";
    }
    else $movie = $_POST['movie'];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>