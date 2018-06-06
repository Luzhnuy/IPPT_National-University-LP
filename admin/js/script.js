$(document).ready(function(){
	$('.login-button').on('click', function(){
		var login = $('.login').val();
		var pass = $('.password').val();

		$.ajax({
			type: 'POST',
			url: 'app/signin.php',
			data:  {'login': login,'password': pass},
			success:function(data){
				alert(data);
			}

		});
	});
});