<?php
session_start();
if (!$_SESSION['id_user'])
    header('location: login.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>

   
	<meta charset="utf-8">
	<title>Autorent</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
  	<link rel="stylesheet" href="css/zerogridlist.css">
	  <link rel="stylesheet" href="css/stylelist.css">
	  <link rel="stylesheet" href="css/menulist.css">
	  <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
	<link rel="stylesheet" href="css/okno.css">
	<link rel="stylesheet" href="css/cardslist.css">

	
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	
</head>
<body class="index-page">
	
	<section>
		<div id="cssmenu" >
			<ul>
			  <li><a href="index.php"><span>Autorent</span></a></li>
			   <li><a href="single.php"><span>About</span></a></li>
			   <li class="last"><a href="contact.php"><span>Contact</span></a></li>
			   <li><a href="session-destroy.php"><span>Выйти</span></a></li>
			</ul>
		</div>
	</section>

	<section>
		<div class="main-header">
		<div class="body-container">
			<div class="container-left-menu">
				<span class="personal-data">Личные данные</span>
				<form method="post">
				<button type="submit" class="redact-button" name="redactor">Редактировать</button>
				</form>
			</div>
			<div class="container-right">
				<span class="personal-data-auto">Мои заказы</span>
			</div>

		</div>
		</div>
	</section>






</header>
</body>