<?php 
	$valid = false;

	if(is_numeric($_POST["pinNum"]) == true && is_numeric($_POST["valueNum"]) == true){
			if(($_POST["pinNum"] >= 0 && $_POST["pinNum"] <= 41) && ($_POST["valueNum"] == 0 || $_POST["valueNum"] == 1)){
				// Don't judge me bro :DDD
				// I know it's not secure will maybe sanitise later I guess XD
				echo shell_exec("sudo /var/www/html/CMP408-Assignment2/piiotest write " . $_POST["pinNum"] . " " . $_POST["valueNum"]);
				echo "set";	
			}
	}else{
		echo "Invalid";
	}
?>