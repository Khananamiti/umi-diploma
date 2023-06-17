<?php
	session_start();
	include "connect.php";
	include "header.php";
?>

	<main class="main">
		<!-- Intro start (Вступление)-->
		<section class="intro">
			<div class="wrapper">
			</div>
		</section>
		<!-- Intro end (Вступление) -->
		

				<!-- Rules start (Правила) -->
		<section class="rules">
			<div class="wrapper">
				<h1 class="intro__title intro">
					Порадуйте себя и своих близких цифровыми подарками!
				</h1> 	
				<div class="rules__cards">

					<div class="rules__card">
						<img src="./img/icon1.png" alt="Грузовик">											
						<h3 class="rules__card-circle-title">
							Бесплатная доставка
						</h3>
						<p class="rules__card-circle-desc">
							За 2 часа
						</p>
					</div>

					<div class="rules__card">
						<img src="./img/icon2.png" width="100" alt="Гарантия">						
						<h3 class="rules__card-circle-title">
							12 месяцев гарантии
						</h3>
						<p class="rules__card-circle-desc">
							Гарантия возврата
						</p>
					</div>

					<div class="rules__card">
						<img src="./img/icon3.png" width="100" alt="Сердце">							
						<h3 class="rules__card-circle-title">
							Подарки и конкурсы
						</h3>
						<p class="rules__card-circle-desc">
							Дружелюбное обслуживание
						</p>
					</div>
					
				</div>
			</div>			
		</section>
		<!-- Rules end (Правила) -->

		<!--  Catalog start (Каталог товаров)-->
		<section class="catalog" id="s5">
			<div class="catalog__wrap">
				<div class="catalog__cards">
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/1t.jpg" alt="Аренда фотостудии" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Xiaomi Redmi Note 10S 6/128 Gb Синий
						</h3>
						<p class="catalog__card-desc">
							16990,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/2t.jpg" alt="Услуги фотографа" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Xiaomi 11T Pro 12/256 Gb Серый
						</h3>
						<p class="catalog__card-desc">
							39990,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/3t.jpg" alt="Мероприятия" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Xiaomi Redmi 10 4/128 Gb Pebble White
						</h3>
						<p class="catalog__card-desc">
							14990,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
				</div>
				<div class="catalog__cards">
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/4t.jpg" alt="Аренда фотостудии" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Xiaomi Poco M4 Pro 5G 4/64 GB Синий
						</h3>
						<p class="catalog__card-desc">
							13490,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/5t.jpg" alt="Услуги фотографа" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Realme 8i 4/128 Gb фиолетовый
						</h3>
						<p class="catalog__card-desc">
							14490,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
					<div class="catalog__card">
						<div class="catalog__card-pic">
							<img src="./img/6t.jpg" alt="Мероприятия" class="catalog__card-mini">
							<a href="#!" class="halls__card-link"></a>
						</div>
						<h3 class="catalog__card-title">
							Смартфон Xiaomi Redmi 9C 3/64GB NFC Gray (Серый)
						</h3>
						<p class="catalog__card-desc">
							7990,00  руб.
						</p>
						<button type="submit" class="search-form__submit2">Купить</button>	
					</div>
				</div>
			</div>
		</section>
		<!--  Catalog end (Каталог товаров)-->

		<!-- Halls start (Залы) -->

		<section class="halls" id="s2">
			<div class="wrapper">
				<h1 class="all__title all__title-padding-bottom">
				</h1>				
				<div class="slider-container">
					<div class="reviews__menu">
						<label for="pop-do-1"></label>
						<label for="pop-do-2"></label>
						<label for="pop-do-3"></label>
						<label for="pop-do-4"></label>
						<label for="pop-do-5"></label>
						<label for="pop-do-6"></label>
						<label for="pop-do-7"></label>
						<label for="pop-do-8"></label>
						<label for="pop-do-9"></label>
					</div>
						<input id="pop-do-1" type="radio" name="sl" checked>
						<div class="slide slide-10"></div>
						<input id="pop-do-2" type="radio" name="slides">
						<div class="slide slide-20"></div>
						<input id="pop-do-3" type="radio" name="slides">
						<div class="slide slide-30"></div>
						<input id="pop-do-4" type="radio" name="slides">
						<div class="slide slide-40"></div>
						<input id="pop-do-5" type="radio" name="slides">
						<div class="slide slide-50"></div>
						<input id="pop-do-6" type="radio" name="slides">
						<div class="slide slide-60"></div>
						<input id="pop-do-7" type="radio" name="slides">
						<div class="slide slide-70"></div>
						<input id="pop-do-8" type="radio" name="slides">
						<div class="slide slide-80"></div>
						<input id="pop-do-9" type="radio" name="slides">
						<div class="slide slide-90"></div>
				</div>
			</div>		
		</section>

		<!-- Reviews start (Отзывы) -->		
		<section class="reviews" id="s4">
			<div class="wrapper">
				<h1 class="all__title all__title-padding-bottom">
					Отзывы о магазине ЮМИ
				</h1>				
				<div class="slider-container">
					<div class="reviews__menu">
						<label for="slide-dot-1"></label>
						<label for="slide-dot-2"></label>
						<label for="slide-dot-3"></label>
						<label for="slide-dot-4"></label>
						<label for="slide-dot-5"></label>
					</div>
						<input id="slide-dot-1" type="radio" name="slides" checked>
						<div class="slide slide-1"></div>
						<input id="slide-dot-2" type="radio" name="slides">
						<div class="slide slide-2"></div>
						<input id="slide-dot-3" type="radio" name="slides">
						<div class="slide slide-3"></div>
						<input id="slide-dot-4" type="radio" name="slides">
						<div class="slide slide-4"></div>
						<input id="slide-dot-5" type="radio" name="slides">
						<div class="slide slide-5"></div>
				</div>
			</div>		
		</section>		
		<!-- Reviews end (Отзывы)  -->

		<h1 class="all__title all__title-padding-bottom">Где мы находимся</h1>	
		<!-- Map start (Карта) -->
		<p class="wrapper-full">
			<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.045629561506!2d73.30184821602394!3d54.98983395804156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01a340f00655%3A0xf1f3e057217bf7dd!2z0YPQuy4g0KHRgtC10L_QsNC90YbQsCwgMiwg0J7QvNGB0LosINCe0LzRgdC60LDRjyDQvtCx0LsuLCA2NDQxMTI!5e0!3m2!1sru!2sru!4v1671357783123!5m2!1sru!2sru" width="1920" height="608" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</p>

	</main>
	<script src="js/bootstrap.bundle.min.js"></script>

<?php include "footer.php" ?>