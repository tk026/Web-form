
<div id="form" >
 
    <form method="POST" id="myForm" action="index.php" onsubmit="return validate()">
    
        <h2>Name</h2>
        <br>
        <input type="text" id="name" name="name" placeholder="Your name" maxlength="40" value="<?php echo htmlspecialchars($name);?>">

        <span class="error" id="nameError"></span>

        <span class="error"><?php echo $nameErr;?></span>
        <br>
        <br>

       	<h2> Email</h2>
        <br>
        <input type="text" id="email" name="email" maxlength='100' placeholder="Your Email" value="<?php echo htmlspecialchars($email);?>">
        <span class="error" id="emailError"></span>

        <span class="error"><?php echo $emailErr;?></span>
        <br>
        <br>

      	 <h2> Address</h2>
        <br>
        <textarea name="address" id="address" rows="5" placeholder="Your address" maxlength="200"><?php if(isset($_POST['address'])) { 
         echo htmlentities ($_POST['address']); }?></textarea>
        
        <span class="error" id="addressError"></span>

        <span class="error"><?php echo $addressErr;?></span>
        
       
        <br>
        
        <br> 
        <fieldset>
        <h2>Gender</h2>
        <br>
	    <input type="radio" name="gender" id="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == "Female") {
				    echo "checked";
				    } ?> value="Female">
		<strong>Female</strong>
	    <br>
	    <br>
	    <input type="radio" name="gender" id="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == "Male") {
				    echo "checked";
				    } ?> value="Male">
		<strong>Male</strong>
	    <br>
	    <span class="error" id="genderError"></span>

	    <span class="error"><?php echo $genderErr;?></span>
	    <br>
        </fieldset>

        <h2>Age</h2>
        <br>
        <input type="number" id="age" name="age"  placeholder="Your age" value="<?php echo htmlspecialchars($age);?>">
        

        <span class="error" id="ageError"></span>

        <span class="error"><?php echo $ageErr;?></span>

        <br> 
        <br>
        <h2>Date of birth</h2>
        <br>
        <input type="date" id="date" name="date" placeholder="Your Date of birth" value="<?php echo htmlspecialchars($date);?>">
        <br>
        <span class="error" id="dateError"></span>
        <span class="error"><?php echo $dateErr;?></span>
        <br>
        <br>
        <fieldset>
        <h2>Your Family movie</h2>
        <br>
        <input type="radio" name="movie" id="Moana" <?php if (isset($_POST['movie']) && $_POST['movie'] == "Moana") {
				    echo "checked";
				    } ?> value="Moana">
        <strong>Moana</strong>
        <br>

        <input type="radio" name="movie" id="Trolls"  <?php if (isset($_POST['movie']) && $_POST['movie']=="Trolls") {echo "checked";} ?> value="Trolls">
        <strong>Trolls</strong>
        <br>

        <input type="radio"  name="movie" id="Frozen"<?php if (isset($_POST['movie']) && $_POST['movie']=="Frozen" ) {echo "checked";} ?> value="Frozen">
        <strong>Frozen</strong>
        <br>

        <input type="radio"  name="movie" id="Boy" <?php if (isset($_POST['movie']) && $_POST['movie']=="Boy" ) {echo "checked";} ?> value="Boy">
        <strong>Boy</strong>
        <br>
        <span class="error" id="movieError"></span>

        <span class="error"><?php echo $movieErr;?></span>
        <br>
        </fieldset>

        <input type="submit" name="submit" value="Submit" onsubmit="">
        <input type="reset" name="reset" onclick="ResetForm()" value="Reset">
    </form>
</div>
</div>

