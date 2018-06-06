<?php 
	include('../../config/config.php');
	if($_SESSION['user']){
		header('location:main.php');
	}

	$users = R::getAll('SELECT * FROM users');

	echo "hello";

	// if($_POST){
	// 	$login = $_POST['login'];
	// 	$pass = $_POST['password']

	// 	// if($login and $pass ){
	// 		foreach ($users as $u ) {
	// 			if($login == $u['username']){
	// 				if($pass == $u['pass']){
	// 					$_SESSION['user'] = $u;
	// 					header('location:main.php');
	// 				} else {
	// 					echo "Неправильний пароль";
	// 				}
	// 			} else {
	// 				echo "Неправильний логін";
	// 			}
	// 		}

			

	// 	// } else {
	// 	// 	echo "Ви незаповниле одне з полів";
	// 	// }
	// } else {
	// 	echo "acces denied";
	// }


?>