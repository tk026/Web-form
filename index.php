<?php

require 'includes/functions.php';

$name = $address = $email = $gender = $age = $dob = $movie ='';

	$errors =[''];

	//The request is using the POST method
	//This is where you will call your validation code

	
	// dd($_POST);

	

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$dob = $_POST['dob'];
		$movie = $_POST['movie'];
		// $gender = !empty($_POST['gender']) ? $_POST['gender']; 

	}

	$errors['name']= validateName($name);
	$errors['address']= validateAddress($address);
	$errors['email']= validateEmail($email);
	$errors['gender']= validateGender($gender);
	$errors['age']= validateAge($age);
	$errors['dob']= validateDOB($dob);
	$errors['movie']= validateMovie($movie);





require 'partials/header.php';
require ' partials/form.php';
require ' partials/footer.php';

?>