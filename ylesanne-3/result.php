<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>  

    
   <?php 
     	if (isset($_POST["submit"])){
     		if (isset($_POST ["username"]) && ($_POST ["username"]) !==""  && isset($_POST ["sex"])){
    				
		    		echo "Tere {$_POST['username']}! Tundub, et olete {$_POST['sex']}.";
		    	}
		    	else {
		    		if (isset($_POST ["username"]) && !isset($_POST ["sex"]) && ($_POST ["username"]) !=="" ) {
		    			$username = $_POST["username"];
		    			echo "Tere {$_POST['username']} ! Palun minge tagasi ja valige sugu.";	
 					
		    		}
		    		elseif (isset($_POST ["sex"]) &&  ($_POST ["username"]) =="" ) {
		    				echo "Tundub, et olete  {$_POST ['sex']} , kuid palun minge tagasi ja sisestage nimi.";
		    			}
		    			else
		    				echo "Palun minge tagasi ja täitke väljad.";
		    	}
     	}
     		else
	    		echo "Tundub, et sattusid siia otseteed pidi.";

            ?>
      


    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
