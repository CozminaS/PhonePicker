

function validareEmail(input) {
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (input.match(validRegex)) {
    //document.form1.text1.focus();
    return true;

  } else {
    //document.form1.text1.focus();
    return false;

  }
}

function verificareEmail(email) {
	if(email != "")
	{
		if(ValidareEmail(email) == true)
		{
			//document.getElementById("rez").style.color="white";
			document.getElementById("email").style.borderColor="black";
			document.getElementById("password").style.borderColor="black";
			return true;
		}
		else {
		   //document.getElementById("rez").style.color="red";
			document.getElementById("email").style.borderColor="red";
			document.getElementById("email").focus();
			return false;
		}
	}
	else 
	{
	   //document.getElementById("rez").style.color="red";
	   document.getElementById("email").style.borderColor="red";
	   document.getElementById("email").focus();
	   return false;
	}
}

function verificarePass(password) {
	if(password != "")
	{
			console.log(ok)
			//document.getElementById("rez").style.color="white";
			document.getElementById("email").style.borderColor="black";
			document.getElementById("password").style.borderColor="black";
	}
	else 
	{
	   //document.getElementById("rez").style.color="red";
	   document.getElementById("password").style.borderColor="red";
	   document.getElementById("password").focus();
	}
}

function verificareLogin() {
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	
	if(verificareEmail(email) == true) {
		if(verificarePass(password) == true) {
			console.log(ok)
		}
	}
}