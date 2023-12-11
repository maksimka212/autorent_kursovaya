<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

   
	<meta charset="utf-8">
	<title>Auorent</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    
	
    
	
	
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/login.css">
	
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="index-page">
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
            echo '<p class="error">Неверные пароль или почта!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['id_user'] = $result['id'];
                echo '<p class="success">Поздравляем, вы прошли авторизацию!</p>';
            } else {
                echo '<p class="error"> Неверные пароль или почта!</p>';
            }
        }
    }
?>
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
		<!---Main Header--->
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
					<label class="transparent-input-label" for="transparentInput">Введите почту:</label>
					<input type="text" id="transparentInput" class="transparent-input" name="email" required>
					<label class="transparent-input-label" for="transparentInput">Введите пароль:</label>
					<input type="password" id="transparentInput" class="transparent-input" name="password" required>
					<button class="login-button"><a class="login-done" href="single.html" name="login" value="login"><span>Войти</span></button>
				    <p></p>
					<a href="registration.php"><span class="login-reg">Зарегистрироваться</span></a>
				</div>
			</div>
		</div>
	</div>
</header>
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

