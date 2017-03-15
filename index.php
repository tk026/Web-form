<?php
require 'includes/functions.php';


$nameErr = $addressErr = $emailErr = $genderErr = $ageErr = $dobErr = $movieErr = "";
$name = $address = $email = $gender = $age = $dob = $movie ="";

	

	

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	 	
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$dob = $_POST['dob'];
		$movie = (isset($_POST['movie']) ? $_POST['movie'] : null);
		$gender = (isset($_POST['gender']) ? $_POST['gender'] : null);


	$nameErr = validateName('name');
	$addressErr= validateAddress('address');
	$emailErr= validateEmail('email');
	$genderErr= validateGender('gender');
	$ageErr= validateAge('age');
	$dobErr= validateDOB('dob');
	$movieErr= validateMovie('movie');

	


}

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>

