<?php
session_start();
?>
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

<?php include('assets/scripts/do_login.php') ?>

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


	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

