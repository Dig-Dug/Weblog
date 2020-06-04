<form method="get" action="lesetext.php">
login: <input type="text" name="login">
passwort: <input type="password" name="passwort">
<input type="submit" value="login">
</form>
<?php

function verifiziere_daten($login,$passwort,$liste)
{
	foreach($liste AS $key=>$value)
	{
		foreach($value AS $k=>$v)
		{
		if($k == $login && $v === $passwort)
		{
			echo "Login ist ok";
		}
		}		
	}	
}

define('PFAD_EINTRAEGE', 'daten/test.txt');
 function holeEintraege()
    {
    	
    	if (file_exists( PFAD_EINTRAEGE)){
    		$eintraege = unserialize(file_get_contents(PFAD_EINTRAEGE));
    	}
		else {
			$eintraege= array();
		}
    	return $eintraege;
		
	}
	
	$liste= holeEintraege();
	
	#print_r($liste);
	if(isset($_GET['login']) && isset($_GET['passwort']))
{
	$login= $_GET['login'];
	$passwort= $_GET['passwort'];
	verifiziere_daten($login,$passwort,$liste);
	
}
	?>
		