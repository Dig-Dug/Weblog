<?php
    function hole_eintraege($umgedreht = false)
    {
    	$eintraege = unserialize(file_get_contents(PFAD_EINTRAEGE));
    	if ($umgedreht === true) {
    		$eintraege = array_reverse($eintraege);
    	}
    	return $eintraege;
    }
    
    function ist_eingeloggt()
    {
    	if (isset($_SESSION['eingeloggt'])) {
    		return true;
    	} else {
    		return false;
    	}
    }
    
    function logge_ein($benutzername)
    {
    	$_SESSION['eingeloggt'] = $benutzername;
    }
    
    function logge_aus()
    {
    	if (isset($_SESSION['eingeloggt']))
		{
			unset($_SESSION['eingeloggt']);
		}
    }
?>


