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