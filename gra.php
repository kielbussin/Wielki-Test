<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name); 
	if(isset($_POST['promien']))
	{
		$objetosc = $_POST['objetosc']; 
		$login = $_SESSION['user'];
		$polaczenie->query("UPDATE uzytkownicy SET objetosc = '$objetosc' WHERE user = '$login'");
	}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wielki Test</title>
	<link rel="stylesheet" href="style2.css" type="text/css"/>
	<script>function Calculator() 
{
    var radius = document.getElementById('radius').value;
    var a = 3.14;
    var b = 1.25;
 
            var result = parseFloat(radius) *
			parseFloat(radius) *
			parseFloat(radius) * parseFloat(a) *
			parseFloat(b);
    document.getElementById('result').value = result;}</script>


	

</head>

<body>
<ul>
  <li><a href="index.php">Strona główna</a></li>
  <li><a href="pieski.php">Pieski</a></li>
  <li><a href="kotki.php">Kotki</a></li>
  <li><a href="alabama.php">Alabama</a></li>
</ul>









<div class="form">

<form action="gra.php" method="post">
        <fieldset>
            <p>Oblicz pole kuli.</p>
			Promień<input type="text" name="promien" id="radius" onchange="Calculator()">
			Objętość<input type="text" name="objetosc" id="result" readonly >
			<input type="submit" value="wyslij">
		
			
			
        </fieldset>
    </form>
</div>
   
	
	<div class="lrc">
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	
	
?>
</div>
   


</body>
</html>