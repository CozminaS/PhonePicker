<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

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
						<br><div class="text">Conectare</div><br>

						<form action="" onsubmit="return false">
							<label for="email">Email:</label>
							<input type="text" id="email" name="email" /><br/>
							<label for="pass">Parolă:</label>
							<input type="password" id="password" name="password" />
							<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>

							<button onClick="verificareLogin()" type="submit">Conectare</button>
							
						</form>    

						<div id = "textToCenter" style="">
							Încă nu ai cont? <a href="Register.php">Înregistrează-te acum!</a>
						</div><br>
					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		
			
		<script>
			const togglePassword = document.querySelector('#togglePassword');
			const password = document.querySelector('#password');

			  togglePassword.addEventListener('click', function (e) {
				// toggle the type attribute
				const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
				password.setAttribute('type', type);
				// toggle the eye slash icon
				this.classList.toggle('fa-eye-slash');
			});
		</script>
	</body>
</html>