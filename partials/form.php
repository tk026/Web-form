<div class="form-container">
<div id ="form"> 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  >

	Name<br><input type="text" name="name" placeholder="Your name" value="<?php echo htmlspecialchars($name);?>">
<br> <span class="error">* <?php echo $nameErr;?></span><br>

	Address<br><textarea name="address" rows ="5" placeholder="Your address" ><?php echo $address;?></textarea><br><br>
	Email<br><input type="text" name="email" max = '100' placeholder="Your Email" value="<?php echo htmlspecialchars($email);?>"><br>
	 <span class="error">* <?php echo $emailErr;?></span><br>
		Gender<br>
		<fieldset>
	<input type="radio" name="gender"  id="female"  <?php if (isset($_POST['$gender']) && $_POST['$gender'] == 'female') {echo  "checked";} ?> value="female"><strong>Female</strong> <br><br>
	<input type="radio" name="gender" id="male" <?php if (isset($_POST['$gender']) && $_POST['$gender'] == 'male') {echo  "checked";} ?> value="male"><strong>Male</strong> <br>
	<span class="error">* <?php echo $genderErr;?></span><br>
	</fieldset>

	Age<br><input type="number" name="age" min="1" max="
	150" placeholder="Your age" value="<?php echo htmlspecialchars($age);?>"><br><br>

	Date of birth<br><input type="date" name="dob" placeholder="Your D.O.B" value="<?php echo htmlspecialchars($dob);?>"><br>
	<span class="error">* <?php echo $dobErr;?></span>
	<br>
	<br>
	Choose a Favourite movie<br>
	<input type="radio" name="movie" value="movie1" <?php if (isset($_POST['$movie']) && $_POST['$movie'] == 'movie1') {echo "checked='checked'";} ?>><strong>Movie 1</strong> <br>

	<input type="radio" name="movie" value="movie2" <?php if (isset($_POST['$movie']) && $_POST['$movie'] == 'movie2') {echo "checked='checked'";} ?>><strong>Movie 2</strong> <br>

	<input type="radio" name="movie" value="movie3" <?php if (isset($_POST['$movie']) && $_POST['$movie'] == 'movie3') {echo  "checked='checked'";} ?>><strong>Movie 3</strong> <br>

	<input type="radio" name="movie" value="movie4" <?php if (isset($_POST['$movie']) && $_POST['$movie'] == 'movie4') {echo  "checked='checked'";} ?>><strong>Movie 4 </strong><br><br>


	<input type="submit" name="submit" value="Submit"> 
	 <input type="reset" name = "reset" onclick="myFunction()" value="Reset form">
	
	</form>
	</div>
	<div id ="form-complete">
	<?php
echo "<h2>Welcome </h2>";
echo $name;
echo "<br>";
echo "<h2> Your details are </h2>";
echo $address;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $age;
echo "<br>";
echo $dob;
echo "<br>";
echo $movie;
?>
<br>
 


	
	</div>
