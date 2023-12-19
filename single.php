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
	<title>О нас</title>
	<meta name="description">
	<meta name="author">

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
	   <li class="active"><a href="single.php"><span>О нас</span></a></li>
	   <li class="last"><a href="contact.php"><span>Контакты</span></a></li>
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
						<li><a href="index.php">Главная</a></li>
						<li><a href="single.php">Контакты</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="wrap-content">
						<article>
							<div class="art-header">
								<div class="entry-title"> 
									<h2>Объединяем машины и людей</h2>
								</div>
								
							</div>
							<div class="art-content">
								<div class="container_slider_css">
  <img class="photo_slider_css" src="images/6.jpg" alt="">
  <img class="photo_slider_css" src="images/9.jpg" alt="">
  <img class="photo_slider_css" src="images/3.jpg" alt="">
</div>




								<h2>История нашей компании</h2>
								<p>Компания была основана в 2018 году из личной транспортной задачи основателей, решить которую удалось лишь найдя машину у знакомых чьих-то знакомых.</p>
								<blockquote><p>За 5 лет работы, выявляя потребности пользователей и расширяя под них ассортимент, AutoRent стал маркетплейсом по аренде авто, предлагая пользователям, единожды зарегистрировавшись, всегда иметь качественный сервис и удобный интерфейс для самых разных кейсов.</p></blockquote>
								
								<blockquote><h2 >К чему мы стремимся?</h2><p>Автомобильная индустрия стоит на пороге самых значимых перемен с 1913 года. Что ее ждет и где окажется AutoRent</p></blockquote>

								<p>Массовое внедрение беспилотников и новых форм владения авто сотрет грань между сервисами, требущих от пользователя управлять авто и подразумевающих наличие водителя.</p>
																
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</section>
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