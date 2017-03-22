<?php

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

	$name = test_input($_POST["name"]);
    $mystring = 'name';
    $findme   = ' ';
    $pos = strpos($mystring, $findme);
	

		 if (empty ($name)) {

		    return "Your full name is required";
		  }

		  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {

		      return "Only letters and white space allowed"; 
		   }

		  if (strlen($name) > 40) {

		  		return " Your name must be no more than 40 characters";
		  }

		   if (strpos($name, ' ') !== false) {
		    
		    return ;
		}
		else
		{
	    return "Please enter your full name";
	    }
	 }

	function validateEmail ($email){
		 if (empty($email)) {

		   return "Email is required";
		 }

		 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
	       {  return "You have entered an invalid email"; 
	    }

	    if (strlen($email) > 100) {
		  	
		  		return " Your email must be no more than 100 characters";
		  }

		 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		   return "Please enter a correct email";
		 }

		 else {
	     $email = test_input($_POST["email"]);
	   }

	   }
		
	function validateAddress ($address) {

		if (empty($address)) {
		  return "Address is required";
		}

		if (strlen($address) > 200) {

			return "Your address must be no longer than 200 characters";
		}
		else {
	     $address = test_input($_POST["address"]);
	   }
	}
		


	function validateGender ($gender){

	 if (empty($gender)) {

	    return "Gender is required";

	  } else {
	    $gender = test_input($_POST["gender"]);
	  }
	}

		 

	function validateAge ($age){

		

	 	if (empty($_POST["age"])) { 
	 	 return "Age is required";
		}

		if(  $age<= 1 && $age>= 151) {
			return "Your age is invalid";
		}
		else
		 {
			$age = test_input($_POST["age"]);
		}
	}


	function validateDate($date) {
	    if (empty($date)) {
	        return 'Date of Birth is required.';
	    }

	    if (!checkDateManually($date)) {
	        return 'Please enter a correct Date of Birth.';
	    }

	    if (DateTime::createFromFormat('Y-m-d', $date)) {
	        $date = DateTime::createFromFormat('Y-m-d', $date);
	    }
	    else if (DateTime::createFromFormat('Y/m/d', $date)) {
	        $date = DateTime::createFromFormat('Y/m/d', $date);
	    }
	    else if (DateTime::createFromFormat('d-m-Y', $date)) {
	        $date = DateTime::createFromFormat('d-m-Y', $date);
	    }
	    else if (DateTime::createFromFormat('d/m/Y', $date)) {
	        $date = DateTime::createFromFormat('d/m/Y', $date);
	    }
	    else {
	        return 'Please enter a correct Date of Birth.';
	    }

	    $time = new DateTime('now');
	    $today = new DateTime('now');

	    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));

	    $chosenDate = $date->format('Y-m-d');
	    $chosenDay = $date->format('d');
	    $chosenMonth = $date->format('m');
	    $chosenYear = $date->format('Y');
	    $todaysDate = $today->format('Y-m-d');
	    $minDate = $date150YearsAgo->format('Y-m-d');

	    if ($chosenDate <= $minDate){
	        return 'We really don\'t think you were born more than 150 years ago.';
	    }
	    else if ($chosenDate >= $todaysDate){
	        return 'You cannot be born after today.';
	    }
	    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
	        return 'Please enter a correct Date of Birth.';
	    }

	    return false;
	}

	function checkDateManually($date) {
	    $dateArray = [];

	    if(strpos($date, '/') !== false) {
	        $dateArray = explode("/", $date);
	    }
	    else if(strpos($date, '-') !== false){
	        $dateArray = explode("-", $date);
	    }

	    if (empty($dateArray)) {
	        return false;
	    }

	    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
	        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
	            return true;
	        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
	            return true;
	        }
	        return false;
	    }

	    return false;
	}

	// TESTS: http://pastebin.com/6aZ4pZDv

	// 	if (preg_match("/\d{4}\-\d{2}-\d{2}/", $dob)) {
	//     echo 'true';
	// } else {
	//     echo 'false';
	// }

	function validateMovie ($movie){
		if (empty($_POST["movie"])) {
	        return "You must select a movie";
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