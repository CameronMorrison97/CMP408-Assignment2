<html>
	<head>
		<meta name="author" content="Cameron Morrison">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php 
			if(isset($_POST['pin']) == true && isset($_POST['value']) == true){
				echo $_POST['pin'];
			}
		?>
		
		<!-- 
			Importing Scripts
		!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="ajax.js"></script>
		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	</head>
	<body>
		<div class="form form-group">
			<form action="webcontrol.php" method="post">
				GPIO Pin Number : <input type="text" name="pin" onkeyup="sendData()"></input></br>
				GPIO Pin Value : <input type="text" name="value"></input></br>
				<input type="button" onclick="" class="btn btn-primary"></input>
			</form>
		</div>
	</body>
</html>