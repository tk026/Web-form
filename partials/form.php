<?php include ('index.php'); ?>
<link rel="stylesheet" href="css/main.css" type="text/css">

<div class="container">  
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	Name:<input type="text" name="name" placeholder="Name" value="<?= !empty($name) ? $name:''?>">
	Address:<textarea name="address" rows ="5" placeholder="Address" ></textarea>
	Email:<input type="text" name="email" placeholder="Email">
	Gender:
	<input type="radio" name="gender" value="female" >Female
	<input type="radio" name="gender" value="male" >Male
	Age:<input type="number" name="age" min="1" max="
	100" placeholder="First name" value="<?= !empty($age) ? $age:''?>">
	<br>
	Date of birth: <input type="date" name="dob" value="<?= !empty($dob) ? $dob:''?>">
	<br>
	Favourite Movie: <select name="movie" size="4" form="movie" multiple>
  <option value="Movie 1"  >Movie 1</option>
  <option value="Movie 2">Movie 2</option>
  <option value="Movie 3">Movie 3</option>
  <option value="Movie 4">Movie 4</option>
</select>

	<input type="submit">
	<input type="reset">
	</form>
	</div>
