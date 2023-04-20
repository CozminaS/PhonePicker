<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<link rel="stylesheet" href="CSS/body.css">
		<link rel="stylesheet" href="CSS/form.css">
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
						<img src="CSS/Others/mobile4.png" alt="mobile">
					</div>

					<div class="right">
						<br><div class="text" style="font-size: 23px;">Completează următoarele câmpuri pentru a afla ce telefon ți se potrivește.</div><br>

						<form action="" onsubmit="return false">
							<label for="email">Email-ul dvs.:</label>
							<input type="text" id="email" name="email" style="width: 100%; height: 25px; font-size: 18px;
								border-top: none; border-left: none; border-right: none; margin-bottom: 5%; background: rgba(0, 0, 0, 0);
								font-family: 'Andika', sans-serif;"/><br/>
							
							<label for="buget">Bugetul dvs.:</label>
							<select name="buget" id="buget">
								<option value="1"> < 500 </option>
								<option value="2"> 500 - 999 </option>
								<option value="3"> 1000 - 1999 </option>
								<option value="4"> > 2000 </option>
							</select> <br>
							
							<label for="buget">La ce veți folosi telefonul?</label> <br>
							<input type="checkbox" id="1" name="1" value="1">Apeluri telefonice </input> <br>
							<input type="checkbox" id="2" name="2" value="2">Fotografie </input><br>
							<input type="checkbox" id="3" name="3" value="3">Videografie </input><br>
							<input type="checkbox" id="4" name="4" value="4">Jocuri </input> <br>
							<input type="checkbox" id="5" name="5" value="5">Divertisment </input> <br>

							<button onClick="" type="submit">Afișare rezultat</button>
							
						</form>    


					</div>
				</div>
			</div>

		</div>

		<?php include 'Footer.php';?>
		
			
	</body>
</html>