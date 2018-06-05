<!DOCTYPE html>
<html lang="en" class="entrant-height">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Entrant's page</title>

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
<body class="entrant-height">
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
								<li class="nav-item active">
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

	<section id="entrant-page" class="entrant-page">
		<div class="container">
			<div id="entrant-tabs">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="entrant-navbar">
							<ul class="nav nav-tabs entrant-tabs" role="tablist">
								<li role="presentation"><a class="post-text active" href="#entrant-main"  aria-controls="entrant-main" role="tab" data-toggle="tab">Загальна інформація</a></li>
								<li role="presentation"><a class="post-text" href="#specialties"  aria-controls="specialties" role="tab" data-toggle="tab">Спеціальності</a></li>
								<li role="presentation"><a class="post-text" href="#conditions-of-entr"  aria-controls="conditions-of-entr" role="tab" data-toggle="tab">Умови вступу</a></li>
								<li role="presentation"><a class="post-text" href="#preparing-for-introduction"  aria-controls="preparing-for-introduction" role="tab" data-toggle="tab">Підготовка до вступу</a></li>
								<li role="presentation"><a class="post-text" href="#faq"  aria-controls="faq" role="tab" data-toggle="tab">Запитання/Відповіді</a></li>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-9">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active show" id="entrant-main">
								<h2>Загальна інформація</h2>
								<div class="entrant-info">
								    <p class="text-bold">Інститут здійснює підготовку фахівців на денній та заочній формах навчання за освітніми рівнями:</p> 
								    <ul>
								    	<li> <span class="text-bold text-italic text-blue">молодший спеціаліст</span> (спеціальності “Комп’ютерні науки”, “Облік і оподаткування”, "Фінанси, банківська справа та страхування" і "Маркетинг");</li>
								    	<li> <span class="text-bold text-italic text-blue">бакалавр</span> (спеціальності  “Комп’ютерні науки”,  “Облік і оподаткування”,  “Маркетинг”  та  “Фінанси, банківська справа та страхування”);</li>
								    	<li> <span class="text-bold text-italic text-blue">магістр</span> (спеціальність "Комп’ютерні науки" (спеціалізація - ”Комп’ютерний еколого-економічний моніторинг”)).</li>
								    </ul>
								    <p>Запрошуємо випускників середніх загальноосвітніх навчальних закладів та вищих навчальних закладів І та ІІ рівнів акредитації здобути освіту в навчально-науковому Інституті підприємництва та перспективних технологій  Національного університету "Львівська політехніка", яка відповідає вимогам сьогодення!</p>

								    <h4 class="text-bold text-center">ЧЕРЕЗ НАВЧАННЯ ДО УСПІХУ !</h4>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in" id="specialties">
								<h2>Спеціальності</h2>
								<div class="specialty">
									<h3 class="text-blue">Маркетинг</h3>
									<hr>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel laudantium et veritatis perferendis ex officia accusamus sed accusantium ratione adipisci porro error voluptatum explicabo delectus possimus, sint perspiciatis ut quibusdam.</p>
									<p class="specialty-more"><a href="specialty.php" target="_blank" class="text-bold text-italic text-aqua">Детальніше</a></p>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="conditions-of-entr">
								<h2>Умови вступу</h2>
								<ul>
									<li><a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/pravyla-pryyomu" class="text-aqua">Правила прийому в 2018 році (бакалавр та магістр)</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/vstup-u-koledzhi" class="text-aqua">Правила прийому в 2018 році (молодший спеціаліст)</a></li>
									<li><a target="_blank" href="http://lp.edu.ua/magistry" class="text-aqua">Умови вступу для магістрів</a></li>
									<li><a target="_blank" href="http://lp.edu.ua/bakalavram" class="text-aqua">Умови вступу для бакалаврів</a></li>
									<li><a target="_blank" href="http://www.lp.edu.ua/vstup-u-koledzhi" class="text-aqua">Умови вступу для молодших спеціалістів</a></li>
								</ul>
								<p class="text-bold">Для подачі заяви необхідно мати:</p>
								<ul>
								    <li class="text-italic">копію документа державного зразка про раніше здобутий освітній (освітньо-кваліфікаційний) рівень, на основі якого здійснюється вступ, і додаток до нього;</li>
								    <li class="text-italic">копію сертифіката відповідного рівня зовнішнього незалежного оцінювання (для вступників на основі повної загальної середньої освіти);</li>
								    <li class="text-italic">копію документа, що посвідчує особу та громадянство;</li>
								    <li class="text-italic">копію довідки ДПА про присвоєння ідентифікаційного номера;</li>
								    <li class="text-italic">чотири кольорові фотокартки розміром 3х4 см.</li>
								</ul>
								<p class="text-bold">Додатки до правил прийому (балаврів та магістрів):</p>
								<ul>
									<li>Додаток 1</li>
									<li>Додаток 2</li>
								</ul>
								<p class="text-bold">Додатки до правил прийому (молодших спеціалістів):</p>
								<ul>
									<li>Додаток 1</li>
									<li>Додаток 2</li>
								</ul>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="preparing-for-introduction">
								<h2>Підготовка до вступу</h2>
							</div>

							<div role="tabpanel" class="tab-pane fade in"  id="faq">
								<h2>Запитання/Відповіді</h2>
								<div id="accordion">
								  <div class="card">
								    <div class="card-header" id="headingOne">
								        <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								          Question 1?
								        </h3>
								    </div>

								    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>

								  <div class="card">
								    <div class="card-header" id="headingTwo">
								        <h3 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								          Question 2?
								        </h3>
								    </div>

								    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
								      <div class="card-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>

								  <div class="card">
								    <div class="card-header" id="headingThree">
								        <h3 data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								          Question 3?
								        </h3>
								    </div>

								    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
								      <div class="card-body">
								        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								      </div>
								    </div>
								  </div>
								</div>
								<!-- <div class="question-answer">
									<h3 class="text-blue">Question first?</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, atque, temporibus! Laudantium tempore hic facilis quae ipsam, rerum libero fugiat quidem placeat, odit, dolores cum dolor beatae. Officia, facere, consequuntur.</p>
								</div>
								<div class="question-answer">
									<h3 class="text-blue">Question second?</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, atque, temporibus! Laudantium tempore hic facilis quae ipsam, rerum libero fugiat quidem placeat, odit, dolores cum dolor beatae. Officia, facere, consequuntur.</p>
								</div>
								<div class="question-answer">
									<h3 class="text-blue">Question third?</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, atque, temporibus! Laudantium tempore hic facilis quae ipsam, rerum libero fugiat quidem placeat, odit, dolores cum dolor beatae. Officia, facere, consequuntur.</p>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>




			<!-- LOCATION -->
			<!-- <div id="location" class="location">
				<h2 class="text-center">Як нас знайти?</h2>
				<div class="row no-gutters">
					<div class="col-12">
						<iframe src="https://www.google.com/maps/d/embed?mid=1q1EhFyAKrJLBUxdvwadky6_brPM" width="100%" height="280"></iframe>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<!-- Footer -->
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