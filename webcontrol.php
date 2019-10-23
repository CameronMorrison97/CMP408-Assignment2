<html>
	<head>
		<meta name="author" content="Cameron Morrison">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- 
			Importing Scripts
		!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function sendData(){
				console.log("Stuff");
				$(document).ready(function(){
					var pinjs = $("#pin").val();
					var valuejs = $("#value").val();
					
					$.ajax({url: "ajax.php",type: "POST", data: {pinNum: pinjs, valueNum: valuejs}, success: function(data){
							console.log(data);
							if(data.includes("set")){
								$("#Success").show();
								$("#Danger").hide();
							}
							
							if(data.includes("Invalid")){
								$("#Danger").show();
								$("#Success").hide();
							}
					}});
				});
			}
		</script>
		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	</head>
	<body>
		<div class="form form-group">
			<form>
				GPIO Pin Number : <input id="pin" type="text" name="pinNum"></input></br>
				GPIO Pin Value : <input id="value" type="text"></input></br>
				<input type="button" value="Submit" onclick="sendData();" class="btn btn-primary"></input>
			</form>
			<div id="Success" class="alert alert-success" role='alert' style="display:none;">Success</div>
			<div id="Danger" class="alert alert-danger" role='alert' style="display:none;">Both values need to be whole numbers.</div>
		</div>
	</body>
</html>
