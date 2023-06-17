<?php
	session_start();
	include "connect.php";
	include "header.php";
?>

	<main class="main">
		<!-- Intro start (Вступление)-->
		<section class="intro">
			<div class="wrapper">
				<h1 class="intro__title all__title-padding-top">Регистрация</h1>
			</div>
		</section>
		<!-- Intro end (Вступление) -->		


				<!-- Rules start (Правила) -->
		<section class="registration">
			<div class="wrapper reg__wrap">
				<form action="aut.php">
					<p2 class="intro__subtitle">Имя:</p2><br>
					<input class="input__text" type="text" placeholder="Введите Ваше имя"><br>
					<p2 class="intro__subtitle">Фамилия:</p2><br>
					<input class="input__text" type="text" placeholder="Введите Вашу фамилию"><br>
					<p2 class="intro__subtitle">Логин:</p2><br>
					<input class="input__text" type="text" placeholder="Введите логин"><br>
					<p2 class="intro__subtitle">Ваш E-mail:</p2><br>
					<input class="input__text" type="text" placeholder="Введите адрес эл. почты"><br>
					<p2 class="intro__subtitle">Пароль:</p2><br>
					<input class="input__text" type="password" placeholder="Введите пароль"><br>
					<p2 class="intro__subtitle">Повторите пароль:</p2><br>
					<input class="input__text" type="password" placeholder="Введите пароль"><br>
					<p2 class="intro__subtitle">
						<a href="aut.php" class="header__link time-work link">У меня уже есть аккаунт</a>
					</p2><br><br>					
					<input type="submit" class="search-form__submit2" value="Зарегистрироваться">				
					<input type="reset" class="search-form__submit2" value="Отмена">
				</form>
			</div>			
		</section>
		<!-- Rules end (Правила) -->

<?php include "footer.php" ?>