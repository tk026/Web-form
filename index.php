<?php
require 'includes/functions.php';


$nameErr = $emailErr = $addressErr =  $genderErr = $ageErr = $dobErr = $movieErr = "";
$name = $email = $address =  $gender = $age = $dob = $movie ="";

	

	

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	 	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$dob = $_POST['dob'];
		$movie = (isset($_POST['movie']) ? $_POST['movie'] : null);
		$gender = (isset($_POST['gender']) ? $_POST['gender'] : null);


	$nameErr = validateName('name');
	$emailErr= validateEmail('email');
	$addressErr= validateAddress('address');
	$genderErr= validateGender('gender');
	$ageErr= validateAge('age');
	$dobErr= validateDOB('dob');
	$movieErr= validateMovie('movie');

	


}

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>

