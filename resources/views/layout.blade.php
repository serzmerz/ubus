<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ukraine Bus</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="/css/front.css">

	

</head>
<body>
	
		<div class="first-line">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<p><i class="far fa-envelope"></i> ukrainebus.info@gmail.com</p>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5">
						<p><i class="fas fa-phone"></i> (0950) 700 112 &nbsp; <button type="button" class="btn btn-outline-warning btn-sm">Заказать звонок</button> </p>
					</div>
					<div class="col-xl-1 col-lg-1 col-md-1 ml-auto">
						<a href="" class="active">Ua</a>
						<a href="">En</a>
						<a href="">Pl</a>
					</div>
				</div>
			</div>
		</div>
		<div class="nav-line">
			<div class="container">
				<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-light">
					<a class="navbar-brand" href="#"><img src="/img/logo.jpg" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav col-xl- col-lg-6 col-md-6 ml-auto ">
							<li class="nav-item active">
								<a class="nav-link" href="{{ URL::to('/') }}">Главная <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.html">О нас</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ URL::to('routes') }}">Направления</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="services.html">Услуги</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contacts.html">Контакты</a>
							</li>
						</ul>
					</div>
				</nav>
		</div>
		</div>
    @yield('content')
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3">
					<img src="/img/logo-footer.png" alt="">
					<p class="footer-about"><b>UKRAINE.BUS - </b>компания, которая занимается международными перевозками и предоставляет в аренду различные виды автобусов.</p>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<ul>
						<li>Информация</li>
						<li>О нас</li>
						<li>Направления</li>
						<li>Услуги</li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<ul>
						<li>Билеты</li>
						<li>Покупка билета</li>
						<li>Бронированние билета</li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3">
					<ul>
						<li>Контакты</li>
						<li>(0950)700 112</li>
                        <li>(0542)700 112</li>
                        <li>(0977)700 112</li>
                        <li>(+48605) 180 180</li>
						<li>ukrainebus.info@gmail.com</li>
						<li>ул.Троицкая, 1, г.Сумы</li>
					</ul>
				</div>

			</div>
		</div>
	</footer>
		<script src="{{mix('js/app.js')}}" ></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.js"></script>
        <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqJMiDrWYoX8YhuM-N2GKCiOORfITLkTM&callback=initMap"></script>--->
		<script src="/js/front.js"></script>
</body>
</html>