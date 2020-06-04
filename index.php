<?php
    require_once 'includes/konfiguration.php';
    require_once 'includes/funktionen.inc.php';
    session_start();
    
    // In Blogs werden Einträge immer in umgekehrter Reihenfolge angezeigt
    $eintraege = hole_eintraege(true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
    <title>Weblog - Einträge</title>
	<head>
	
</head>




<body>


    <div id="gesamt">
	
   <div class="header">
 
  <div id="kopf">
            <h1>Mein Weblog</h1>
		<p>Heute ist der <?php echo strftime('%d.%m.%y') ?>. </p>
        </div>
   </div>

		
               <div id="inhalt">
            
                            <h1>zozu</h1>
	            ouzouz	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 17.05.2018	                    um 09:44	                </span>
	            </p>
                            <h1>rtrztrzr</h1>
	            ztrztrtzrzr	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 17.05.2018	                    um 09:13	                </span>
	            </p>
                            <h1>6976</h1>
	            6976	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 16.05.2018	                    um 20:42	                </span>
	            </p>
                            <h1>uoiu</h1>
	            uoiu	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 16.05.2018	                    um 20:27	                </span>
	            </p>
                            <h1>Apfel</h1>
	            Lorem ipsum	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 02.12.2013	                    um 15:02	                </span>
	            </p>
                            <h1>Inhaltsleer</h1>
	            Streng dem definierten Wesen des Blindtextes folgend, fungiere ich als solcher und gebe mich unverbindlich inhaltsleer. <br>
<br>
In bedrückender Enge in vorgefertigte Masken gepresst friste ich ein freudloses Dasein auf dem schmalen Grat zwischen Nichtbeachtung und Bedeutungslosigkeit und habe doch eine Bitte:<br>
<br>
Handeln Sie Sinn stiftend für meine Existenz und lesen Sie mich.	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 03.06.2008	                    um 16:57	                </span>
	            </p>
                            <h1>Inhaltsleer</h1>
	            Streng dem definierten Wesen des Blindtextes folgend, fungiere ich als solcher und gebe mich unverbindlich inhaltsleer. <br>
<br>
In bedrückender Enge in vorgefertigte Masken gepresst friste ich ein freudloses Dasein auf dem schmalen Grat zwischen Nichtbeachtung und Bedeutungslosigkeit und habe doch eine Bitte:<br>
<br>
Handeln Sie Sinn stiftend für meine Existenz und lesen Sie mich.	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 03.06.2008	                    um 16:54	                </span>
	            </p>
                            <h1>Wenn ich gross bin</h1>
	            Ich bin nur ein kleiner Blindtext. Wenn ich gross bin, will ich Ulysses <br>
                              von James Joyce werden. Aber jetzt lohnt es sich noch nicht, mich weiterzulesen. <br>
                              Denn vorerst bin ich nur ein kleiner Blindtext.	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Georg Wilhelm Friedrich	                    Hegel	                    am 03.06.2008	                    um 11:27	                </span>
	            </p>
                            <h1>Langweilig</h1>
	            Dies ist ein Blindtext. Blindtexte sind zumeist weder informativ noch interessant, <br>
                              sondern ausgesprochen langweilig.<br>
                              <br>
                              So auch dieser.	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Jean-Paul	                    Sartre	                    am 03.06.2008	                    um 11:27	                </span>
	            </p>
                            <h1>Blindheit per Definition</h1>
	            Mit Blindheit per Definition geschlagen, dennoch nicht unsichtbar, <br>
                              präsentiere ich mich als unbeachtetes und ungeliebtes Stiefkind <br>
                              zeitgenössischer Literatur. Meine Bestimmung liegt - wie ich selbst -<br>
                              in engen Grenzen und ist rein platzhalterischer Natur.<br>
<br>
                              Kann ein missbrauchtes Wortgefüge eigentlich noch Schlimmeres erleiden, <br>
                              als als Blindtext erdacht und vor der Öffentlichkeit versteckt zu werden?	            
	            <p class="eintrag_unten">
	                <span>
	                    	                    geschrieben von
	                    Isaac	                    Newton	                    am 03.06.2008	                    um 11:27	                </span>
	            </p>
                        
        </div>
        
        <div id="menu">
            


    <meta charset="utf-8">
    <title>Weblog - Einträge</title>
    <link href="_css/stylesheet.css" type="text/css" rel="stylesheet">


    <div id="gesamt" style="width: 164px;">
        
        <header id="kopf" style="width: 174px;">
		
           
			<div>
	<a href="rechner.php">Rechner</a>
	<a href="registerformular.php">Register</a>
	<a href="index.php">Startseite</a>
			</div>


<form action="einloggen.php" method="post">
    <p><input name="benutzername" id="benutzername" type="text">Benutzername</p>
    <p><input name="password" id="passwort" type="passwort">password</p>
    <p><input value="Einloggen" class="button" name="knopf" type="submit"></p>
</form>


<br>
<br>	
 </div>
        
        <div id="menu">
            <?php
                /**
                 * Zeige das Login-Formular, wenn der Benutzer noch nicht eingeloggt ist,
                 * ansonsten das Hauptmenu.
                 */	 
                if (ist_eingeloggt()) {
				    require 'includes/hauptmenu.php';
                } else {
                	require 'includes/loginformular.php';
                } 
				header('Location: registerformular.php');
            ?>
        </div>


        </div>
        
        <div id="fuss">
            Das ist das Ende
        </div>
            
    </div>



</div>