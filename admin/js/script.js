$(document).ready(function(){
	$('.login-button').on('click', function(){
		var login = $('.login').val();
		var password = $('.password').val();
		var obj = [];
		obj['login'] = login;
		obj['password'] = password;

		$.ajax({
			type: 'POST',
			url: 'app/signin.php',
			data:  obj,
			success:function(data){
				if(data = "excelent"){
					window.location.href = "/ippt-website/admin/main.php";
				} else {
					alert(data);
				}
			}

		});
	});
});