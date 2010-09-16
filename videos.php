<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Videos</title>
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
	<div id="content" style="text-align:center;">
		<?php
	include ('header.php');
	?>

	<div class="home"><a href="index.php">Home</a></div>
		<h1>Videos</h1>

		<ul class="list">
			<li><a href="resources/videos/dmvoe_web.mp4">DMVÖ Trailer</a></li>
		</ul>
			

		<object type="video/3gp" class="player" autoplay="true" data="rtsp://188.40.140.205/dmvoe/dmvoe_mobile.3gp" width="320" height="140"/>
		</object>


		</a>

	
		<?php
	include ('footer.php');
	?>

	</div>


	</div>
	</body>
</html>
