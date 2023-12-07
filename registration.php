<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>

   
	<meta charset="utf-8">
	<title>Autorent</title>
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
<div class="wrap-body">



<div id="cssmenu" >
	<ul>
	  <li><a href="index.php"><span>Autorent</span></a></li>
	   <li><a href="single.php"><span>About</span></a></li>
	   <li class="last"><a href="contact.php"><span>Contact</span></a></li>
       <li><a href="login.php"><span>Login</span></a></li>
	</ul>
</div>
<header id="header">
    
	<div class="wrap-header" >
		<div class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="hero-heading">
						<span>Registration</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<p></p>
                    <span class="transparent-input-label" for="transparentInput">Логин:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="20" required>
                    <span class="transparent-input-label" for="transparentInput">Ваше фамилия:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="20" required>
                    <span class="transparent-input-label" for="transparentInput">Ваше имя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="20" required>
                    <span class="transparent-input-label" for="transparentInput">Введите отчество:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="20" required>
                    <span class="transparent-input-label" for="transparentInput" >Серия и номер паспорта:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="10" required>
                    <span class="transparent-input-label" for="transparentInput">Номер водительского удостоверения:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="10" required>
                    <span class="transparent-input-label" for="transparentInput">Возраст:</span>
                    <input type="text" id="transparentInput" class="transparent-input" maxlength="3" required>
                    <span class="transparent-input-label" for="transparentInput">Введите пароль:</span>
                    <input type="password" id="transparentInput" class="transparent-input" maxlength="20" required>
                    <p></p>
                    <button type="submit" class="login-button">Зарегистрироваться</button>
						<p></p>
						<a href="registration.html"><span class="login-join">Войти</span></a>
				</div>
			</div>
		</div>
        
	</div>
</header>
<?php
  session_start();
  include('config.php');
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['register-mail'];
    $password = $_POST['register-password'];
    $passworddouble = $_POST['register-password-double'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT email, phone FROM users WHERE email=:email OR phone=:phone");
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":phone", $phone, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result['email'] == $email) {
      echo "<script>sweet_true('error','такая почта уже зарегистрирована!');</script>";
    
    } else if ($result['phone'] == $phone) {
      echo "<script>sweet_true('error','Пользователь с таким телефоном уже есть!');console.log('1');</script>";
    } else {
      $query = $connection->prepare("INSERT INTO users(username,password,email,phone) VALUES (:username,:password_hash,:email,:phone)");
      $query->bindParam(":phone", $phone, PDO::PARAM_STR);
      $query->bindParam(":username", $username, PDO::PARAM_STR);
      $query->bindParam(":password_hash", $password_hash, PDO::PARAM_STR);
      $query->bindParam(":email", $email, PDO::PARAM_STR);
      $result = $query->execute();
      if ($result) {
        echo "<script>sweet_true('sucess','Регистрация прошла успешно!');</script>";
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $result['id_user'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['accountlvl'] = $result['accountlvl'];
        $_SESSION['phone'] = $result['phone'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['timeonline_users'] = $result['timeonline_users'];
        echo '<script>window.location = "index.php";</script>';
      } else {
        echo '<p class="error">Неверные данные!</p>';
      }
    }
  }
  ?>
</body>