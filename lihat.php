<?php
	setcookie("user", "Mila Rosyida", time()+20;
	?>
	
	<html>
	<body>
	<?phpif (isset($_COOKIE["user"]))
	echo "Selamat berbuka" . $_COOKIE["user"] . "!<br>";
	else
	echo "Done!";
	?>
	
	</body>
	</html>