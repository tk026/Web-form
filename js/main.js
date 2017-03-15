function validate(){

	var email  =  validateEmail;
	var name = validateName;
	var address = validateAddress;
	var gender = validateGender;
	var dob = validateDOB;
	var age = validateAge;
	var movie = validateMovie;

	if ( validateName() && validateEmail() && validateAddress() && validateGender () 
		&& validateDOB () && validateAge() && validateMovie ())
		{
		
		document.getElementById('form').style.display="block";
		return false;

	}


	return false;
}

function validateName(){
	fullName = document.getElementById('name').value;
	pos1 = fullName.indexOf("$name");
	
	if (pos1 >= 0 && fullName.length > 2 && !parseInt(fullName)) {

   
    return true;

}
else
{
    alert(fullName +" please enter a full Name")
    document.getElementById('$errors').innerHTML = fullName + " please enter a full Name!";  
    return false;
}

function validateEmail(){
	mailAddress = document.getElementById('email').value;
	pos1 = mailAddress.indexOf("@");
	pos2 = mailAddress.indexOf(".");

	if (pos1 >= 0 && pos2 >= 0) {
   
    return true;
}
else
{
    alert(mailAddress +" is not a valid address!")
    // document.getElementById('emailError').innerHTML = mailAddress + " please enter a valid email address!";  
    return false;
}
}


function validateAddress(){

}

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

function validateDate() {
	var dob = document.getElementById('date');
	}

function myFunction() {
    document.getElementById("form").reset();
}

	document.getElementById('ageOutput').innerHTML  
	document.getElementById("on_submit").style.visibility ="visible";
