<?php
  session_start();
  include('config.php');
  if (isset($_POST['registration'])) {
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $otchestvo = $_POST['otchestvo'];
    $passport = $_POST['passport'];
    $vodudost = $_POST['vodudost'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($query->rowCount() > 0) {
      echo "<script>sweet_true('error','такая почта уже зарегистрирована!');</script>";
    } if ($query->rowCount() == 0) {
      $query = $connection->prepare("INSERT INTO users(name,surname,otchestvo,email,passport,vodudost,password) VALUES (:name,:surname,:otchestvo,:email,:passport,:vodudost,:password_hash)");
      $query->bindParam(":name", $name, PDO::PARAM_STR);
      $query->bindParam(":surname", $surname, PDO::PARAM_STR);
      $query->bindParam(":otchestvo", $otchestvo, PDO::PARAM_STR);
      $query->bindParam(":passport", $passport, PDO::PARAM_STR);
      $query->bindParam(":vodudost", $vodudost, PDO::PARAM_STR);
      $query->bindParam(":password_hash", $password_hash, PDO::PARAM_STR);
      $query->bindParam(":email", $email, PDO::PARAM_STR);
      $result = $query->execute();
      if ($result) {
        echo "<script>sweet_true('sucess','Регистрация прошла успешно!');</script>";
        $query = $connection->prepare("SELECT * FROM users WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
			  $_SESSION['id_user'] = $result['id_user'];
			  $_SESSION['name'] = $result['name'];
			  $_SESSION['surname'] = $result['surname'];
			  $_SESSION['otchestvo'] = $result['otchestvo'];
			  $_SESSION['alogin'] = $result['alogin'];
			  $_SESSION['email'] = $result['email'];
        echo '<script>window.location = "index.php";</script>';
      } else {
        echo "<script>sweet_true('sucess','Неверный данные!');</script>";
      }
    }
  }
  ?>