$(document).ready(function(){
	$('.login-button').on('click', function(){
		var login = $('.login').val();
		var password = $('.password').val();

		$.ajax({
			type: 'POST',
			url: 'app/signin.php',
			data:  {'login': login, 'password': password},
			success:function(data){
				alert(data);
			}

		});
	});
});