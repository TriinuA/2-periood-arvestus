<?php
	require("index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päringu tagasiside</title>
  </head>

  <body>
    <a href="index.php">Mine tagasi</a> <br>
    <?php 
    	if (isset($username, $age)){
    		if ($age>17) {
            	echo "Tere $username! Olete lehekülje vaatamiseks piisavalt vana.";
    			} 
	    			else {
	                	echo "Tere *username*! Kahjuks olete liiga noor selle lehekülje külastamiseks.";
    				}
    			}
    			else {
    				echo "Tere, meil ei ole infot Teie nime ja vanuse kohta!";
    			}

     ?>
   
  </body>
</html>
