<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>AutoParts - Главная</title>
	<meta name="discription" content="Магазин автозапчастей">
	<meta name="Keywords" content="autoparts, запчасти, автозапчасти">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/icon.png" rel="shortcut icon" type="image/x-icon" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="js/testData.js"></script>
	<script src="js/generalScript.js"></script>

	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.html" id="brand" class="navbar-brand">AutoParts</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Главная</a></li>
						<li><a href="#">Каталог</a></li>
						<li><a href="about.html">О нас</a></li>
						<li><a href="#">Обратная связь</a></li>
					</ul>
				</div>
				<div id="reg_auth">
					<a href="" data-toggle="modal" data-target="#modal_auth" title="Войти в кабинет пользователя">
						<div class="btn">
							Войти
						</div>
					</a>
					<a href="" title="Зарегистрироваться">
						<div class="btn">
							Регистрация
						</div>
					</a>
				</div>
			</div>
		</nav>
	</header>

	<div id="wrapper">
	
	 </div>

	<!-- Футтер -->
	<footer>
		© 2017 AutoParts.ru
	</footer>

	

<!-- Модальное окно входа -->
	<div id="modal_auth" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Вход:</h4>
			</div>
			<div class="modal-body">
				<input type="text" id="login" class="form-control" placeholder="Введите логин"/>
				<input type="password" id="password" class="form-control" placeholder="Введите пароль"/>
				<input type="button" id="done" class="btn btn-warning" value="Войти"/>
			</div>
			
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal">Закрыть</button>
			</div>
			</div>
		</div>
	</div>
	
<!-- Модальное окно характеристик -->
	<div id="myModal" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal">x</button>
					<h4 class="modal-title">Описание товара</h4>
				</div>
				<div class="modal-body row" id="text">
					<div class="col-md-8">
						<h id="head"></h></br>
						<h id="min_description"></h></br>
						<div id="img"></div></br>
						<h id="price"></h></br>
							<div id="options">
								<h style="font-weight: bold">Параметры:</h></br>
								<div id="div">Оригинальный артикул: <h id="article"></h></div>
								<div id="div">Применяемость: <h id="applicability"></h></div>
							</div>
						</div>
					<div class="col-md-4" style="margin-left: -50px;">
						<h id="full_description"></h>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
