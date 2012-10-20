$(document).ready(function(){
	$('#register').click(function(){
		$('#registerPopup').show();
	});

	$('#register-username').keypress(function(e){
		if (e.keyCode == 13){
			var data = { username : $('#register-username').val() };
			$.post('register_action.php', data, function(result) {
				if (result['status'] == 'failure'){
					$('body').html('<h1>NAME ALREADY TAKEN, TOO BAD</h1>');
				}
				else{
					$('body').html('<h1>GOOD JOB, YOU REGISTERED</h1>');
				}
			});
			return false;
		}
	});
});
