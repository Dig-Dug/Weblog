<?php


require_once 'includes/funktionen.inc.php';
session_start();

// In Blogs werden Einträge in umgekehrter Reihenfolge angezeigt


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
    <title>Weblog - Einträge</title>
</head>
<body>
<div id="kopf">
            <h1>Mein Weblog</h1>
		
        </div>
		<div>
		<a href="rechner.php">Rechner</a>
		<a href="index.php">Start</a>
		</div>
<br>
<form method="get" action="registerformular.php">
	<label for="benutzername">Benutzername</label>
	<input type="text" name="benutzername" id="benutzername">
	<label for="vorname">Vorname</label>
	<input type="text" name="vorname" id="vorname">
	<label for="nachname">Nachname</label>
	<input type="text" name="nachname" id="nachname">
	<label for="passwort">Passwort</label>
	<input type="text" name="passwort" id="passwort">
	<input type="submit" value="senden" name="knopf">
</form>
<?php
#echo $_SERVER['PHP_SELF'];
$namen = unserialize(file_get_contents('_namenlist'));
#zeige_daten($namen);

if(isset($_GET['benutzername']) AND isset ($_GET['vorname']) AND isset($_GET['nachname']) AND isset ($_GET['passwort']) AND isset($_GET['knopf']))
{
	var_dump($_GET);
	$benutzername = $_GET['benutzername'];
	$vorname = $_GET['vorname'];
	$nachname = $_GET['nachname'];
	$passwort = $_GET['passwort'];

	
	
	if(!file_exists('_namenlist'))
	{
	$namen=[];
	$namen = [array(
	'vorname'=>$vorname,
	'nachname'=>$nachname,
	'benutzername'=>$benutzername,
	'passwort'=>$passwort)
	];
var_dump($namen);
	}
	else
	{
		$namen = unserialize(file_get_contents('_namenlist'));
		array_push($namen,array(
	'vorname'=>$vorname,'nachname'=>$nachname,'benutzername'=>$benutzername,'passwort'=>$passwort));

	}
	
	
	
	speichere($namen);

	
	#header('Location: index.php');
	#$_GET['vorname']=null;
}

function speichere($werte)
{
	file_put_contents('_namenlist', serialize($werte));
}

function zeige_daten($liste)
{
	foreach($liste as $value)
	{
		foreach($value as $vorname=>$nachname)
		{
			foreach ($value as $benutzername=>$passwort)
			{
			}
		}
	}
}
#header('Location: loginformular.php');
?>
