<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Увійдіть до адмін панелі</title>
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>



  <form class="login" method="POST" action="app/signin.php">
    <p>
      <label for="login">Логин:</label>
      <input type="text" name="login" id="login" >
    </p>

    <p>
      <label for="password">Пароль:</label>
      <input type="password" name="password" id="password" >
    </p>

    <p class="login-submit">
      <button  class="login-button">Увійти</button>
    </p>

<!--     <p class="forgot-password"><a href="index.html">Забыл пароль?</a></p> -->
  </form>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
