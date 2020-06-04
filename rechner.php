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
            <h1>+ - * / % **</h1>
		
        </div>
		<div>
		<a href="rechner.php">Rechner</a>
		<a href="index.php">Start</a>
		</div>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label for="wert1">Zahl 1</label>
<input type="text" name="wert1" id="wert1">
<label for="wert2">Zahl 2</label>
<input type="text" name="wert2" id="wert2">
<input type="submit" name="rechnen" value="rechne">
</form>


<?php
if (isset($_POST['wert1']) AND isset($_POST['wert2']))
{
	#INPUT
$zahl1 = floatval($_POST['wert1']);
$zahl2 = floatval($_POST['wert2']);
#Verarbeiten
$summe = add($zahl1,$zahl2);
$minus = minus($zahl1,$zahl2);
$mal = mal($zahl1,$zahl2);
$geteilt = geteilt($zahl1,$zahl2);
$modulo = modulo($zahl1,$zahl2);
$pptenz = pptenz($zahl1,$zahl2);
#OUTPUT
ausgeben($summe,$minus,$mal,$geteilt,$modulo,$pptenz);

#echo "Die Summe ist: " . $summe;
}


function add($z1,$z2)
{
	return($z1 + $z2);
}
function minus($z1,$z2)
{
	return($z1 - $z2);
}
function mal($z1,$z2)
{
	return($z1 * $z2);
}
function geteilt($z1,$z2)
{
	return round($z1 / $z2,2);
}
function modulo($z1,$z2)
{
	return($z1 % $z2);
}
function pptenz($z1,$z2)
{
	return($z1 ** $z2);
}

function ausgeben($summe,$minus,$mal,$geteilt,$modulo,$pptenz)
{
	$ausgabe ="<table>";
	$ausgabe .="<tr><td>Summe</td><td>$summe</td></tr>";
	$ausgabe .="<tr><td>Minus</td><td>$minus</td></tr>";
		$ausgabe .="<tr><td>Mal</td><td>$mal</td></tr>";
	$ausgabe .="<tr><td>Geteilt</td><td>$geteilt</td></tr>";
		$ausgabe .="<tr><td>Modulo</td><td>$modulo</td></tr>";
	$ausgabe .="<tr><td>PPtenz</td><td>$pptenz</td></tr>";
	echo $ausgabe;
}

?>

