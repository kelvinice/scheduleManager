function val_form(){
	 
	var email = val_email();
	var username = val_username(); 
	var password= val_password();
	var birthday= val_birthday();

	if(!(username && email && password && birthday))
		return false;
	else
		alert("Registrasi sukses");
}
function val_username(){
	var username = document.getElementById("username").value;
	var re = /^(?=.*[a-zA-Z])([a-zA-Z]+)$/;
	if(!re.test(username)){
		document.getElementById("errUsername").innerHTML = "Username can only contain letter";
		return false;
	}else{
		document.getElementById("errUsername").innerHTML = "";
		return true;
	}
}


function val_password(){	
	var password = document.getElementById("password").value;
	if(password.length < 1){
		document.getElementById("errPassword").innerHTML = "Password must be filled";
		return false;
	}else{
		document.getElementById("errPassword").innerHTML = "";
		return true;
	}
}


function val_birthday(){
	var birthday = document.getElementById("datepicker").value;
	var re = /^(0?[1-9]|1[012])[\/\- ](0?[1-9]|[12][0-9]|3[01])[\/\- ]\d{4}$/;
	if(!re.test(birthday)){
		document.getElementById("errBirthday").innerHTML = "Birth Date invalid";
		return false;
	}else{
		document.getElementById("errBirthday").innerHTML = "";
		return true;
	}
}
function val_email(){
	var email = document.getElementById("email").value;
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(!re.test(email)){
		document.getElementById("errEmail").innerHTML = "Email invalid";
		return false;
	}else{
		document.getElementById("errEmail").innerHTML = "";
		return true;
	}
}


