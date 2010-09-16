<?php
	include "connection.php";

	?>


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
	<div id="gewinnspiel">
		<h1>Gewinnspiel</h1>
		<p><b>EXKLUSIV FÜR DMVÖ CONGRESS GÄSTE! GEWINNEN SIE EIN NOKIA N8 SMARTPHONE, HIER MITMACHEN!</b></p>
		<img src="resources/images/layout/n8.png"  width="250px"  />
		<p>Tragen Sie Ihre Kontaktdaten hier ein um ein Nokia N8 Smartphone zu gewinnen!</p>
		<form action="kontaktformularverarbeitung.php" method="post">
					<p>
				
				<table>
						<tr>
								<td>
									  Name:
								</td>
								<td><input name="name" size="25"/>
									
								</td>
						</tr>
						<tr>
								<td>E-Mail: 
								</td>
								<td>      <input name="email" size="25"/>
								</td>
						</tr>
						<tr>
								<td> Handy-Nr.: 
								</td>
								<td><input name="number" size="25"/>
								</td>
						</tr>
				</table>

         
    
		 
          <br /></p>
		  		<p>*Teilnehmer dieses Gewinnspiels müssen registrierte Gäste des DMVÖ Congress 2010 statt. Die Smartphones werden am 21. Oktober am DMVÖ Congress von Nokia vergeben.</p>
          <input name="submit" type="submit" value="Teilnehmen!"/>
      </form>
		</div>
		
		

	<?php
		include ('footer.php');
	?>

	</div>
	
	<?php
	if(isset($connection)){
	mysql_close($connection);
	}
	?>
	</body>
</html>
