$(document).ready(function(){
	// register
	$('#register').click(function(){
		$('#registerPopup').show();
	});

	$('#register-username').keypress(function(e){
		if (e.keyCode == 13){
			var data = { username : $('#register-username').val() };
			$.post('register_action.php', data, function(regResult) {
				if (regResult['status'] == 'failure'){
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
			$.post('login_action.php', data, function(loginResult) {
				if (loginResult['status'] == 'failure'){
					alert('bad login');
				}
				else {
					window.location = "/menu";
				}
			});
			return false;
		}
	});
});
