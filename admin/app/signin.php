<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/ippt-website/config/config.php');
	

	$users = R::getAll('SELECT * FROM users');

	// echo "hello";
	
	if($_POST){
		$login = $_POST['login'];
		$pass = $_POST['password'];
		
		if($login and $pass ){
			foreach ($users as $u ) {
				if($login == $u['username']){
					if($pass == $u['pass']){
						$_SESSION['user'] = $u;
						// header('location:main.php');
						echo "excelent";
					} else {
						echo "Неправильний пароль";
					}
				} else {
					echo "Неправильний логін";
				}
			}

			

		} else {
			echo "Ви незаповниле одне з полів";
		}
	} else {
		echo "acces denied";
	}


?>