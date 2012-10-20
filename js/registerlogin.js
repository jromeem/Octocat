$(document).ready(function(){
	// register
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

	// login
	$('#login').click(function(){
		$('#loginPopup').show();
	});

	$('#login-username').keypress(function(e){
		if (e.keyCode == 13){
			var data = { username : $('#login-username').val() };
			$.post('login_action.php', data, function(result) {
				if (result['status'] == 'failure'){
					$('body').html('<h1>LOGIN FAILURE, TOO BAD</h1>');
				}
				else{
					$('body').html('<h1>GOOD JOB, YOU\'RE LOGGED IN</h1>');
				}
			});
			return false;
		}
	});
});
