$(document).ready(function(){
	$('#register').click(function(){
		$('#registerPopup').show();
	});

	$('#register-username').keypress(function(e){
		if (e.keyCode == 13){
			var data = { username : $('#register-username').val() };
			$.post('register_action.php', function(result) {
				console.log(result);
			});
			return false;
		}
	});
});
