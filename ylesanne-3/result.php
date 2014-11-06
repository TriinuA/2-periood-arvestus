<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_POST); ?></pre>

   <?php 
     	if (isset($_POST["submit"])){
     		if (isset($_POST ["username"]) && isset(isset($_POST ["sex"])){
		    		$username = $_POST["username"];
		    		$sex = $_POST["sex"];
		    		echo "Tere "  $username "! Tundub, et olete " $sex ".";
		    	}
		    	else {
		    		if (isset($_POST ["username"]){
		    			$username = $_POST["username"];
		    			echo "Tere "  $username "! Palun minge tagasi ja valige sugu.";				
		    		}
		    		elseif (isset($_POST ["sex"])){
		    				$sex = $_POST["sex"];
		    				echo "Tundub, et olete " $sex ", kuid palun minge tagasi ja sisestage nimi.";
		    			}
		    			else
		    				echo "Palun minge tagasi ja täitke väljad.";
		    	}
     	}
     		else
	    		echo "Tundub, et sattusid siia otseteed pidi.";

      ?>
     ?>

    

 		

      ?>
      


    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
