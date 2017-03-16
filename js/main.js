	function validate(){

		alert('here');
		var name = validateName();

		var email  =  validateEmail();
		var address = validateAddress();
		var gender = validateGender();
		var age = validateAge();
		var dob = validateDOB();
		var movie = validateMovie();

		if (name && email && address && gender && age && dob && movie)
		{
			// If all inputs are correct then this code will run
			return true;

		}


		return false;
	}

	function validateName(){

		fullName = document.getElementById('name').value;

		
		if (fullName == '') {
			document.getElementById('nameError').innerHTML = "please enter a full Name!";  

	    	return false;

		}
		else
		{ 
			document.getElementById('nameError').innerHTML = ""; 
		    return true;
		}
	}

	function validateEmail(){

		mailAddress = document.getElementById('email').value;
		pos1 = mailAddress.indexOf("@");
		pos2 = mailAddress.indexOf(".");

		if (pos1 >= 0 && pos2 >= 0) {
	   
		   // document.getElementById('emailError').innerHTML = "";
		   return true;
		}
		else
		{
		   
		    document.getElementById('emailError').innerHTML = " please enter a valid email address!";  
		    return false;
		}
	}


	function validateAddress(){

		fullAddress = document.getElementById('address').value;

		if(fullAddress==''){

			document.getElementById('addressError').innerHTML = "Please enter your address"; 
			return false;
		}
		
			
			return true;
		}
	

	function validateGender(){

		formGender = document.getElementById('gender').value;

		if(formGender==''){

			document.getElementById('genderError').innerHTML = "Please select your gender";
			return false;
		}
		
			
			return true;
		}
	
	function validateAge(){

		checkAge = document.getElementById('age').value;

		if(checkAge==''){

			document.getElementById('ageError').innerHTML = "Please enter your age";
			return false;

		}

		if(isNaN('age') || 'age' < 1 || 'age' > 150){

			document.getElementById('ageError').innerHTML= "Please enter a valid age";
			return false;
		}
		else
		{
			document.getElementById('ageError').innerHTML ="";
			return true;
		}
	}

	function validateDOB(){

		checkDOB = document.getElementById('dob').value;

		if(checkDOB ==''){

			document.getElementById('dobError').innerHTML="Please enter your Date of Birth";
			return false;
		}
		else
		{
			document.getElementById('dobError').innerHTML= "";
			return true;
		}

	}

	function validateMovie(){

		checkMovie = document.getElementById('movie').value;
		if(checkMovie ==''){

			document.getElementById('movieError').innerHTML = "Please select your favourite movie";
			return false;
		}
				
			return true;
		}
	}


		
	



