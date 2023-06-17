<?php
	session_start();
	include "connect.php";
	include "header.php";
?>

	<main class="main">
		<!-- Intro start (Вступление)-->
		<section class="intro">
			<div class="wrapper">
				<h1 class="intro__title">Контакты</h1>
			</div>
		</section>
		<!-- Intro end (Вступление) -->		


				<!-- Rules start (Правила) -->
		<section class="registration">
			<div class="wrapper contact__wrap">	 
				<p2 class="intro__subtitle all__title-padding-top">Напишите нам:</p2><br>
				<form action="#">
					<p2 class="intro__subtitle">Имя*</p2><br>
					<input class="input_text" type="text" placeholder="Введите Ваше имя"><br>
					<p2 class="intro__subtitle">Ваш E-mail* </p2><br>
					<input class="input_text" type="text" placeholder="Введите адрес эл. почты"><br>				
					<p2 class="intro__subtitle">Тема</p2>
					<select name="topic" class="colortext">
						<option value="recall">Отзыв</option>
						<option value="wishes">Пожелания</option>
						<option value="complaint">Жалоба</option>
						<option value="user_topic">Свой вариант</option>
					</select><br>
					<br><textarea name="message" class="search-form__textarea" cols="55" rows="5"></textarea><br>
					<input type="checkbox" name="call back"> Заказать обратный звонок<br>
					<br><br>
					<input type="submit" class="search-form__submit2" value="Отправить">
					<input type="reset" class="search-form__submit2" value="Отмена">
				</form>
				<br>
				<ul>
					<li>Контактный номер телефона: 
						<a href="tel:+79083120707" class="header__link">+7-908-312-07-07</a>
					</li>
					<li>Звонки принимаются ежедневно с 10:00 до 20:00 по Омску</li><br>
					<li>E-mail: 
						<a href="mailto:umiomsk55@gmail.com" class="header__link">umiomsk55@gmail.com</a>
					</li>
					<li>Для жалоб, претензий и благодарностей</li><br>
					<li>
						<h2>Адрес: г. Омск, ул. Степанца, д. 2	</h2>	
					</li>
				</ul>	
			</div>			
		</section>
		<!-- Rules end (Правила) -->

<?php include "footer.php" ?>