<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru"> 
 
	<meta charset="utf-8">
	<title>Аренда</title>
	<meta name="description">
	<meta name="author">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
  	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.js"></script>
	<script src="js/script.js"></script>

</head>
<body class="index-page">

  <script src="assets/sweetalert2.all.min.js"></script>
<script>
    function sweet_true(sw_icon, sw_title) {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
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

<?php include('assets/scripts/datapicker.php')?>
   
<div class="wrap-body">
<div id="cssmenu" >
	<ul>
	  <li><a href="index.php"><span>Autorent</span></a></li>
	   <li><a href="single.php"><span>О нас</span></a></li>
	   <li class="last"><a href="contact.php"><span>Контакт</span></a></li>
     <li>
	   		<?php 
	  		 if (!isset($_SESSION['id_user'])) {
		   	 echo '<a href="login.php"><span>Login</span></a>';
			 } else {
			 echo '<a href="accountPersonal.php"><span>Личный кабинет</span></a>';
			 }
		     ?>
		</li>
	</ul>
</div>
<?php include('assets/scripts/do_rent.php') ?>
<header id="header">
	<div class="wrap-header" >
		<div class="main-header">
			<div class="zerogrid">
				<div class="row">
					<div class="hero-heading">
						<span>Аренда</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<p></p>
					
          		<form method="post" action="">
                    <span class="transparent-input-label" for="transparentInput">Автомобиль:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="model_auto" value="<?php echo $_GET['brend']; ?>&ensp;<?php echo $_GET['model']; ?>" disabled>
					<span class="transparent-input-label" for="transparentInput">Сумма аренды:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="summa" value="<?php echo $_GET['cena']; ?>" disabled>
                    <span class="transparent-input-label" for="transparentInput">Дата аренды:</span><br>
                    <input type="date" id="txt-appoint_date_from" class="transparent-inputDate" name="date_from" required>
                    <input type="date" id="txt-appoint_date_before" class="transparent-inputDate" name="date_before" required><br>
                    <button type="submit" class="login-button" name="rent" value="rent">Арендовать</button>
					<p><a href="index.php"><span class="login-reg">Назад</span></a></p>
           		</form>
				</div>
			</div>
		</div>
		
	</div>
</header>
</body>