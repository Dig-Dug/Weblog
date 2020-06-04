<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Einträge</title>
    <link href="_css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="gesamt">
        
        <header id="kopf">
		
            <h1>Mein Weblog</h1>
			<div>
			<a href="rechner.php">Rechner</a>
			<a href="registerformular.php">Register</a>
			<a href="index.php">Startseite</a>
			</div>


<form action="einloggen.php" method="post">
    <p><input type="text" name="benutzername" id="benutzername" >Benutzername</p>
    <p><input type="password" name="passwort" id="passwort" >passwort</p>
    <p><input type="submit" value="Einloggen" class="button" /></p>
</form>


<br>
<br>	

<?php
/*
#form1php
#echo $_server['PHP_SELF'];
$namen= unserialize(file_get_contents('namenliste'));
zeige_daten($namen);

function zeige_daten($liste)
{
	foreach($liste as $value)
	{
		foreach($value as $name=>$email=>$username=>$password=>)
		{
			echo $name . "" . $email . "<br>";
		}
	}
}
*/
?>

<?php
#form1php
#echo $_server['PHP_SELF'];
if(isset ($_GET['benutzername']) AND isset($_GET['passwort']) AND isset($_GET['knopf']))
{
	var_dump($_GET);
	$benutzername= $_GET['benutzername'];
	$passwort= $_GET['passwort'];
	
	
	if(!file_exists('namenliste'))
	{
		$namen=[];
		$namen = [array($benutzername=>$passwort)];
	}
	else
	{
		$namen= unserialize(file_get_contents('namenliste'));
		array_push($benutzername,array($benutzername=>$passwort) );
	}
	
	speichere($namen);
	zeige_daten($namen);	
	header('location:loginformular.php');
}

function speichere($werte)
{
	file_put_contents('namenliste', serialize($werte));
}

function zeige_daten($liste)
{
	foreach($liste as $value)
	{
		foreach($value as $benutzername=>$passwort)
		{
			echo $benutzername . "" . $passwort . "<br>";
		}
	}
}
header('Location: zeige_eintrag_formular.php');

?>
</body>