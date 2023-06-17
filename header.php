<?php
	$menu = '
    <li class="header__item">
      <a href="shippay.php" class="header__link">Доставка и оплата</a>
    </li>					
    <li class="header__item">
      <a href="guarantee.php" class="header__link">Гарантия</a>
    </li>					
    <li class="header__item">
      <a href="contacts.php" class="header__link">Контакты</a>
    </li>					
    <li class="header__item">
      <a href="aut.php" class="header__link">Личный кабинет</a>
    </li>
    <div class="contact">
      <li class="telephone">
        <a href="tel:+79083120707" class="header__link telephone">+7-908-312-07-07</a>
      </li>		
      <ul class="time-work">	
        <li class="header__item3">
          <a href="mailto:umiomsk55@gmail.com" class="header__link time-work">umiomsk55@gmail.com</a>
        </li>
      </ul>	
    </div>
		%s
	';

	$m = '';
	if(isset($_SESSION["role"])) {
		$m = '<li><a href="cart.php">Корзина</a></li>';
		$m .= ($_SESSION["role"] == "admin") ? '<li><a href="admin">Заказы</a></li>' : '';
		$m .= '<li><a href="controllers/logout.php">Выход</a></li>';
	} else
		$m = '

		';

	$menu = sprintf($menu, $m);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ЮМИ | Магазин Xiaomi в Омске</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>  
  
  <header class="header">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="header__logo">
          <a href="index.php" class="header__logo-link">
            <img src="./img/header_logo.png" alt="ЮМИ" class="header__logo-pic">
          </a>
        </div>
        <div class="header__capshion">
          <nav class="header__nav">					
            <ul class="header__list">
              <!-- Вставка переменной меню -->
              <?= $menu ?>
              <div class="smalcart">
                <strong>Корзина:</strong><?=$smal_cart['cart_count']?> шт.
                <br/><a href=''>Оформить</a>
              </div>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>