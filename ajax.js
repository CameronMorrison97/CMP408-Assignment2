function sendData(){
	$(document).onload(function(){
		$.post( "webcontrol.php", { name: "John", time: "2pm" })
		  .done(function( data ) {
			alert( "Data Loaded: " + data );
		  });
	});
}