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
					    header('location:../main.php');
						
					} else {
						header('location:../index.php');
					}
				} else {
					header('location:../index.php');
				}
			}

			

		} else {
			header("location:../index.php");
		}
	} else {
		header('location:../index.php');
	}


?>