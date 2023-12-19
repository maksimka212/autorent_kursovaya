<?php
session_start();
?>
<?php
	require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>

   
  
	<meta charset="utf-8">
	<title>Контакт</title>
	<meta name="description">
	<meta name="author">
	<meta name="viewport">
 
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="sub-page">
<div class="wrap-body">


<div id="cssmenu" >
	<ul>
	   <li><a href="index.php"><span>Autorent</span></a></li>
	   <li><a href="single.php"><span>О нас</span></a></li>
	   <li class="active"><a href="contact.php"><span>Контакт</span></a></li>
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

<?php include('assets/header.php')?>

<?php include('assets/contactOne.php')?>


	
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	<script>
	$(document).ready(function(){
		$(window).resize(function(){
			var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
			if (width >= '768') { 
				var footerHeight = $('#footer').outerHeight();
				$('#container').css({'marginBottom': footerHeight + 'px'});
			}else{
				$('#container').css({'marginBottom': '0px'});
			}
		});
		$(window).resize();
	});
    </script>
	
	<script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/form-scripts.js"></script>
	
</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body></html>