<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/main.css">
	<title>Третьяковская галерея</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Slab&display=swap" rel="stylesheet">
	
</head>
<body>
	<header class="header">
		<?php
      		include 'header.php'
    	?>
				<div class="d-flex justify-content-center">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Посетителям	
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#"><h4>Спланируйте визит</h4></a></li>
								  <li><a class="dropdown-item" href="#">Здания и часы работы</a></li>
								  <li><a class="dropdown-item" href="#">Билеты, льготы и бесплатные дни</a></li>
								  <li><a class="dropdown-item" href="#">Правила покупки билетов</a></li>
								  <li><a class="dropdown-item" href="#">Экскурсии</a></li>
								  <li><a class="dropdown-item" href="#">Контакты и отзывы</a></li>
								  <li><a class="dropdown-item" href="#">Правила посещения</a></li>
								  <li><a class="dropdown-item" href="#">Преподавателям</a></li>
								  <li><a class="dropdown-item" href="#">Самостоятельные занятия</a></li>
								  <li><a class="dropdown-item" href="#">Доступный музей</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Выставки
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Текущие выставки</a></li>
								  <li><a class="dropdown-item" href="#">Будущие выставки</a></li>
								  <li><a class="dropdown-item" href="#">Архив выставок</a></li>
								  <li><a class="dropdown-item" href="#">Внешние выставки</a></li>
								  <li><a class="dropdown-item" href="#">Постоянные экспозиции</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  События
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Встречи</a></li>
								  <li><a class="dropdown-item" href="#">Лекции</a></li>
								  <li><a class="dropdown-item" href="#">Концерты и спектакли</a></li>
								  <li><a class="dropdown-item" href="#">Архив событий</a></li>
								  <li><a class="dropdown-item" href="#">Экскурсии</a></li>
								</ul>
							  </li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Кино
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Фильмы в прокате</a></li>
								  <li><a class="dropdown-item" href="#">Архив кино</a></li>
								  <li><a class="dropdown-item" href="#">Все фильмы</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Образование
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Творческие занятия</a></li>
								  <li><a class="dropdown-item" href="#">Программы к выставкам</a></li>
								  <li><a class="dropdown-item" href="#">Экскурсии</a></li>
								  <li><a class="dropdown-item" href="#">Лекторий</a></li>
								  <li><a class="dropdown-item" href="#">Фестивали</a></li>
								  <li><a class="dropdown-item" href="#">Конкурс для педагогов</a></li>
								  <li><a class="dropdown-item" href="#">Семейные выходные</a></li>
								  <li><a class="dropdown-item" href="#">Семинары</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Коллекция
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Наука</a></li>
								  <li><a class="dropdown-item" href="#">Издания</a></li>
								  <li><a class="dropdown-item" href="#">Сувениры</a></li>
								  <li><a class="dropdown-item" href="#">Купить изображение</a></li>
								  <li><a class="dropdown-item" href="#">Видеоматериалы</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Онлайн образование
								</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Поддержать музей
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Сделать пожертвование</a></li>
								  <li><a class="dropdown-item" href="#">Стать Другом Третьяковки</a></li>
								  <li><a class="dropdown-item" href="#">Стать волонтером</a></li>
								  <li><a class="dropdown-item" href="#">Корпоративная программа</a></li>
								  <li><a class="dropdown-item" href="#">Эндаумент фонд</a></li>
								  <li><a class="dropdown-item" href="#">Планы развития и отчеты</a></li>
								  <li><a class="dropdown-item" href="#">Сохрани музей Голубкиной</a></li>
								  <li><a class="dropdown-item" href="#"> Проекты</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  Третьяковка онлайн
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#"> Моя Третьяковка</a></li>
								  <li><a class="dropdown-item" href="#">Лаврус</a></li>
								  <li><a class="dropdown-item" href="#">YouTube</a></li>
								  <li><a class="dropdown-item" href="#">Музеи по соседству</a></li>
								</ul>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								  О музее
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <li><a class="dropdown-item" href="#">Новости</a></li>
								  <li><a class="dropdown-item" href="#">Ответы на частые вопросы							</a></li>
								  <li><a class="dropdown-item" href="#">Миссия музея</a></li>
								  <li><a class="dropdown-item" href="#">История</a></li>
								  <li><a class="dropdown-item" href="#">Третьяковка от первого лица</a></li>
								  <li><a class="dropdown-item" href="#">Научная жизнь</a></li>
								  <li><a class="dropdown-item" href="#">Издания</a></li>
								  <li><a class="dropdown-item" href="#">Проекты</a></li>
								  <li><a class="dropdown-item" href="#">Попечительский совет</a></li>
								  <li><a class="dropdown-item" href="#">Фонд поддержки</a></li>
								  <li><a class="dropdown-item" href="#">Правовая информация</a></li>
								  <li><a class="dropdown-item" href="#">Контакты</a></li>
								  <li><a class="dropdown-item" href="#">Организация мероприятий</a></li>
								  <li><a class="dropdown-item" href="#">Руководство</a></li>
								  <li><a class="dropdown-item" href="#">Розыск владельцев произведений</a></li>
								</ul>
							  </li>
						</div>
					</div>
				  </nav>
				</div>
				
		</div>
	</header>
	<section class="title_screen">
		<div class="container">
			<div class="col col-lg-2">
			<div class="wrapper">
				<li class="sect-item">
					<a class="nav-link" href="#">Главная / Выставки </a> 
				  </li>
			</div>
		</div>
		</div>
	</section>
	<section class="intro">
		<div class="container">
		<h4 class="suptitle">
		#Архив
		</h4>
		<h1 class="intro__title">
		Александр Иванов. Библейские эскизы.<br> Чудеса и проповеди Христа
		</h1>
		<h4 class="subtitle">
		18 июня 2021 — 14 ноября 2021
		</h4>
		<br><br><br><br><br><br><br><br>
		<div class="d-flex flex-row-reverse bd-highlight">
			<div class="p-2 bd-highlight"> <a class="nav__svg" href="#"> <img src="../img/sixteen.svg" alt="age"></a> </div>
		</div>
	</section>
	<section class="screen__inner">
		<div class="container">
			<div class="d-flex justify-content-end">
				<div class="p-2 bd-highlight">А.А. Иванов. Христос проповедует на портике храма («Иерусалим, Иерусалим, избивающий пророков и камнями побивающий посланных к тебе!»). Конец 1840-х – 1858. ГТГ <br></div></div>
		</div>
	</section>
	<section class="event__nav">
		<div class="container">
			<div class="d-flex justify-content-start">
			<h5>Описание&nbsp&nbsp&nbsp&nbspФото/экспонаты</h5>

		</div>
		</div>
	</section>
	<section class="decription">
		<div class="container">
			<h4> Третьяковская галерея — эксклюзивный обладатель графического наследия Александра Андреевича Иванова (1806–1858), включающего в себя более 700 самостоятельных листов и около 40 альбомов. Полнота собрания позволяет сформировать несколько сменяющих друг друга экспозиций, каждая из которых имеет характер мини-выставки. «Чудеса и проповеди Христа» — выставка, продолжающая показ графического цикла «Библейские эскизы», работе над которым художник отдал последнее десятилетие своей жизни — с конца 1840-х до начала 1858 года.</h4>
			<br>
					<a class="nav--link" href="#"><h3>Скачать буклет к выставке </h3></a>
					<a class="nav--link" href="#"><h3>Аудиогид по выставке </h3></a>	
			<br>		
			<div class="d-flex justify-content-center"><button type="button" class="btn btn-light"><h6>Читать далее</h6></button></div>
		<div class="border_bottom">
		</div>
		</div>
	</section>
	<section class="photogallery">
		<div class="container">
			<br><br>
			<h1>Фотогалерея<h1>
				<br>
				<div class="container">
					<div class="row">
					  <div class="col-3"></div>

			<div class="col-6">
			<div class="carousel_wrapper">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
				  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
				</div>
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="../img/1_slider.jpg " class="d-block w-100" alt="картина 1">
					<div class="carousel-caption d-none d-md-block">
						<h4>А.А. Иванов. Преображение. Конец 1840-х – 1858 ©Государственная Третьяковская галерея</h4>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="../img/2_slider.jpg" class="d-block w-100" alt="картина 2">
					<div class="carousel-caption d-none d-md-block">
						<h4>А.А. Иванов. Проповедь Христа в храме. Конец 1840-х – 1858 ©Государственная Третьяковская галерея</h4>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="../img/3_slider.jpg" class="d-block w-100" alt="картина 3">
					<div class="carousel-caption d-none d-md-block">
						<h4>А.А. Иванов. Хождение по водам. (Христос спасает начавшего тонуть Петра). Конец 1840-х – 1858 ©Государственная Третьяковская галерея</h4>
					</div>
				  </div>
				  <div class="carousel-item">
					<img src="../img/4_slider.jpg" class="d-block w-100" alt="картина 4">
					<div class="carousel-caption d-none d-md-block">
						<h4>А.А. Иванов. Христос и Никодим. Конец 1840-х – 1858 ©Государственная Третьяковская галерея</h4>
					</div>
				  </div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Предыдущий</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="visually-hidden">Следующий</span>
				</button>
			  </div>
			</div>
			<div class="col-3"></div>
			</div> 
	</section>
	<section class="event">
		<div class="container">
			<br><br><h1>О мероприятии<h1>
			<div class="row">
				<div class="col-9">
			<div class="main_description">
					<br>
					<h4>По замыслу Иванова, эскизы предназначались для будущего воплощения их в настенных росписях «в особо на то посвященном здании, разумеется, не в церкви». Евангельская тема — «жизнь и деяния Христа» — должна была предстать в окружении изображений ветхозаветных, исторических и мифологических сцен, а также библейских текстов. Композиции росписей складывались в сложную систему параллелей, взаимосвязей и сопоставлений.
					<br><br>
					В «Библейских эскизах» выразились сложные художественно-философские поиски Иванова, связанные с важнейшими для него вопросами — о миссии художника, о роли искусства и его воздействии на нравственное и духовное преобразование мира.
					<br><br>
					<h4>Задуманный художественный ансамбль «Храм искусства», или «Храм философии», можно отнести к романтическим утопиям. Работа Иванова не была завершена. В какой-то мере эта незавершенность выявляет грандиозность замысла, его уникальность как в истолковании библейских текстов, так и в стилистике акварельных композиций.
					<br><br>
					Выставка «Чудеса и проповеди Христа» посвящена периоду жизни Иисуса, который называют временем его общественного служения. Экспозиция включает работы на темы крещения, призвания учеников, чудес, в том числе знаменитый шедевр художника — эскиз «Хождение по водам (Христос спасает начавшего тонуть Петра)». Значительное место принадлежит акварельным листам со сценами бесед, пророчеств, проповедей, среди них «Христос и самарянка», «Христос и Никодим», «Проповедь Христа в храме». Им свойственны композиционная изобретательность, смелые пространственные и световые эффекты в изображении интерьеров с величественными колоннадами, лестницами. Особая эмоциональность отличает эскизы, на которых Христос предстает перед народом на портике храма, на улицах и площадях, заполненных толпой, выступающей постоянным свидетелем и участником происходящего. Завершенность акварелей, их количество говорят об особом интересе автора к этой теме. Она отвечала размышлениям Иванова о пророческой роли художника...</h4><br>
			</div>
			<div class="d-flex justify-content-center"><button type="button" class="btn btn-light"><h6>Читать далее</h6></button></div>
			
		</div>
		</div>
		</div> 
	</section>
	<section class="share">
	<div class="container">

			<a class="nav__svg_inner" href="#"> <h4>Поделиться:&nbsp;&nbsp;</h4> </a>
			<a class="nav__svg_inner" href="#"> <img src="../img/vk.svg" alt="vk"></a>
			<a class="nav__svg_inner" href="#"> <img src="../img/twitter.svg" alt="twitter"></a>
			<a class="nav__svg_inner" href="#"> <img src="../img/ok.svg" alt="ok"></a>
			<div class="border_main"></div>		
		</div> 
		</div> 
	</section>
	<div class="container">
	<a class="text-body" href="filter.php">
        Секретная страница
      </a>
      <?php
      if(isset($_SESSION['message'])){
        echo '<p>'.$_SESSION['message'].'</p>';
      unset($_SESSION['message']);
      }
      
      ?>
    </div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
  </div>
  