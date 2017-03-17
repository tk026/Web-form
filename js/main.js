	function validate(){

	
		var name = validateName();

		var email  =  validateEmail();
		var address = validateAddress();
		var gender = validateGender();
		var age = validateAge();
		var date = validateDOB();
		var movie = validateMovie();

		if (name && email && address && gender && age && date && movie)
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

		female = document.getElementById('female').checked;
		male = document.getElementById('male').checked;

		if(female && male){

			document.getElementById('genderError').innerHTML = "";
			return true;
		}
		document.getElementById('genderError').innerHTML = "Please enter your gender";
	
		return false;
		}
	
	function validateAge(){

		checkAge = document.getElementById('age').value;

		if(checkAge==''){

			document.getElementById('ageError').innerHTML = "Please enter your age";
			return false;

		}

		if(isNaN(checkAge) || checkAge < 1 || checkAge > 150){

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

		checkDOB = document.getElementById('date').value;

		if(checkDOB){

			document.getElementById('dobError').innerHTML="";
			return true;
		}
		else
		{
			document.getElementById('dobError').innerHTML= "Please enter your dob";
			return false;
		}

	}

	[]

	function validateMovie(){

		movie1 = document.getElementById('movie1').checked;
		movie2 = document.getElementById('movie2').checked;
		movie3 = document.getElementById('movie3').checked;
		movie4 = document.getElementById('movie4').checked;

		
		if(!movie1 && !movie2 && !movie3 && !movie4 ){

			document.getElementById('movieError').innerHTML = "Please select your favourite movie";
			return false;
		}
		else
		{	
			document.getElementById('movieError').innerHTML = "";
			return true;
		}
	}
	


		
	



