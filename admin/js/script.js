$(document).ready(function(){
	$('.login-button').on('click', function(){
		var login = $('.login').val();
		var password = $('.password').val();
		

		// if (login == "" || login == " ") {

		// 	alert("Ви незаповнили поле логін");

		// } else if (password =="" || password==" "){

		// 	alert("Ви незаповнили поле пароль");
			
		// }

		


		// $.ajax({
		// 	method: 'POST',
		// 	url: '/ippt-website/admin/app/signin.php',
		// 	data:  obj,
		// 	success:function(data){
				
		// 		// if (data = "excelent"){
		// 		// 	window.location.href = "/ippt-website/admin/main.php";
		// 		// } else {
		// 			alert(data);
		// 		// }
		// 	}

		// });
	});
});