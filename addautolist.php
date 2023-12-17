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
	<title>Добавление</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
  <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="css/sweetalert2.min.css">
	<link rel="stylesheet" href="css/zerogridlist.css">
	<link rel="stylesheet" href="css/stylelist.css">
	<link rel="stylesheet" href="css/menulist.css">
	<link rel="stylesheet" href="css/loginstyle.css">
  <link rel="stylesheet" href="css/sweetalert2.min.css">
  <link rel="stylesheet" href="css/okno.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	
    
</head>
<body class="index-page">




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

          <?php
  session_start();
  include('config.php');
  if (isset($_POST['add_auto'])) {
    $brends = $_POST['brends'];
    $models = $_POST['models'];
    $fuels = $_POST['fuels'];
    $transmissions = $_POST['transmissions'];
    $kuzovs = $_POST['kuzovs'];
    $all_class = $_POST['all_class'];
    $colors = $_POST['colors'];
    $numb_engine = $_POST['numb_engine'];
    $cena = $_POST['cena'];
    $engine = $_POST['engine'];
    $image = $_POST['image'];
    $query = $connection->prepare("SELECT * FROM autopark WHERE numb_engine=:numb_engine");
    $query->bindParam(":numb_engine", $numb_engine, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($query->rowCount() > 0) {
      echo "<script>sweet_true('error','Такой автомобиль уже имеется!');</script>";
    } if ($query->rowCount() == 0) {
      $query = $connection->prepare("INSERT INTO autopark(id_brend,id_model,id_class,id_kuzov,id_fuel,id_trans,engine,numb_engine,cena,id_color,image) VALUES (:brends,:models,:all_class,:kuzovs,:fuels,:transmissions,:engine,:numb_engine,:cena,:colors,:image)");
      $query->bindParam(":brends", $brends, PDO::PARAM_STR);
      $query->bindParam(":models", $models, PDO::PARAM_STR);
      $query->bindParam(":all_class", $all_class, PDO::PARAM_STR);
      $query->bindParam(":kuzovs", $kuzovs, PDO::PARAM_STR);
      $query->bindParam(":fuels", $fuels, PDO::PARAM_STR);
      $query->bindParam(":transmissions", $transmissions, PDO::PARAM_STR);
      $query->bindParam(":engine", $engine, PDO::PARAM_STR);
      $query->bindParam(":numb_engine", $numb_engine, PDO::PARAM_STR);
      $query->bindParam(":cena", $cena, PDO::PARAM_STR);
      $query->bindParam(":colors", $colors, PDO::PARAM_STR);
      $query->bindParam(":image", $image, PDO::PARAM_STR);
      $result = $query->execute();
      if ($result) {
        echo "<script>sweet_true('sucess','Автомобиль успешно добавлен в базу!');</script>";
      } else {
        echo "<script>sweet_true('sucess','Неверные данные!');</script>";
      }
    }
  }
  ?>
          
          <form method="post" action="">
           
                    <span class="transparent-input-label" for="transparentInput">Марка:</span>
                    <select class="select-car" name="brends">
                    <?php
                    $brends = $connection->prepare('SELECT * FROM brends');
                    $brends->execute();
                    $brends = $brends->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($brends); $i++){
                      echo '<option value="'. $brends[$i]['id_brend'] .'">'. $brends[$i]['brend'] .'</option>';
                    }
                    ?>
                    </select>
                    <span class="transparent-input-label" for="transparentInput">Модель:</span>
                    <select class="select-car" name="models">
                    <?php
                    $models = $connection->prepare('SELECT * FROM models');
                    $models->execute();
                    $models = $models->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($models); $i++){
                      echo '<option value="'. $models[$i]['id_models'] .'">'. $models[$i]['model'] .'</option>';
                    }
                    ?>
                    </select>
                    <span class="transparent-input-label" for="transparentInput">Топливо:</span>
                    <select class="select-car" name="fuels">
                    <?php
                    $fuels = $connection->prepare('SELECT * FROM fuels');
                    $fuels->execute();
                    $fuels = $fuels->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($fuels); $i++){
                      echo '<option value="'. $fuels[$i]['id_fuel'] .'">'. $fuels[$i]['fuel'] .'</option>';
                    }
                    ?>
                    </select>                   
                    <span class="transparent-input-label" for="transparentInput">Трансмиссия:</span>
                    <select class="select-car" name="transmissions">
                    <?php
                    $transmissions = $connection->prepare('SELECT * FROM transmissions');
                    $transmissions->execute();
                    $transmissions = $transmissions->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($transmissions); $i++){
                      echo '<option value="'. $transmissions[$i]['id_trans'] .'">'. $transmissions[$i]['transmission'] .'</option>';
                    }
                    ?>
                    </select>
                    <span class="transparent-input-label" for="transparentInput">Тип кузова:</span>
                    <select class="select-car" name="kuzovs">
                    <?php
                    $kuzovs = $connection->prepare('SELECT * FROM kuzovs');
                    $kuzovs->execute();
                    $kuzovs = $kuzovs->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($kuzovs); $i++){
                      echo '<option value="'. $kuzovs[$i]['id_kuzov'] .'">'. $kuzovs[$i]['kuzov'] .'</option>';
                    }
                    ?>
                    </select>              
                    <span class="transparent-input-label" for="transparentInput">Класс автомобиля:</span>
                    <select class="select-car" name="all_class">
                    <?php
                    $all_class = $connection->prepare('SELECT * FROM all_class');
                    $all_class->execute();
                    $all_class = $all_class->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($all_class); $i++){
                      echo '<option value="'. $all_class[$i]['id_class'] .'">'. $all_class[$i]['class'] .'</option>';
                    }
                    ?>
                    </select>             
                    <span class="transparent-input-label" for="transparentInput">Цвет:</span>
                    <select class="select-car" name="colors">
                    <?php
                    $colors = $connection->prepare('SELECT * FROM colors');
                    $colors->execute();
                    $colors = $colors->fetchAll(PDO::FETCH_ASSOC);
                    for ($i=0; $i < count($colors); $i++){
                      echo '<option value="'. $colors[$i]['id_color'] .'">'. $colors[$i]['color'] .'</option>';
                    }
                    ?>
                    </select>
                    <span class="transparent-input-label" for="transparentInput">Номер двигателя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="numb_engine" placeholder="1d7rt564f41d47ht3" maxlength="17">                      
                    <span class="transparent-input-label" for="transparentInput">Цена аренды в сутки:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="cena" placeholder="1000">
                    <span class="transparent-input-label" for="transparentInput">Мощность двигателя:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="engine" placeholder="120">
                    <span class="transparent-input-label" for="transparentInput">Фотография:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="image" placeholder="images/auto1.png">
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