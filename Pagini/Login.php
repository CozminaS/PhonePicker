<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/LoginBox.css">
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
		<?php include 'MenuBar2.php';?>

		<div class='center'>
			<div class="LoginBox">
				<div class="left">
					<img src="CSS/Others/mobile.png" alt="mobile">
				</div>

				<div class="right">
					<br><div class="text">Login</div><br>

					<form>
						<label for="email">Email:</label>
						<input type="text" id="email" name="email" /><br/>
						<label for="pass">Password:</label>
						<input name="password" />

						<button>LOGIN</button>
					</form>    

					<div id = "line">
						<span> OR </span></div>

					<div id = "textToCenter">
						Sign in with</div>

					<div style="text-align: center">
						GOOGLE</div>

					<div id = "textToCenter" style={margin-top: 1%}>
						Don't have an account? <a href="Register.php">Register now!</a>
					</div><br>
				</div>
			</div>
		</div>
	

	</body>
</html>