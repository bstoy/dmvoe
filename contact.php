<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Partner</title>
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
		<h1>Kontakt und Impressum</h1>
		<p>
		<p>DMVÖ Congress<br />
		Eva Mandl (Himmelhoch – Text, PR Event)<br />
		Tel: 0699/111 766 56<br />
		Email: <a href="mailto:eva.mandl@himmelhoch.at">eva.mandl@himmelhoch.at</a><br />
		Website: <a href="http://www.dmvoe-congress.at">www.dmvoe-congress.at</a></p>
		 
		 
		<p>Impressum:</p>
		 
		<p><b>DMVÖ – Dialog Marketing Verband Österreich</b><br />
		A-1040 Wien, Heumühlgasse 11<br />
		Tel: +43.1.911 43 00<br />
		Fax: + 43.1.911 43 00 22<br />
		Email: office(at)dmvoe.at</p>
		 
		<p>Geschäftsführerin: Louisa Böhringer<br />
		Registrierung: Bundespolizeidirektion Wien, Büro für Vereins-, Versammlungs- und Medienrechtsangelegenheiten<br />
		Zahl: ZVR-Zahl: 786108683 <br />
		UID-Nummer: ATU 377 08 708</p>
		</p><br />
		
		
		<p><b>yasssu GmbH</b> </p>
		<p>Geschäftsführender Gesellschafter:<br />
		Roland L. Mueller <br /><br />
		
		Adresse: Mariahilfer Straße 4 <br />
		A-1070 Wien <br /><br />
		
		Kontaktdaten: <br />
		E-Mail:office@yasssu.com<br />
		Tel.: +43 720 347640 <br /><br />
		
		FN 291872z<br />
		UID ATU 63479346 <br /><br />
		
		Bankverbindung:<br /> 
		UniCredit Bank Austria AG <br />
		Kto.: 5184 600 5005 <br />
		BLZ: 12000 <br />
		IBAN: AT26 1200 0518 4600 5005<br /> 
		BIC: BKAUATWW <br /><br />
		
		Informationspflicht gemäß ECG</p>
		
		<div id="footer2">
		<?php
	include ('footer.php');
	?>

		</div>

	</div>


	</div>
	</body>
</html>
