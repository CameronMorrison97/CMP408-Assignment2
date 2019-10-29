<?php 
	// Validate pinNumber and valNumber variables
	// pinNum is the bcm pin that will be turned on
	// valueNum is a value of 1 and 0 to indicate whether the pin is on or off
	// Please refer to reference 7.0 for the is_numeric function
	if(is_numeric($_POST["pinNum"]) == true && is_numeric($_POST["valueNum"]) == true){
			if(($_POST["pinNum"] >= 0 && $_POST["pinNum"] <= 27) && ($_POST["valueNum"] == 0 || $_POST["valueNum"] == 1)){
				// Don't judge me bro :DDD
				// I know it's not secure will maybe sanitise later I guess XD
				// result of the ajax request
				echo shell_exec("sudo /var/www/html/CMP408-Assignment2/piiotest write " . $_POST["pinNum"] . " " . $_POST["valueNum"]);
				echo "set";	
			}else{
				// result of the ajax request
				echo "Invalid";
			}
	}else{
		// result of the ajax request
		echo "Invalid";
	}
?>
