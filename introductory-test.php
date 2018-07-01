<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Introductory test</title>

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

	<!-- Modal -->
	<div class="modal fade" id="testResultModal" tabindex="-1" role="dialog" aria-labelledby="testResultModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="testResultModalLabel"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h3 class="text-center">Вітаємо! </h3>
	        <h3 class="text-center">Ви успішно здали тест і можете поступити у наш вуз!</h3>
	        <h4 class="text-center text-blue">Ваш результат: <span class="text-orange">100 балів</span></h4>
	      </div>
	      <div class="modal-footer justify-content-center">
	        <a href="entrant.php" class="btn btn-test btn-orange"><button>Круто! Я красавчик</button></a>
	      </div>
	    </div>
	  </div>
	</div>

	<section id="introductory-test" class="introductory-test">
		<div class="container">
			<div class="test">
				<div class="test-title">
					<h2 class="text-white">Пробний вступний тест на програму підготовки молодших спеціалістів:</h2>
				</div>
				<div class="test-container">
					<div class="math-section">
						<h2 class="text-center">Тест з математики</h2>
						<div class="task">
							<h3 class="text-blue">Завдання 1</h3>
							<h5>( 0,5 балів)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-1" id="intro-test-task-11" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-1" id="intro-test-task-12" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-1" id="intro-test-task-13" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-1" id="intro-test-task-14" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
						<div class="task">
							<h3 class="text-blue">Завдання 2</h3>
							<h5>( 0,5 балів)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-2" id="intro-test-task-21" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-2" id="intro-test-task-22" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-2" id="intro-test-task-23" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-2" id="intro-test-task-24" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
						<div class="task">
							<h3 class="text-blue">Завдання 3</h3>
							<h5>( 0,5 балів)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-3" id="intro-test-task-31" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-3" id="intro-test-task-32" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-3" id="intro-test-task-33" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-3" id="intro-test-task-34" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
					</div>

					<div class="uk-lang-section">
						<h2 class="text-center">Тест з української мови</h2>
						<div class="task">
							<h3 class="text-blue">Завдання 1</h3>
							<h5>( 1 бал)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-4" id="intro-test-task-41" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-4" id="intro-test-task-42" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-4" id="intro-test-task-43" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-4" id="intro-test-task-44" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
						<div class="task">
							<h3 class="text-blue">Завдання 2</h3>
							<h5>( 1 бал)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-5" id="intro-test-task-51" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-5" id="intro-test-task-52" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-5" id="intro-test-task-53" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-5" id="intro-test-task-54" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
						<div class="task">
							<h3 class="text-blue">Завдання 3</h3>
							<h5>( 1 бал)</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ex, unde magni soluta voluptate vitae officiis quia, sit animi alias neque, quasi aut laborum, rem quibusdam sequi explicabo autem inventore?</p>
							<h4>Варіанти відповіді:
								<!-- <form action=""> -->
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-6" id="intro-test-task-61" value="option" checked> 1
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-6" id="intro-test-task-62" value="option"> 2
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-6" id="intro-test-task-63" value="option"> 3
									  </label>
									</div>
									<div class="form-check form-check-inline">
									  <label class="form-check-label">
									    <input class="form-check-input" type="radio" name="intro-test-task-6" id="intro-test-task-64" value="option"> 4
									  </label>
									</div>
								<!-- </form> -->
							</h4>
						</div>
					</div>
				</div>
				<div class="test-footer">
					<a class="btn btn-test btn-orange"><button data-toggle="modal" data-target="#testResultModal">Отримати результат</button></a>
				</div>
			</div>
		</div>
	</section>

	<!-- jQuery -->
	<script src="sources/js/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="sources/js/popper.min.js" crossorigin="anonymous"></script>
	<script src="sources/js/bootstrap.min.js" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="sources/js/script.min.js"></script>
	<script src="sources/js/tests.js"></script>
</body>
</html>