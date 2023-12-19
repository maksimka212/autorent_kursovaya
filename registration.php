<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>

   
	<meta charset="utf-8">
	<title>Регистрация</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    
	
    
	
	
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
  	<link rel="stylesheet" href="css/zerogridlist.css">
	  <link rel="stylesheet" href="css/stylelist.css">
	  <link rel="stylesheet" href="css/menulist.css">
	  <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
	
	
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="index-page">

<?php include('assets/scripts/do_registr.php') ?>

  <script src="js/sweetalert2.all.min.js"></script>
<script>
    function sweet_true(sw_icon, sw_title) {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: sw_icon,
        title: sw_title
      })
    }
</script>
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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <form method="post" action="">
                    <span class="transparent-input-label" for="transparentInput">Почта:</span>
                    <input type="text" id="transparentInput" class="transparent-input" placeholder="nameemail@gmail.com" name="email" maxlength="255" required>
                    <span class="transparent-input-label" for="transparentInput">Ваше фамилия:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="surname" placeholder="Иванов" maxlength="100" required>
                    <span class="transparent-input-label" for="transparentInput">Ваше имя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="name" placeholder="Иван" maxlength="100" required>
                    <span class="transparent-input-label" for="transparentInput">Введите отчество:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="otchestvo" placeholder="Иванович" maxlength="100" required>
                    <span class="transparent-input-label" for="transparentInput">Серия и номер паспорта:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="passport" placeholder="____ ______" maxlength="11" required>
                    <span class="transparent-input-label" for="transparentInput">Номер водительского удостоверения:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="vodudost" placeholder="__ __ ____" maxlength="10" required>
                    <span class="transparent-input-label" for="transparentInput">Введите пароль:</span>
                    <input type="password" id="transparentInput" class="transparent-input" name="password" placeholder="*********" maxlength="45" required>
                    <p></p>
                    <button type="submit" class="login-button" name="registration" value="registration">Зарегистрироваться</button>
						<p></p>
           </form>
						<a href="login.php"><span class="login-join">Войти</span></a>
            
				</div>
			</div>
		</div>
        
	</div>
</header>
</body>