<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - news archive</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="sources/css/style.css">
	<link rel="stylesheet" href="sources/css/animate.css">
	<link rel="stylesheet" href="sources/css/responsive.css">
</head>
<body>
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- Header -->
	<header id="header" class="header">
		<div class="navbar-contacts-language">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<div class="col-2 col-md-2 align-self-center">
						<div class="nav-logo">
							<div class="nav-logo-img">
								<a href="index.php"></a>
							</div>
							<div class="nav-logo-info">
								<span>Інститут підприємництва та перспективних технологій</span>
								<span>Національного університету "Львівська Політехніка"</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-4 col-md-3 col-lg-2 align-self-center">
						<div class="nav-contacts">
							<div class="row justify-content-end">
								<a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
								<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="navbar-menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<div class="mobile-menu">
						<div class="row justify-content-end">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					       		<span class="navbar-toggler-icon-fa"><i class="fa fa-bars" aria-hidden="true"></i></span>
					    	</button>
						</div>					
					</div>
					<div class="col-12 col-lg-6 align-self-center navbar-menu-del-padding">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav"> 
							    <li class="nav-item">
									<a class="nav-link" href="index.php">Головна <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="entrant.php">Вступнику</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="student.php">Студенту</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="graduate.php">Випускнику</a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="news-archive.php">Новини</a>
								</li>
							</ul>    
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="row justify-content-end">
							<form class="form-inline my-2 my-lg-0 search-input">
								<input class="form-control mr-sm-2" type="text" placeholder="Пошук..." aria-label="Search">
								<button class="btn btn-searching my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<!-- NEWS ARCHIVE PAGE -->
	<div id="news-archive" class="news-archive">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3">
					<div class="news-archive-navbar">
						<ul>
							<li><a href="#allnews" class="active">Всі новини</a></li>
							<li><a href="#sport">Спорт</a></li>
							<li><a href="#science">Наука</a></li>
							<li><a href="#seminars">Семінари</a></li>
							<li><a href="#events">Події</a></li>
							<li><a href="#trips">Подорожі</a></li>
							<li><a href="#spring-of-lp">"Весна політехніки"</a></li>
							<li><a href="#autumn-of-lp">"Осінь політехніки"</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-9">
					<div class="news-archive-section">
						<h2>Всі новини</h2>
						<div class="news-archive-container">
							<div class="row no-gutters">
								<div class="col-md-4">
									<div class="news-archive-img img">
										<img src="sources/img/news/IMG_183222222.jpg" alt="news-img">
									</div>
								</div>
								<div class="col-md-8">
									<div class="news-archive-text">
										<h3><a href="news.php" class="text-blue">Lorem Ipsum</a></h3>
										<h5 class="text-aqua">25.09.2017, 12:00</h5>
										<p class="text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit suscipit illo facere nihil doloribus, laborum aliquid perspiciatis nesciunt. Unde, numquam aliquam! Recusandae impedit unde distinctio non aspernatur accusamus, cum quidem.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="news-archive-container">
							<div class="row no-gutters">
								<div class="col-md-4">
									<div class="news-archive-img img">
										<img src="sources/img/news/IMG_4786.jpg" alt="news-img">
									</div>
								</div>
								<div class="col-md-8">
									<div class="news-archive-text">
										<h3><a href="news.php" class="text-blue">Lorem Ipsum</a></h3>
										<h5 class="text-aqua">25.09.2017, 12:00</h5>
										<p class="text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit suscipit illo facere nihil doloribus, laborum aliquid perspiciatis nesciunt. Unde, numquam aliquam! Recusandae impedit unde distinctio non aspernatur accusamus, cum quidem.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="news-archive-container">
							<div class="row no-gutters">
								<div class="col-md-4">
									<div class="news-archive-img img">
										<img src="sources/img/news/IMG_4717.jpg" alt="news-img">
									</div>
								</div>
								<div class="col-md-8">
									<div class="news-archive-text">
										<h3><a href="news.php" class="text-blue">Lorem Ipsum</a></h3>
										<h5 class="text-aqua">25.09.2017, 12:00</h5>
										<p class="text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit suscipit illo facere nihil doloribus, laborum aliquid perspiciatis nesciunt. Unde, numquam aliquam! Recusandae impedit unde distinctio non aspernatur accusamus, cum quidem.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="news-archive-footer">
						<!-- <a href="#" class="btn btn-orange"><button>Завантажити ще</button></a> -->
						<nav aria-label="Page navigation example">
						    <ul class="pagination">
							    <li class="page-item">
							        <a class="page-link" href="#" aria-label="Previous">
							        	<span aria-hidden="true">&laquo;</span>
							        	<span class="sr-only">Previous</span>
							        </a>
							    </li>
							    <li class="page-item"><a class="page-link" href="#">1</a></li>
							    <li class="page-item active"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							        <a class="page-link" href="#" aria-label="Next">
							        	<span aria-hidden="true">&raquo;</span>
							        	<span class="sr-only">Next</span>
							        </a>
							    </li>
						    </ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-2">
					<div class="footer-logo img">
						<a href="index.php">
							<img src="sources/img/logo.png" alt="footer-logo">
						</a>
					</div>
				</div>
				<div class="col-5">
					<div class="contact-us text-white">
						<p>Адреса: 9044, м. Львів, вул. Горбачевського, 18, 32-й н.к. </p>
						<p>Тел: (032) 258-20-27б, (032) 297-07-55 </p>
						<p>E-mail: IPPT.dept@lpnu.ua</p>
					</div>
				</div>
				<div class="col-5">
					<div class="copyright">
						<p class="text-aqua">
							<i class="fa fa-copyright" aria-hidden="true"></i>
							2018 Інститут Підприємництва та Перспективних Технологій.<br> Всі права застережено.<br>
							<a class="text-aqua" href="#our-genius">Розробка та підтримка здійснюється студентами ІППТ.</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="sources/js/script.js"></script>
</body>
</html>