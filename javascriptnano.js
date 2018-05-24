			function val_form(){
				 
				var username = val_username(); 
				var password = val_password();
				
				if(!(username && password))
					return false;
				else
					alert("Berhasil Login");
			}


			function val_username(){	
				var username = document.getElementById("username").value;
				if(username.length < 1){
					document.getElementById("errUsername").innerHTML = "Email harus diisi!";
					return false;
				}else{
					document.getElementById("errUsername").innerHTML = "";
					return true;
				}
			}
			
			function val_password(){	
				var password = document.getElementById("password").value;
				if(password.length < 1){
					document.getElementById("errPassword").innerHTML = "Password harus diisi!";
					return false;
				}else{
					document.getElementById("errPassword").innerHTML = "";
					return true;
				}
			}

			