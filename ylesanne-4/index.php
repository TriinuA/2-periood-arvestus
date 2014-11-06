<?php 
	setcookie("arvestus",  "Cookie on olemas", time() +20);
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
    

    <?php
    	 
		/*isset($_COOKIE["arvestus"]) ? $_COOKIE["arvestus"] : "Cookie-t ei ole!";*/  //ei tulnud välja

    	if (isset($_COOKIE["arvestus"])) {
    		echo $_COOKIE["arvestus"];
    	}
    		else
    			echo "Cookie-t ei ole!";

     ?>

  </body>
</html>
