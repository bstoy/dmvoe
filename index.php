<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>DMVÖ Congress</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="resources/styles/reset.css" rel="stylesheet" type="text/css" />
		<link href="resources/styles/baseStyles.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="resources/scripts/templates.js"></script>
		<script type="text/javascript">
			function init() {
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
	</div>


	<div id="content" style="text-align:center;">
	<?php
	include ('header.php');
	?>



	<ul class="list">
		<li><a href="programm.php">Programm</a></li>
		<li><a href="reference.php">Referenten</a></li>
		<li><a href="videos.php">Videos</a></li>
		<li><a href="affiliate.php">Partner</a></li>
		<li><a href="gewinnspiel.php">Gewinnspiel</a></li>
	</ul>
			
  	
	<br />
	<script src="http://widgets.twimg.com/j/2/widget.js"></script>
	<script>
	new TWTR.Widget({
	  version: 2,
	  type: 'search',
	  search: 'DMVOE10',  
	  interval: 3000,
	  title: 'LIVE-tweets',
	  subject: 'DMVÖ',
	  width: 'auto',
	  height: 300,
	  theme: {
	    shell: {
	      background: '#e12231',
	      color: '#ffffff'
	    },
	    tweets: {
	      background: '#ffffff',
	      color: '#444444',
	      links: '#e12231'
	    }
	  },
	  features: {
	    scrollbar: false,
	    loop: false,
	    live: true,
	    hashtags: true,
	    timestamp: true,
	    avatars: true,
	    toptweets: true,
	    behavior: 'default'
	  }
	}).render().start();
	</script>

		<?php
	include ('footer.php');
	?>

		
		
	</div>


	</div>
	</body>
</html>


