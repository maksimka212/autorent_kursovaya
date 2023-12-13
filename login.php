<!DOCTYPE html>
<html lang="ru">
<head>

   
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="description" content="www.autorent.com">
	<meta name="author" content="Andrey Arefev">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="index-page">

	<!--Код для подключения к БД, выборка пароля и почты--->

<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
			echo "<script>sweet_true('error','Неверные почта или пароль');console.log('1');</script>";;
		  } else {
			if (password_verify($password, $result['password'])) {
			  $_SESSION['user_id'] = $result['id_user'];
			  $_SESSION['name'] = $result['name'];
			  $_SESSION['alogin'] = $result['alogin'];
			  $_SESSION['email'] = $result['email'];
			  switch ($_SESSION['accountlvl']) {
				case 0:
				  $redirect_url = "/accountPersonal.php";
				  break;
				case 1:
				  $redirect_url = "/alogin.php";
				  break;
				default:
				  $redirect_url = "/accountPersonal.php";
			  }
			  echo "<script>window.location =  \"$redirect_url \";</script>";
			} else {
			  echo "<script>sweet_true('error','Неверные данные!');</script>";
			}
		  }
		}
?>

<!---Верстка формы логина--->

<div class="wrap-body">
		<div id="cssmenu" >
			<ul>
	  			<li><a href="index.php"><span>Autorent</span></a></li>
	   			<li><a href="single.php"><span>About</span></a></li>
	   			<li class="last"><a href="contact.php"><span>Contact</span></a></li>
			</ul>
		</div>
<header id="header">
	<div class="wrap-header" >
		<div class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="hero-heading">
						<span>Login</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<form method="post">
						<label class="transparent-input-label" for="transparentInput">Введите почту:</label>
						<input type="text" id="transparentInput" class="transparent-input" name="email" required>
						<label class="transparent-input-label" for="transparentInput">Введите пароль:</label>
						<input type="password" id="transparentInput" class="transparent-input" name="password" required>
						<button type="submit" class="login-button" name="login" value="login">Войти</button>
					</from>
				    <p></p>
					<a href="registration.php"><span class="login-reg">Зарегистрироваться</span></a>
				</div>
			</div>
		</div>
	</div>
</header>

<!---Верстка подвала сайта--->

<footer>
		<div class="waves">
			<div class="wave" id="wave1"></div>
		</div>
		<ul class="social">
			<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-linkedin"><ion-icon></a></li>
			<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
		</ul>
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Team</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
		<p>©2023 AutoRent | All Rights Reserved</p>
	</footer>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

