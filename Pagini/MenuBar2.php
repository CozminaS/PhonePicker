<?php
	include ('session.php');

	if(!isset($_SESSION["loggedin"])) {
	  echo 
	    '<html>
			<head>
				<link rel="stylesheet" href="CSS/MenuBar2.css">
				<link rel="stylesheet" href="CSS/body.css">
			</head>
			
			<body>

				<div class="topnav" id="myTopnav">
				  <a href="Main.php">Acasa</a>
				  <a href="Informatii.php">Pagina</a>

				  <div class="topnav-right">
					<a href="Login.php">Login</a>
				  </div>
				</div>
				

			</body>
		</html>' ;} 
	else { 
	   echo
	    '<html>
			<head>
				<link rel="stylesheet" href="CSS/MenuBar2.css">
				<link rel="stylesheet" href="CSS/body.css">
			</head>
			
			<body>

				<div class="topnav" id="myTopnav">
				  <a href="Main.php">Acasa</a>
				  <a href="Informatii.php">Pagina</a>

				  <div class="topnav-right">
					<a href="Account.php"><IMG SRC="CSS/Others/accountOutline.gif" style="width: 30px; padding: none; margin; 1px;"> </img></a>
				  </div>
				</div>
				

			</body>
		</html>';}
?>