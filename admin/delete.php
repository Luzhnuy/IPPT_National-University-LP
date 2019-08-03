<?php

	include($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

if($_SESSION){
  } else {
    header('Location:../index.php');
}

$slider = R::getAll("SELECT * FROM slider");
$adwards = R::getAll("SELECT * FROM adward");
$about_ippt = R::getAll("SELECT * FROM about");
$news = R::getAll("SELECT * FROM news");
$projects = R::getAll("SELECT * FROM iproject");
$dep = R::getAll("SELECT * FROM department");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Адміністративна панель</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item ">
	        <a class="nav-link" href="main.php">Всі пости <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="rozklad.php">Залити Розклад</a>
	      </li>
				<li class="nav-item active">
	        <a class="nav-link" href="delete.php">Видалити</a>
	      </li>
	    <!--   <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="#">Disabled</a> -->
	      </li>
	    </ul>
	  </div>
</nav>

<section class="container">
	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Оголошеня
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div>
					<?php foreach($adwards as $a): ?>
						<div class="">
							<p><?=$a['title']; ?></p>
							<p><a href="app/delete.php?id=<?=$a['id']; ?>&type=adward">Видалити</a>
							</p>
						</div>
					<?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Новини
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
				<div>
			 	 <?php foreach($news as $a): ?>
			 		 <div class="">
			 			 <p><?=$a['title']; ?></p>
			 			 <p><a href="app/delete.php?id=<?=$a['id']; ?>&type=news">Видалити</a>
			 			 </p>
			 		 </div>
			 	 <?php endforeach; ?>

			  </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Слайди
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
				<div>
					<?php foreach($slider as $a): ?>
						<div class="">
							<p><?=$a['id']; ?></p>
							<p><a href="app/delete.php?id=<?=$a['id']; ?>&type=slider">Видалити</a>
							</p>
						</div>
					<?php endforeach; ?>

				</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
           Проекти інституту
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
				<div>
					<?php foreach($projects as $a): ?>
						<div class="">
							<p><?=$a['title']; ?></p>
							<p><a href="app/delete.php?id=<?=$a['id']; ?>&type=iproject">Видалити</a>
							</p>
						</div>
					<?php endforeach; ?>

				</div>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           цитати про інститут
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
				<div>
					<?php foreach($about_ippt as $a): ?>
						<div class="">
							<p><?=$a['title']; ?></p>
							<p><a href="app/delete.php?id=<?=$a['id']; ?>&type=about">Видалити</a>
							</p>
						</div>
					<?php endforeach; ?>

				</div>
      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-secondary collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
        викладача
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
				<div>
					<?php foreach($dep as $a): ?>
						<div class="">
							<p><?=$a['name']; ?></p>
							<p><a href="app/delete.php?id=<?=$a['id']; ?>&type=department">Видалити</a>
							</p>
						</div>
					<?php endforeach; ?>


      </div>
    </div>
  </div>
</div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>
