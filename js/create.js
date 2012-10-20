$(document).ready(function(){
	$('#wordInput').keypress(function(e){
		if (e.keyCode == 13){
			var data = { phrase : $('#wordInput').val() };
			$.post('create_action.php', data, function(createResult) {
				console.log(createResult);
			});
			return false;
		}
	});
});
