<?php
session_start();
include('config.php');
  if (isset($_POST['rent'])){
	$id_auto = $_GET['id_auto'];
	$id_user = $_SESSION['id_user'];
	$date_from = $_POST['date_from'];
	$date_before = $_POST['date_before'];
	$summa = $_GET['cena'];
	$query = $connection->prepare("INSERT INTO contract(date_from,date_before,id_auto, id_user,summa) VALUES (:date_from,:date_before,:id_auto,:id_user,:summa)");
    $query->bindParam(":date_from", $date_from, PDO::PARAM_STR);
    $query->bindParam(":date_before", $date_before, PDO::PARAM_STR);
	$query->bindParam(":id_auto", $id_auto, PDO::PARAM_STR);
	$query->bindParam(":id_user", $id_user, PDO::PARAM_STR);
    $query->bindParam(":summa", $summa, PDO::PARAM_STR);
	$result = $query->execute();
      if ($result) {
        echo "<script>sweet_true('sucess','Поздравляем с арендой автомобиля!');</script>";
      } else {
        echo "<script>sweet_true('sucess','Что то пошло не так');</script>";
      }
  }
?>