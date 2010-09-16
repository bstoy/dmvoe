

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Gewinnspiel</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="resources/styles/reset.css" rel="stylesheet" type="text/css" />
		<link href="resources/styles/baseStyles.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../resources/scripts/templates.js"></script>
		<script type="text/javascript">
			function init() {
				var myAccordionList = new AccordionList(["accordion","features"]);
				var myStyleTweaks = new StyleTweaker();
				myStyleTweaks.add("Series60/3.2", "resources/styles/tweaks/S603rdFP2.css");
				myStyleTweaks.add("AppleWebKit/420+", "resources/styles/tweaks/S406th.css");
				myStyleTweaks.add("Opera Mini/4", "resources/styles/tweaks/operamini.css");
				myStyleTweaks.tweak();
			}
			addEvent("onload",init);
		</script>
	</head>
	<body>
	<div id="wrap">
	<div id="header">
	<div id="content">

	<?php
		include ('header.php');
	?>

	<div class="home"><a href="index.php">Home</a></div>
		<h1>Gewinnspiel</h1>
		
<?php


		$db_host = "188.40.118.20";
		$db_user = "musiclab"; 		
		$db_pass = "$67mysu01";
		$db_database = "dmvoe"; 
		$ok = true; // zeigt ob alle Eingaben ok sind
		$fehler = array(); // sammelt alle Fehlermeldungen
		

		$connection = mysql_connect($db_host, $db_user, $db_pass) or die

		("Verbindungsversuch fehlgeschlagen");


		mysql_select_db($db_database, $connection) or die("Konnte die Datenbank nicht	waehlen.");


	if($_POST[name] == '') {
		$ok = false;
		$fehler[] = "Name vergessen";
	}

	else if (!preg_match("/^([a-zA-Zöäüß. '-]+)$/is", $_POST[name])) {
		$ok = false;
		$fehler[] = "Nur Buchstaben für den Namen verwenden";
	}




	if($_POST[email] == '') {
		$ok = false;
		$fehler[] = "Email vergessen";
	}

	else if (!preg_match("/[\.a-z0-9_-]+@[a-z0-9-]{2,}\.[a-z]{2,4}$/i", $_POST[email])) {
		$ok = false;
		$fehler[] = "Bitte korrekte E-mail-adresse eingeben";
	}


	if($_POST[number] == '') {
		$ok = false;
		$fehler[] = "Telefonnummer vergessen";
	}


	else if (!preg_match("/^[0-9\/+-]+$/",  $_POST[number])) {
		$ok = false;
		$fehler[] = "Bitte korrekte Telefonnummer eingeben";
	}




//Wenn alles ok ist dann wird gespeichert und Meldung rausgegeben
	if ($ok) {
			$sql = "INSERT INTO `gewinnspiel` (`name`, `email`, `number`) VALUES ('$_POST[name]','$_POST[email]','$_POST[number]')";

			$query = mysql_query($sql) or die("Anfrage nicht erfolgreich");


			if (!$query)
				{
				die('Error: ' . mysql_error());
				}
			echo "<p>Vielen Dank! Sie wurden erfolgreich für das Gewinnspiel von Nokia und YASSSU.com registriert! Die Verlosung der drei Nokia N8 Smartphones findet live am DMVÖ Congress 2010 statt!</p>";

	}


//Wenn es fehler gibt
if ( ! $ok ) {
	echo '<p>Bitte füllen Sie alle Felder richtig aus</p>';
	foreach( $fehler as $fehler_text ) {
		echo '<p><b>'.$fehler_text.'</b></p>';
	}
	echo "<br /><p><a href='javascript:history.back();'>zur&uuml;ck</a></p>";
}
?>
		
		<?php
	include ('footer.php');
	?>
	</div>


	</div>
	</body>
</html>
