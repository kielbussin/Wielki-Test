<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wielki Test</title>
	<link rel="stylesheet" href="style1.css" type="text/css"/>
</head>

<body>
	<div id="container">
	
	Witaj na stronie!<br /><br />
	
	<a href="rejestracja.php">Rejestracja - załóż  konto!</a>
	<br /><br />
	
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />

		<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
</div>
	
	</form>
	


</body>
</html>