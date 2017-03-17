<div id="form" class="form-container">

    <form method="POST" action="index.php" onsubmit="return validate()">

        Name
        <br>
        <input type="text" id="name" name="name" placeholder="Your name" value="<?php echo htmlspecialchars($name);?>">

        <span class="error" id="nameError"></span>

        <span class="error"><?php echo $nameErr;?></span>
        <br>
        <br>

        Email
        <br>
        <input type="text" id="email" name="email" max='100' placeholder="Your Email" value="<?php echo htmlspecialchars($email);?>">
        <span class="error" id="emailError"></span>

        <span class="error"><?php echo $emailErr;?></span>
        <br>
        <br>

        Address
        <br>
        <textarea name="address" id="address" rows="5" placeholder="Your address" value="<?= htmlspecialchars($address);?>"></textarea>
        
        <span class="error" id="addressError"></span>

        <span class="error"><?php echo $addressErr;?></span>
        
       
        <br>
        
        <br> 
        <fieldset>
        Gender
        <br>
	    <input type="radio" name="gender" id="female" value="female"><?php if (isset($_POST['$gender']) && $_POST[ '$gender']=='female' ) {echo " checked";} ?><strong>Female</strong>
	    <br>
	    <br>
	    <input type="radio" name="gender" id="male" value="male"><?php if (isset($_POST['$gender']) && $_POST[ '$gender']=='male' ) {echo " checked";} ?><strong>Male</strong>
	    
	    <span class="error" id="genderError"></span>

	    <span class="error"><?php echo $genderErr;?></span>
	    <br>
        </fieldset>

        Age
        <br>
        <input type="number" id="age" name="age"  placeholder="Your age" value="<?php echo htmlspecialchars($age);?>">
        

        <span class="error" id="ageError"></span>

        <span class="error"><?php echo $ageErr;?></span>

        <br> 
        <br>
        Date of birth
        <br>
        <input type="date" id="date" name="date" placeholder="Your Date of birth" value="<?php echo htmlspecialchars($date);?>">
        
        <span class="error" id="dateError"></span>
        <span class="error"><?php echo $dateErr;?></span>
        <br>
        <br>
        <fieldset>
        Choose a Favourite movie
        <br>
        <input type="radio" id="movie1" name="movie" value="movie1"><?php if (isset($_POST['$movie']) && $_POST[ '$movie']=='movie1' ) {echo " checked";} ?><strong>Movie 1</strong>
        <br>

        <input type="radio" id="movie2" name="movie" value="movie2"><?php if (isset($_POST['$movie']) && $_POST[ '$movie']=='movie2' ) {echo " checked";} ?><strong>Movie 2</strong>
        <br>

        <input type="radio" id="movie3" name="movie" value="movie3"><?php if (isset($_POST['$movie']) && $_POST[ '$movie']=='movie3' ) {echo " checked";} ?><strong>Movie 3</strong>
        <br>

        <input type="radio" id="movie4" name="movie" value="movie4"><?php if (isset($_POST['movie']) && $_POST[ '$movie']=='movie4' ) {echo " checked";} ?><strong>Movie 4 </strong>
        <br>
        <span class="error" id="movieError"></span>

        <span class="error"><?php echo $movieErr;?></span>
        <br>
        </fieldset>

        <input type="submit" name="submit" value="Submit">

    </form>
</div>
<div id="form-complete">
    <?php echo "<h2>Welcome </h2>"; echo $name; echo "<br>"; echo "<h2> Your details are </h2>"; echo $address; echo "<br>"; echo $email; echo "<br>"; echo $gender; echo "<br>"; echo $age; echo "<br>"; echo $dob; echo "<br>"; echo $movie; ?>
    <br>




</div>