<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IPPT - Professional test</title>

	<!-- Normalize css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

	<!-- Bootstrap styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="sources/font-awesome/css/font-awesome.min.css">

	<!-- My styles -->
	<link rel="stylesheet" href="sources/css/style.css">
	<link rel="stylesheet" href="sources/css/responsive.css">
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="preload-img">
			<img class="preload-logo" src="sources/img/logo.png" alt="logo">
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="profResultModal" tabindex="-1" role="dialog" aria-labelledby="profResultModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="profResultModalLabel"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <h3 class="text-center">Вітаємо!</h3>
	        <h4 class="text-center text-blue">Ваш результат: <span class="text-orange">технар</span></h4>
	      </div>
	      <div class="modal-footer justify-content-center">
	        <a href="entrant.php" class="btn btn-test btn-orange"><button>Круто! Я красавчик</button></a>
	      </div>
	    </div>
	  </div>
	</div>

	<section id="professional-test" class="professional-test">
		<div class="container">
			<div class="test">
				<div class="test-title">
					<h2 class="text-white">Тест, що допоможе визначитись із спеціалізацією:</h2>
				</div>
				<div class="test-container">
					<div class="task">
						<h3 class="text-blue">Мені б хотілось у своїй професійній діяльності:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task1" id="prof-test-task11" value="option" checked> Спілкуватись з різними людьми
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task1" id="prof-test-task12" value="option"> Що-небудь робити своїми руками - меблі, машини, одяг т.п.
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task1" id="prof-test-task13" value="option"> 3німати фільми, малювати, виступати на сцені т.п.
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">У книзі або кінофільмі мене найбільше приваблює:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-2" id="prof-test-task-21" value="option" checked> Ходожня форма, майстерність письменника або режесера
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-2" id="prof-test-task-22" value="option"> Сюжет, дії героїв
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-2" id="prof-test-task-23" value="option"> Інформація яка може пригодитись в житті
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Я більше зрадію Нобелівській премії:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-3" id="prof-test-task-31" value="option" checked> У сфері науки
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-3" id="prof-test-task-32" value="option"> За громадську діяльність
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-3" id="prof-test-task-33" value="option"> В галузі мистецтва
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Я швидше за все погоджусь стати:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task4" id="prof-test-task41" value="option" checked> Керівником банку
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task4" id="prof-test-task42" value="option"> Головним інженером на виробництві
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task4-" id="prof-test-task43" value="option"> Керівником експедиції
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Майбутнє людей визначає:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-5" id="prof-test-task-51" value="option" checked> Досягнення науки
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-5" id="prof-test-task-52" value="option"> Розвиток виробництва
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-5" id="prof-test-task-53" value="option"> Взаєморозуміння між людьми
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">На місці директора виробництва, я передусім, займуся:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-61" value="option" checked> Покращенням матеріальної бази
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-62" value="option"> Створенням дружного, згуртованого колективу
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-63" value="option"> Впровадженням нових технолоігй
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">На технічній виставці мене більше цікавитиме:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-61" value="option" checked> Зовнішній вигляд експонатів
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-62" value="option"> Внутрішня будова експонатів
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-6" id="prof-test-task-63" value="option"> Практичне застосування експонатів
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">У людях я ціную, передусім:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-7" id="prof-test-task-71" value="option" checked> Мужність, сміливість, витривалість
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-7" id="prof-test-task-72" value="option"> Дружелюбність, щирість
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-7" id="prof-test-task-73" value="option"> Відповідальність, чесність, акуратність
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">У відьний від роботи час я буду:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-8" id="prof-test-task-81" value="option" checked> Писати вірші або малювати
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-8" id="prof-test-task-82" value="option"> Проводити досліди
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-8" id="prof-test-task-83" value="option"> Тренуватись
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">У закордонних поїздках мене найбільше цікавить:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-9" id="prof-test-task-91" value="option" checked> Екстремальний туризм (альпінізм, серфінг, лижі)
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-9" id="prof-test-task-92" value="option"> Ділове спілкування
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-9" id="prof-test-task-93" value="option"> Можливість познайомитись із історією та культуроб іншої країни
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Мені цікаво розмовляти:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-10" id="prof-test-task-101" value="option" checked> Про машину нового типу
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-10" id="prof-test-task-102" value="option"> Про нову наукову теорію
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-10" id="prof-test-task-103" value="option"> Про людські взаємини
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Якби було тільки три гуртки за інтересами, я б обрав(ла):</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-11" id="prof-test-task-111" value="option" checked> Технічний
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-11" id="prof-test-task-112" value="option"> Музичний
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-11" id="prof-test-task-113" value="option"> Спортивний
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">У навчальному закладі більше уваги слід приділяти:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-12" id="prof-test-task-121" value="option" checked> Покращенню взаєморозуміння між викладачами і студентами
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-12" id="prof-test-task-122" value="option"> Підтримці здоров'я, заняттям спортом
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-12" id="prof-test-task-123" value="option"> Зміцненню дисципліни
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Я з великою цікавістю дивлюсь:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-13" id="prof-test-task-131" value="option" checked> Науково-популярні фільми
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-13" id="prof-test-task-132" value="option"> Програми про культуру та мистецтво
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-13" id="prof-test-task-133" value="option"> Спортивні телепередачі
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Мені було б цікаво працювати:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-14" id="prof-test-task-141" value="option" checked> З машинами, механізмами
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-14" id="prof-test-task-142" value="option"> З об'єктами природи
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-14" id="prof-test-task-143" value="option"> 3 дітьми або однолітками
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Навчальний заклад в першу чергу повнине:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-15" id="prof-test-task-151" value="option" checked> Давати знання та вміння
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-15" id="prof-test-task-152" value="option"> Вчити спілкуванню з іншими людьми
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-15" id="prof-test-task-153" value="option"> Навчати навичкам роботи
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Кожна людина повинна:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-16" id="prof-test-task-161" value="option" checked> Вести здоровий спосіб життя
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-16" id="prof-test-task-162" value="option"> Мати можливість займатись творчістю
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-16" id="prof-test-task-163" value="option"> Мати зручні побутові умови
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Для благополуччя в першу чергу необхідно:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-17" id="prof-test-task-171" value="option" checked> Захист інтересів та прав громадян
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-17" id="prof-test-task-172" value="option"> Турбота про матеріальне благополуччя людей
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-17" id="prof-test-task-173" value="option"> наука і технічний прогрес
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Мені більше всього подобаються заняття з:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-18" id="prof-test-task-181" value="option" checked> Фізкультури
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-18" id="prof-test-task-182" value="option"> Математики
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-18" id="prof-test-task-183" value="option"> Трудового навчання
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Мені цікавіше було б:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-19" id="prof-test-task-191" value="option" checked> Планувати виробництво продукції
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-19" id="prof-test-task-192" value="option"> Виготовляти вироби
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-19" id="prof-test-task-193" value="option"> 3айматись збутом продукції
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Я вважаю за краще читати статті про:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-20" id="prof-test-task-201" value="option" checked> Визначних учених і їх відкриття
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-20" id="prof-test-task-202" value="option"> Творчість митців та музикантів
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-20" id="prof-test-task-203" value="option"> Цікаві винаходи
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Вільний час я охоче проводжу:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-21" id="prof-test-task-211" value="option" checked> Роблячи що-небудь по господарстві
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-21" id="prof-test-task-212" value="option"> З книгою
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-21" id="prof-test-task-213" value="option"> На виставках, концертах, клубах
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Більшу цікавість у мене викличе новина про:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-22" id="prof-test-task-221" value="option" checked> Художню виставку
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-22" id="prof-test-task-222" value="option"> Ситуацію на фондових біржах
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-22" id="prof-test-task-223" value="option"> Наукове відкриття
							</label>
						</div>
					</div>

					<div class="task">
						<h3 class="text-blue">Я вважаю за краще працювати:</h3>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-23" id="prof-test-task-231" value="option" checked> У приміщенні, де багато людей
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-23" id="prof-test-task-232" value="option"> У незвичайних умовах
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="prof-test-task-23" id="prof-test-task-233" value="option"> У звичайному кабінеті
							</label>
						</div>
					</div>
				</div>
				<div class="test-footer">
					<a class="btn btn-test btn-orange"><button data-toggle="modal" data-target="#profResultModal">Отримати результат</button></a>
				</div>
			</div>
		</div>
	</section>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<!-- My scripts -->
	<script src="sources/js/script.js"></script>
	<script src="sources/js/tests.js"></script>
	
</body>
</html>