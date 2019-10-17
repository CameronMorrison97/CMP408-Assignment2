<?php 
	if(is_numeric($_POST["pinNum"]) == true && is_numeric($_POST["valueNum"]) == true){
			if($_POST["pinNum"] >= 0 && $_POST["pinNum"] <= 41){
				echo "Valid pinNum";
			}
			
			if($_POST["valueNum"] == 0 || $_POST["valueNum"] == 1){
				echo "Valid Value";
			}
	}else{
		echo "Invalid";
	}
?>