<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Projects page</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="sources/css/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="sources/css/bootstrap.min.css" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="sources/css/style.min.css">
	<!-- <link rel="stylesheet" href="sources/css/animate.min.css"> -->
	<!-- <link rel="stylesheet" href="sources/css/responsive.min.css"> -->
</head>
<body>
	<!-- Preloader -->
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
								<li class="nav-item">
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

	<section id="projects-page" class="projects-page">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Головна</a></li>
				<li class="breadcrumb-item"><a href="about-us.php">Про інститут</a></li>
				<li class="breadcrumb-item active">Проекти</li>
			</ol>

			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="ippt-projects">
						<h2 class="text-center text-blue">Проекти наших викладачів</h2>
						<div id="ipptProjectsAccordion" class="ipptProjectsAccordion" data-children=".item">
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#ipptProjectsAccordion" href="#ipptProject1" aria-expanded="true" aria-controls="ipptProject1">Проект 1</a>
						    <div id="ipptProject1" class="collapse" role="tabpanel">
						      <p class="mb-3">
						        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
						      </p>
						    </div>
						  </div>
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#ipptProjectsAccordion" href="#ipptProject2" aria-expanded="false" aria-controls="ipptProject2">Проект 2</a>
						    <div id="ipptProject2" class="collapse show" role="tabpanel">
						      <p class="mb-3">
						        Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						      </p>
						    </div>
						  </div>
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#ipptProjectsAccordion" href="#ipptProject3" aria-expanded="false" aria-controls="ipptProject3">Проект 2</a>
						    <div id="ipptProject3" class="collapse show" role="tabpanel">
						      <p class="mb-3">
						        Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						      </p>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="students-projects">
						<h2 class="text-center text-blue">Проекти наших студентів</h2>
						<div id="studProjectsAccordion" class="studProjectsAccordion" data-children=".item">
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#studProjectsAccordion" href="#studProject1" aria-expanded="true" aria-controls="studProject1">Проект 1</a>
						    <div id="studProject1" class="collapse" role="tabpanel">
						      <p class="mb-3">
						        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum scelerisque. Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
						      </p>
						    </div>
						  </div>
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#studProjectsAccordion" href="#studProject2" aria-expanded="false" aria-controls="studProject2">Проект 2</a>
						    <div id="studProject2" class="collapse show" role="tabpanel">
						      <p class="mb-3">
						        Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						      </p>
						    </div>
						  </div>
						  <div class="item">
						    <a data-toggle="collapse" data-parent="#studProjectsAccordion" href="#studProject3" aria-expanded="false" aria-controls="studProject3">Проект 2</a>
						    <div id="studProject3" class="collapse show" role="tabpanel">
						      <p class="mb-3">
						        Donec at ipsum dignissim, rutrum turpis scelerisque, tristique lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec dui turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						      </p>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
	<script src="sources/js/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="sources/js/popper.min.js" crossorigin="anonymous"></script>
	<script src="sources/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="sources/js/script.min.js"></script>
</body>
</html>