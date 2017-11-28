<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>all-cool Menu</title>

<link rel="stylesheet" href="themes/fonawesome4/css/font-awesome.css">
<link rel="stylesheet" href="themes/css/style.css">
<link rel="stylesheet" href="themes/css/my_styles2.css">
<link rel="stylesheet" href="themes/css2/my_styles2.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="themes/js/owl/owl.carousel.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="themes/js/owl/owl.carousel.min.js"></script>
<script src="themes/js/jquery.bpopup.min.js"></script>
<script src="themes/js/spmenu2.js"></script>
<script src="themes/js/teplatejs.js"></script>
</head>
<body>
	<?php
	include_once('navbar.php');
	?>

	<div class="site-mine">
		<div class="site-header-block container-with-padding">
			<div class="header-block-left">
				<ul class="list-unstyled">
					<li>
						<div class="flex-box">
							<span><img src="themes/img/index/map-icon.png" alt="" class="img-responsive" /></span> <span class="sity-name poup-konsul">Москва</span>
						</div>
					</li>
					<li class="drop-down-box">
						<div class="flex-box">
							<span class="tel-box">8 800 350-20-01</span>  <span class="angle-icon"><img src="themes/img/index/angle-down-icon.png" alt="" class="img-responsive" /></span>
						</div>
						<div class="drop-blyat-block">
							<div id="contacts-drop-down-block" class="contacts-block">
								<div data-target="#slide-1" class="drop-block-header active">
									<span class="block-title">Контакты</span><span class="angle-icon-box pull-right"><img src="themes/img/index/angle-down-icon-min.png" alt=""></span>
								</div>
								<div id="slide-1" class="drop-block-body active">
									<ul class="list-unstyled">
										<li class="item item-1">
											8 800 350-20-01 7
										</li>
										<li class="item item-2">
											8 800 350-20-01 7
										</li>
										<li class="item item-3">
											<a href="mailto:zakaz@all-cool.ru">zakaz@all-cool.ru</a>
										</li>
										<li class="item item-4">
											<a href="mailto:zakaz@all-cool.ru">@allcool</a>
										</li>
										<li class="item item-5">
											7 915 350-20-01
										</li>
										<li class="item item-6">
											<span>7 915 350-20-01</span>
										</li>
										<li class="item item-7">
											all-cool
										</li>
									</ul>
								</div>
							</div>
							<div id="feedback-drop-down-block" class="feedback-block">
								<div data-target="#slide-2" class="drop-block-header">
									<span class="block-title">Обратный звонок</span><span class="angle-icon-box pull-right"><img src="themes/img/index/angle-down-icon-min.png" alt=""></span>
								</div>
								<div id="slide-2" class="drop-block-body">
									<form action="" method="post">				
										<div class="form-group">				  
										    <input type="text" class="form-control" id="u-name" name="u-name" value="" placeholder="Имя">
										</div>
										<div class="form-group">				  
										    <input type="tel" class="form-control" id="u-phone" name="u-phone" value="" placeholder="Телефон">
										</div>
										<div class="form-btn-block">
											<button type="submit" class="btn btn-color">Отправить</button>
										</div>
									</form>
								</div>

							</div>
							<div id="usk-q-drop-down-block" class="usk-q-block">
								<div data-target="#slide-3" class="drop-block-header">
									<span class="block-title">Задать вопрос</span><span class="angle-icon-box pull-right"><img src="themes/img/index/angle-down-icon-min.png" alt=""></span>
								</div>

								<div id="slide-3" class="drop-block-body">
									<form action="" method="post">				
										<div class="form-group">				  
										    <input type="text" class="form-control" id="u-name" name="u-name" value="" placeholder="Имя">
										</div>
										<div class="form-group">				  
										    <input type="tel" class="form-control" id="u-phone" name="u-phone" value="" placeholder="Телефон">
										</div>
										<div class="form-group">
											<textarea name="u-msg" class="form-control" id="u-msg"	placeholder="Сообщение"></textarea>
										</div>
										<div class="form-btn-block">
											<button type="submit" class="btn btn-color">Отправить</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="flex-box">
							<span class="working-time">c 9:00 до 21:00 ежедневно</span>
						</div>
					</li>
				</ul>
			</div>
			<div class="hor-nav-container">
				<nav class="navbar navbar-toggleable-md navbar-light hor-nav">
					<ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link" href="#">О компании</a>		   
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="#">Каталог</a>		   
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="#">Доставка и оплата</a>		   
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="#">Гарантия</a>		   
					      </li>

					      <li class="nav-item">
					        <a class="nav-link" href="#">Сотрудничество</a>		   
					      </li>
					</ul>
				</nav>
			</div>
			<div class="header-block-right">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="#" class="spec-links"><span class="mini-cart-box"><img src="themes/img/index/cart-icon.png" alt=""></span></a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></sapn></a>	
					</li>
					<li class="list-inline-item">
						<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="spec-links"><span class="user-prifile-icon"><img src="themes/img/index/persen-icon.png" alt=""></span></a>
					</li>
				</ul>
			</div>
		</div>

		<div class="slider-container flex-box container-with-padding">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-5">
					<h2>Первый E-market в России</h2> 
					<p>Покупай не выходя из дома!</p>
					<div class="btn-block">
						<a href="#" class="btn btn-color btn-md">Подробнее</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-7 no-padding-lf-md">
					<img src="themes/img/index/sl1.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="advices-block container-with-padding">
			<div class="row">
				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/service-center.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Собственный сервисный центр
					</div>
				</div>

				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/sng.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Доставка по России и СНГ
					</div>
				</div>

				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/oplata-pri-poluchenii.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Оплата при получении
					</div>
				</div>

				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/beznalichniy-raschet.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Безналичный расчет
					</div>
				</div>

				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/scidka.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Скидки
					</div>
				</div>

				<div class="col-6 col-sm-2">
					<div class="img-box">
						<img src="themes/img/index/ustanovka.png" alt="" class="img-fluid d-block mx-auto">
					</div>
					<div class="text-box">
						Установка техники в день доставки
					</div>
				</div>
			</div>
		</div>

		<div class="advances-block-2 container-with-padding">
			<div class="row">
				<div class="col-12 col-sm-4">
					<a href="#" class="advans-link"><div class="img-box">
							<img src="themes/img/index/obmen-vozvrat.png" alt="" class="img-fluid d-block mx-auto">
						</div>
						<div class="text-box">
							<span class="bold-text">Безпроблемный возврат или обмен</span>
							<span>в течение 30 дней после покупки</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-sm-4 with-border">
					<a href="#" class="advans-link"><div class="img-box">
							<img src="themes/img/index/sertificirovan.png" alt="" class="img-fluid d-block mx-auto">
						</div>
						<div class="text-box">
							<span class="bold-text">Вся продукция сертифицирована.</span>
							<span>Мы даём дополнительную гарантию производителя до 10 лет</span>
						</div>
					</a>
				</div>
				<div class="col-12 col-sm-4">
					<a href="#" class="advans-link"><div class="img-box">
							<img src="themes/img/index/specy.png" alt="" class="img-fluid d-block mx-auto">
						</div>
						<div class="text-box">
							<span class="bold-text">Квалифицированные специалисты</span>
							<span>ответят на любой ваш вопрос</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		
		<div class="owl-slider-block slider-block-1 container-with-padding">
			<div class="slider-header-block">
				<div class="row">
					<div class="col-12 col-sm-6"><h2 class="block-title">Хиты продаж</h2></div>
					<div class="col-12 col-sm-6">
						<div id="nav-buttons-1" class="owl-nav-buttons flex-box">
							<span class="owl-prev owl-navs"><img src="themes/img/index/arrow-left.png" alt=""></span>
							<span class="owl-next owl-navs"><img src="themes/img/index/arrow-right.png" alt=""></span>
						</div>
					</div>
				</div>
			</div>
			<div id="owl-hits-block" class="owl-carousel owl-theme">
				<div class="hits-item item">					
					<div class="item-content">
						<div class="owl-item-header">
							<span class="pull-left label-box">
								<span class="sku-lable hits">Хит продаж</span>
							</span>
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<a href="#" class="prod-link"><img src="themes/img/index/tel1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">	
								<div class="stars-container">
									<img src="themes/img/index/stars-icons.png" alt="">
								</div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<span class="pull-left label-box">
								<span class="sku-lable disconts">-20%</span>
							</span>
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<a href="#" class="prod-link"><img src="themes/img/index/tel2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->


				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<span class="pull-left label-box">
								<span class="sku-lable novinka">Новинка</span>
							</span>
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<a href="#" class="prod-link"><img src="themes/img/index/tel1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel2.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->


				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel1.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

			</div>	
		</div>
		
		<!-- НОВИНКИ -->
		<div class="owl-slider-block slider-block-2 container-with-padding">
			<div class="slider-header-block">
				<div class="row">
					<div class="col-12 col-sm-6"><h2 class="block-title">Новинки</h2></div>
					<div class="col-12 col-sm-6">
						<div id="nav-buttons-2" class="owl-nav-buttons flex-box">
							<span class="owl-prev owl-navs"><img src="themes/img/index/arrow-left.png" alt=""></span>
							<span class="owl-next owl-navs"><img src="themes/img/index/arrow-right.png" alt=""></span>
						</div>
					</div>
				</div>
			</div>
			<div id="owl-new-block" class="owl-carousel owl-theme">
				<div class="hits-item item">					
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel1.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">	
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel2.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->


				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel1.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel2.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->


				<div class="hits-item item">
					<div class="item-content">
						<div class="owl-item-header">
							<ul class="list-inline  pull-right">
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="heart-box"><img src="themes/img/index/heart-icon.png" alt=""></span></a>
								</li>							
								<li class="list-inline-item">
									<a href="#" class="spec-links"><span class="compare-box"><img src="themes/img/index/compare-icon.png" alt=""></span></a>	
								</li>			
							</ul>
						</div>
						<div class="owl-item-body">
							<div class="owl-item-img">
								<img src="themes/img/index/tel1.jpg" alt="" class="img-fluid">
							</div>
							<div class="owl-item-name">
								<span class="sku-name"><a href="#" class="prod-link">Samsung UE55MU8000U</a></span>
								<span class="sku-type">Телевизор</span>
							</div>
							<div class="owl-item-prices-block">
								<div class="sku-old-price">119 990р.</div>
								<div class="sku-new-price">89 990 р.</div>
							</div>
							<div class="owl-item-rating-block">
								<div class="stars-container"><img src="themes/img/index/stars-icons.png" alt=""></div>
								<div class="rating-count">(12)</div>
								<div class="all-reviews-link-block">
									<a href="#" class="all-reviews-link">все отзывы</a>
								</div>
							</div>
						</div>
						<div class="owl-item-footer">
							<a href="#" class="btn btn-color btn-lg"><span>В корзину</span> <span class="mini-cart-box"><img src="themes/img/index/cart-icon2.png" alt=""></span></a>
						
							<a href="#" class="btn btn-default btn-lg"><span>Купить в 1 клик</span></a>
						</div>
					</div>
				</div><!-- // item -->

			</div>	
		</div>

		<div class="mine-content-block container-with-padding">
			<div class="row">
				<div class="col-12">
					<h2>Гипермаркет ВсеХорошо.Ру </h2>
				</div>
				<div class="col-12 col-sm-6">					
					<p>В нашем гипермаркете вы можете приобрести сантехнику всех ведущих брендов.
						Наша отличительная особенность – мы предоставляем гарантию 10 лет на полное техническое обслуживание предлагаемого нами товара! Вы спросите «Почему?». Ответ прост – «Мы
						не стремимся к одноразовым покупкам, мы относимся к нашим клиентам, как к своей семье!
						А предоставлять любимым клиентам качественный продукт с бесплатным обслуживанием,
						для нас же приятней!» </p>
				
					<p>Еще никогда купить душевую кабину не было так просто!
						На All-cool.ru  товарный ассортимент составляет более 20.000 позиций и включает
						в себя так же: Душевые боксы, ванны, сауны, биде и унитазы.</p>
				</div>
				<div class="col-12 col-sm-6">				
					<p>Каждого нашего клиента мы просим оставить отзыв,  о приобретенном им товаре для того,
						что бы будущим покупателям было проще сделать свой выбор. Если вы хотите прочитать
						про отзывы душевых кабин, можете смело доверять – на нашем сайте они оставлены
						реальными людьми! </p>
				
					<p>Практически каждый день мы устраиваем акции на разные группы товаров, поэтому не забудьте подписаться на получение новостей, что бы быть в курсе о самых низких ценах и получать небольшие, но приятные бонусы!</p>
				</div>
			</div>
		</div>
		<div class="footer-block container-with-padding">
			<div class="row">
				<div class="col-12 col-sm-3">
					<p class="column-title">Мы в соц. сетях</p>

					<div class="vk-share">
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>
						<!-- VK Widget -->
						<div id="vk_groups"></div>
						<script type="text/javascript">
							var w_width = parseInt($(".vk-share").width());
						VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, width: w_width, height: "200"}, 139068127);
						</script>
					</div>
					<div class="f-share">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=245&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
				</div>
				<div class="col-12 col-sm-9">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-4  col-lg-3">
							<p class="column-title">Контакты</p>
							<ul class="list-unstyled contact-ul">
								<li class="item-1">
									Москва, пер. Малый Харитоньевский, д 7, с.1, п.5, о.4
								</li>
								<li class="item-2">
									<p class="contact-tel">8 800 350-20-01</p>
									<p class="contact-tel">7 495 133-75-04</p>
								</li>
								<li class="item-3">
									<a href="#">nfo@all-cool.ru</a>
								</li>
							</ul>

							<ul class="list-inline social-ul">
								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/vk-icon.png" alt="" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/f-icon.png" alt="" class="img-fluid">
									</a>
								</li>

								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/ok-icon.png" alt="" class="img-fluid">
									</a>
								</li>

								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/inst-icon.png" alt="" class="img-fluid">
									</a>
								</li>
							</ul>

							<ul class="list-inline social-ul">
								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/play-icon.png" alt="" class="img-fluid">
									</a>
								</li>
								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/google-icon.png" alt="" class="img-fluid">
									</a>
								</li>

								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/mailru-icon.png" alt="" class="img-fluid">
									</a>
								</li>

								<li class="list-inline-item">
									<a href="#">
										<img src="themes/img/index/tvit-icon.png" alt="" class="img-fluid">
									</a>
								</li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-md-4  col-lg-3">
							<p class="column-title">Режим работы</p>
							<ul class="list-unstyled working-time-ul">
								<li>Пн. – Пт.: с 9:00 до 20:00</li>
								<li>
									<p>Call-центр:</p>
									<p>Ежедневно с 09:00 до 21:00</p>
								</li>
							</ul>
							<ul class="list-unstyled feedback-ul">
								<li class="item-1"><a href="#" class="feedback">Обратный звонок</a></li>
								<li class="item-2"><a href="#" class="ask-q-link">Задать вопрос</a></li>
								<li class="item-3"><a href="#" class="write-director">Написать директору</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-md-4  col-lg-3">
							<p class="column-title">Каталог</p>
							<ul class="list-unstyled catalog-ul">
								<li><a href="#" class="footer-menu">Телевизоры</a></li>
								<li><a href="#" class="footer-menu">Холодильники</a></li>
								<li><a href="#" class="footer-menu">Стиральные машины</a></li>
								<li><a href="#" class="footer-menu">Мультиварки</a></li>
								<li><a href="#" class="footer-menu">Пылесосы</a></li>
								<li><a href="#" class="footer-menu">Бытовая техника</a></li>
								<li><a href="#" class="footer-menu">Компьютеры</a></li>
								<li><a href="#" class="footer-menu">Товары для дачи</a></li>
								<li><a href="#" class="footer-menu">Спортивные товары</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-md-4  col-lg-3">
							<p class="column-title">О компании</p>
							<ul class="list-unstyled about-ul">
								<li><a href="#" class="footer-link">О компании</a></li>
								<li><a href="#" class="footer-link">Новости</a></li>
								<li><a href="#" class="footer-link">Сотрудники</a></li>
								<li><a href="#" class="footer-link">Вакансии</a></li>
								<li><a href="#" class="footer-link">Склады / Пункты выдачи</a></li>
								<li><a href="#" class="footer-link">Сертификаты</a></li>
								<li><a href="#" class="footer-link">Отзывы</a></li>
							</ul>
						</div>

						<div class="col-12">
							<div class="oplata">
								<p>Способы оплаты:</p>
								<ul class="list-inline oplata-ul">
									<li class="list-inline-item">
										<a href="#">
											<img src="themes/img/index/master-cart.png" alt="" class="img-fluid">
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#">
											<img src="themes/img/index/visa.png" alt="" class="img-fluid">
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#">
											<img src="themes/img/index/webmoney.png" alt="" class="img-fluid">
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#">
											<img src="themes/img/index/ya-money.png" alt="" class="img-fluid">
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#">
											<img src="themes/img/index/qiwi.png" alt="" class="img-fluid">
										</a>
									</li>
								</ul>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="poup-konsul-block" class="pop-up-container">
		<div class="pop-up-close-block">
			<a href="javascript:void(0)" class="popup-close b-close pull-right">
				<img src="themes/img/index/popup-close.png" alt="close">
			</a>
		</div>
		<div class="popup-content">
			<div class="pop-up-header">
				<h3 class="pop-up-title">Получить консультацию</h3>
				<p>Специалист перезвонит Вам в течении пары минут</p>
			</div>
			<div class="pop-up-body">			
				<form action="" method="post">				
					<div class="form-group">				  
					    <input type="text" class="form-control" id="u-name" name="u-name" value="" placeholder="Имя" />
					</div>
					<div class="form-group">				  
					    <input type="tel" class="form-control" id="u-phone" name="u-phone" value="" placeholder="Телефон" />
					</div>
					<div class="form-btn-block">
						<button type="submit" class="btn btn-color">Отправить</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>