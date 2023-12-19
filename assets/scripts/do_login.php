<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
			echo "<script>sweet_true('error','Неверные почта или пароль');console.log('1');</script>";;
		  } else {
			if (password_verify($password, $result['password'])) {
			  $_SESSION['id_user'] = $result['id_user'];
			  $_SESSION['name'] = $result['name'];
			  $_SESSION['surname'] = $result['surname'];
			  $_SESSION['otchestvo'] = $result['otchestvo'];
			  $_SESSION['alogin'] = $result['alogin'];
			  $_SESSION['email'] = $result['email'];
			  switch ($_SESSION['alogin']) {
				case 0:
				  $redirect_url = "/accountPersonal.php";
				  break;
				case 1:
				  $redirect_url = "/index.php";
				  break;
				default:
				  $redirect_url = "/accountPersonal.php";
			  }
			  echo "<script>window.location =  \"$redirect_url \";</script>";
			} else {
			  echo "<script>sweet_true('error','Неверные данные!');</script>";
			}
		  }
		}
?>