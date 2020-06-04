
<?php

define('PFAD_EINTRAEGE', 'daten/test.txt');


$loginname="Yes";
$passwort="doe";

$liste = array(0=>array('bob'=>'bob123'),1=>array('peter'=>'peter123'));

array_push($liste,array($loginname=>$passwort));

speichereEintraege($liste);

function speichereEintraege($eintrage)
	{
	file_put_contents(PFAD_EINTRAEGE, serialize($eintrage));

	}
	print_r($liste);
?>