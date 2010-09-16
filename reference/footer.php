<div id="footer2" style="text-align:center;">
			<h1><p>
				<?php
					if(strstr($_SERVER['HTTP_USER_AGENT'], 'CFNetwork') || strstr($_SERVER['HTTP_USER_AGENT'], 'iPhone')  || strstr($_SERVER['HTTP_USER_AGENT'], 'iPad')) {?>
					
						<a href="http://itunes.apple.com/us/app/yasssu-2-0/id373163627?mt=8"><img src="../resources/images/layout/poweredby_grey.png" width="110px" alt="Logo" /></a>
						<?php	

					}
					else if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'android')){ ?>
						<a href="http://www.androidpit.com/en/android/market/apps/app/yasssu.com.yasssu_android/YASSSU-TV"><img src="../resources/images/layout/poweredby_grey.png" width="110px" alt="Logo" /></a>
						<?php
	   				}
	   				
	   				else if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'nokia')){ ?>
						<a href="http://store.ovi.com/content/21997"><img src="../resources/images/layout/poweredby_grey.png" width="110px" alt="Logo" /></a>
						<?php
	   				}
					else { ?>
						
						<a href="http://m.YASSSU.com"><img src="../resources/images/layout/poweredby_grey.png" width="110px" alt="Logo" /></a><?php	
					}	

					
		
				?>
				<a href="https://store.ovi.com/"><img src="../resources/images/layout/ovi.png" width="110px" alt="Ovi App" /></a>
					<p><a href="../contact.php">Impressum und Kontakt</a></p></h1>
	</div>
