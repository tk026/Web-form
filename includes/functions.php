<?php

//All your functions will go inside this file
function dd($data) {
	die(var_dump($data));
}

function e($value)
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

}

function escape ($value)
{
	return e($value);
}

function validateName ($name)
	if (empty($name)) {
	  $errors['name'] = "Name is required";
	
	} else {
	    $name = test_input($_POST["name"]);
	    // check if name only contains letters and whitespace
	    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	      $nameErr = "Only letters and white space allowed"; 
	    }
	
function validateAddress ($address)
	if (empty($address)) {
	  $errors['address'] = "Feedback is required";
	}
	

function validateEmail ($email)
	 if (empty($email)) {
	   $errors['email'] = "Email is required";
	 }
	 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	   $errors['email'] = "Please enter a correct email";
	 }

function validateGender ($gender)
 if (empty($gender)){ 
 	$errors ['gender'] = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
	 

function validateAge ($age)
 	if (empty($age)) { 
 	 $errors ['age'] = "Age is required";
	}

function validateDOB ($dob)
	if (empty($dob)){ 
		$errors ['dob'] = "Date of Birth is required";
	}


 



