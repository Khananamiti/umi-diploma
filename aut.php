<?php
	session_start();
	include "connect.php";
	include "header.php";
?>

	<main class="main">
		<!-- Intro start (Вступление)-->
		<section class="intro">
			<div class="wrapper">
				<h1 class="intro__title all__title-padding-top">Вход в личный кабинет</h1>
			</div>
		</section>
		<!-- Intro end (Вступление) -->		


				<!-- Rules start (Правила) -->
		<section class="registration">
			<div class="wrapper reg__wrap">
				<form action="application/models/cart.php">
					<p2 class="intro__subtitle">Логин:</p2><br>
					<input class="input__text" type="text" placeholder="Введите логин"><br>
					<p2 class="intro__subtitle">Пароль:</p2><br>
					<input class="input__text" type="password" placeholder="Введите пароль"><br>
					<p2 class="intro__subtitle">
						<a href="reg.php" class="header__link time-work link">У вас еще нет аккаунта?</a>
					</p2><br><br>					
					<input type="submit" class="search-form__submit2" value="Войти">					
					<input type="reset" class="search-form__submit2" value="Отмена">
				</form>
				<h3 class="error">Вы ввели неправильно логин или пароль!</h3>
			</div>			
		</section>
		<!-- Rules end (Правила) -->

<?php include "footer.php" ?>