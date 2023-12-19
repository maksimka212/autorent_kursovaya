<?php
session_start();
if (!$_SESSION['id_user'])
    header('location: login.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>

   
	<meta charset="utf-8">
	<title><? echo $_SESSION['name']?></title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
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
			
				<form action="" method="post">
					<span class="personal-data">Личные данные</span>
					<div class="user-info">
					<p id="name_redact_profil"><?= $_SESSION['name'] ?></p>
					</div>
					<div class="user-info">
					<p id="surname_redact_profil"><?= $_SESSION['surname'] ?></p>
					</div>
					<div class="user-info">
					<p id="otchestvo_redact_profil"><?= $_SESSION['otchestvo'] ?></p>
					</div>
					<div class="user-info">
					<p id="email_redact_profil"><?= $_SESSION['email'] ?></p>
					</div>
					<div class="div_redact_profil">
					<button id="redact_profil" onclick="replace();" class="redact-button">Редактировать</button>
					</div>
				</form>
			</div>
			<div class="container-right">	
			<span class="personal-data">Мои заказы</span>
			<form action="" method="post">
			<div class="contracts">
            <div class="list-contract"></div>
			</div>
			</form>
			</div>

		</div>
		</div>
	</section>
	<script type="text/javascript" src="js/JsBarcode.all.min.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
    <script>
        JsBarcode(".barcode").init();
    </script>

</header>
</body>