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
<div class="wrap-body">



<div id="cssmenu" >
	<ul>
	  <li><a href="index.php"><span>Autorent</span></a></li>
	   <li><a href="single.php"><span>О нас</span></a></li>
	   <li class="last"><a href="contact.php"><span>Контакт</span></a></li>
	</ul>
</div>
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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
          <form method="post" action="">

                    <span class="transparent-input-label" for="transparentInput">Автомобиль:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="auto" disabled>
                    <span class="transparent-input-label" for="transparentInput">Дата аренды:</span><br>
                    <input type="date" id="transparentInput" class="transparent-inputDate" name="date_ot">
                    <input type="date" id="transparentInput" class="transparent-inputDate" name="date_do"><br>
                    <span class="transparent-input-label" for="transparentInput">Cумма аренды:</span>
                    <input type="text" id="transparentInput" class="transparent-input" name="summa" disabled>
                    
                    <p></p>
                    <button type="submit" class="login-button" name="rent" value="rent">Арендовать</button>
						<p></p>
           </form>
            
				</div>
			</div>
		</div>
        
	</div>
</header>
</body>