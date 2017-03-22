<?php
require 'includes/functions.php';


$nameErr = $emailErr = $addressErr =  $genderErr = $ageErr = $dateErr = $movieErr = "";
$name = $email = $address =  $gender = $age = $date = $movie ="";


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	 	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$date = $_POST['date'];
		$movie = (isset($_POST['movie']) ? $_POST['movie'] : null);
		$gender = (isset($_POST['gender']) ? $_POST['gender'] : null);


	$nameErr = validateName($name);
	$emailErr= validateEmail($email);
	$addressErr= validateAddress($address);
	$genderErr= validateGender($gender);
	$ageErr= validateAge($age);
	$dateErr= validateDate($date);
	$movieErr= validateMovie($movie);

	if (!$nameErr && !$emailErr && !$addressErr && !$genderErr && !$ageErr&& !$dateErr && !$movieErr) {
   
      
    require 'partials/feedback.php';
    die();
}

	 
}

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>

