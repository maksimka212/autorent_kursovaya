<?php
session_start();
?>
<?php
	require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  
	<meta charset="utf-8">
	<title>Autorent</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="sub-page">
<div class="wrap-body">


<div id="cssmenu" >
	<ul>
	   <li><a href="index.php"><span>Autorent</span></a></li>
	   <li class="active"><a href="single.php"><span>About</span></a></li>
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

<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="single.html">About</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<div class="entry-title"> 
									<h2>Autorent</h2>
								</div>
								
							</div>
							<div class="art-content">
								<div class="container_slider_css">
  <img class="photo_slider_css" src="images/about.jpg" alt="">
  <img class="photo_slider_css" src="images/6.jpg" alt="">
  <img class="photo_slider_css" src="images/9.jpg" alt="">
  <img class="photo_slider_css" src="images/3.jpg" alt="">
</div>




								<div class="excerpt"><p>ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p></div>
								<p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
								<blockquote><p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p></blockquote>
								
								<h2>Atorent</h2><p>ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>

								<p>ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
																
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>


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
	
</div>
</body></html>