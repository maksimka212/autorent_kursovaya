<!DOCTYPE html>
<html lang="ru"> 
<head>

   
	<meta charset="utf-8">
	<title>Autorent</title>
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
<?php
  session_start();
  include('config.php');
  if (isset($_POST['add_auto'])) {
    $brend = $_POST['brend'];
    $name = $_POST['name'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $kuzov = $_POST['kuzov'];
    $engine = $_POST['engine'];
    $color = $_POST['color'];
    $cena = $_POST['cena'];
    $class = $_POST['class'];
    $numb_engine = $_POST['numb_engine'];
    $images = $_POST['image'];
    $query = $connection->prepare("SELECT * FROM autopark WHERE numb_engine=:numb_engine");
    $query->bindParam(":numb_engine", $numb_engine, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($query->rowCount() > 0) {
      echo "<script>sweet_true('error','такая почта уже зарегистрирована!');</script>";
    } if ($query->rowCount() == 0) {
      $query = $connection->prepare("INSERT INTO autopark(name,brend,fuel,engine,transmission,kuzov,color,cena,rating,image,class,numb_engine) VALUES (:name,:brend,:fuel,:engine,:transmission,:kuzov,:color,:cena,:rating,:image,:class,:numb_engine)");
      $query->bindParam(":brend", $brend, PDO::PARAM_STR);
      $query->bindParam(":name", $name, PDO::PARAM_STR);
      $query->bindParam(":fuel", $fuel, PDO::PARAM_STR);
      $query->bindParam(":transmission", $transmission, PDO::PARAM_STR);
      $query->bindParam(":kuzov", $kuzov, PDO::PARAM_STR);
      $query->bindParam(":numb_engine", $numb_engine, PDO::PARAM_STR);
      $query->bindParam(":engine", $engine, PDO::PARAM_STR);
      $query->bindParam(":color", $color, PDO::PARAM_STR);
      $query->bindParam(":cena", $cena, PDO::PARAM_STR);
      $query->bindParam(":class", $class, PDO::PARAM_STR);
      $query->bindParam(":rating", $rating, PDO::PARAM_STR);
      $query->bindParam(":image", $images, PDO::PARAM_STR);
      $result = $query->execute();
      if ($result) {
        echo '<script>window.location = "index.php";</script>';
      
      } else {
        echo '<p class="error">Неверные данные!</p>';
      }
    }
  }
  ?>
  <script src="js/sweetalert2.all.min.js"></script>
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
						<span>Автопарк</span>
						<div class="tl"></div>
						<div class="tr"></div>
						<div class="br"></div>
						<div class="bl"></div>
					</div>
					<p></p>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          
          <form method="post" action="">
                    <span class="transparent-input-label" for="transparentInput">Марка:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="brend">
                    <span class="transparent-input-label" for="transparentInput">Модель:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="name">
                    <span class="transparent-input-label" for="transparentInput">Топливо:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="fuel">
                    <span class="transparent-input-label" for="transparentInput">Трансмиссия:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="transmission">
                    <span class="transparent-input-label" for="transparentInput">Тип кузова:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="kuzov">
                    <span class="transparent-input-label" for="transparentInput">Мощность двигателя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="engine">
                    <span class="transparent-input-label" for="transparentInput">Номер двигателя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="numb_engine" maxlength="17">
                    <span class="transparent-input-label" for="transparentInput">Цвет:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="color">
                    <span class="transparent-input-label" for="transparentInput">Цена аренды в сутки:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="cena">
                    <span class="transparent-input-label" for="transparentInput">Класс автомобиля:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="class">
                    <span class="transparent-input-label" for="transparentInput">Рейтинг:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="rating">
                    <span class="transparent-input-label" for="transparentInput">Фотография:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="image">
                    <p></p>
                    <button type="submit" class="login-button" name="add_auto" value="add_auto">Добавить</button>
						<p></p>
           </form>
            
				</div>
			</div>
		</div>
        
	</div>
</header>
</body>