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
	<title>Autorent</title>
	<meta name="description" content="www.autorent.com">
	<meta name="author" content="Andrey Arefev">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link rel="stylesheet" href="css/cardslist.css">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/popup.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	<script src="js/up.js"></script>

</head>


<body class="index-page">
<div class="wrap-body">

	<div id="cssmenu" >
		<ul>
	  		<li><a href="index.php"><span>Autorent</span></a></li>
	   		<li><a href="single.php"><span>About</span></a></li>
	   		<li class="last"><a href="contact.php"><span>Contact</span></a></li>
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

		<?php include('assets/carousel.php')?>

        <?php include('assets/aboutRent.php')?>

        <?php include('assets/autopark.php')?>

		<?php include('assets/contactTwo.php')?>
	
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	
	<script src="owlcarousel/owl.carousel.js"></script>
	<script>
	$(document).ready(function() {
	  $("#owl-slide").owlCarousel({
		autoplay:true,
		autoplayTimeout:3000,
		loop: true,
		lazyLoad : true,
		items: 1,
		dots: true,
		stagePadding: 300,
		responsive : {
			0 : {stagePadding: 0},
			600 : {stagePadding: 100},
			900 : {stagePadding: 200},
			1199 : {}
		},
	  });
	});
	</script>
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

</body></html>