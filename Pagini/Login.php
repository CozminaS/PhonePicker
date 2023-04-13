<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/LoginBox.css">
		<script src="verificariFormulare.js"></script>
		
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Andika&family=Archivo+Narrow&family=Montserrat+Alternates:wght@300&display=swap');
		</style>
		
	</head>
	
	<body>
		<div style="min-height: 80vh;">
			<?php include 'MenuBar2.php';?>

			<div class='center'>
				<div class="LoginBox">
					<div class="left">
						<img src="CSS/Others/mobile.png" alt="mobile">
					</div>

					<div class="right">
						<br><div class="text">Login</div><br>

						<form action="" onsubmit="return false">
							<label for="email">Email:</label>
							<input type="text" id="email" name="email" /><br/>
							<label for="pass">Password:</label>
							<input id="password" name="password" />

							<button onClick="verificareLogin()" type="submit">LOGIN</button>
							
							<!--<div id="rez" style="color: white; text-align: center; font-size: 17px; font-family: 'Andika', sans-serif;"> 
								Datele sunt incomplete sau incorecte!</div> -->
							
						</form>    

						<div id = "textToCenter" style="">
							Don't have an account? <a href="Register.php">Register now!</a>
						</div><br>
					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
			
	</body>
</html>