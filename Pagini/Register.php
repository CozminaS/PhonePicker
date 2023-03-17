<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/Register.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
		<?php include 'MenuBar2.php';?>

		<div class='center'>
			<div class="LoginBox">
				<div class="left">
					<img src="CSS/Others/mobile2.png" alt="mobile">
				</div>

				<div class="right">
					<br><div class="text">Register</div><br>

					<form>
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" /><br/>
						
						<label for="user">Username:</label>
						<input type="text" id="user" name="user" /><br/>
						
						<label for="pass">Password:</label>
						<input name="password" />
						<label for="pass2">Confirm password:</label>
						<input name="password2" />

						<button>REGISTER</button>
					</form>    

					<div id = "textToCenter" style={margin-top: 1%}>
						Already have an account? <a href="Login.php">Login now!</a>
					</div><br>
				</div>
			</div>
		</div>
	

	</body>
</html>