<?php

       
        $dbHost = 'localhost';
        $dbName = 'autorent';
        $dbUser = 'root';
        $dbPass = '';

        $connection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);


// Создание тестовой записи в базе данных
$name = 'TestUser';
$surname = 'TestUser';
$otchestvo = 'TestUser';
$email = 'test@example.com';
$passport = '1234567890';
$vodudost = '1234567890';
$password = 'testpassword';
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$query = $connection->prepare("INSERT INTO users (name, surname, otchestvo, email, passport, vodudost, password) VALUES (:name, :surname, :otchestvo, :email, :passport, :vodudost, :password)");
$query->bindParam(":name", $name, PDO::PARAM_STR);
$query->bindParam(":surname", $surname, PDO::PARAM_STR);
$query->bindParam(":otchestvo", $otchestvo, PDO::PARAM_STR);
$query->bindParam(":email", $email, PDO::PARAM_STR);
$query->bindParam(":passport", $passport, PDO::PARAM_STR);
$query->bindParam(":vodudost", $vodudost, PDO::PARAM_STR);
$query->bindParam(":password", $passwordHash, PDO::PARAM_STR);
$query->execute();

// Выполнение регистрации с тестовыми данными
$_POST['name'] = $name;
$_POST['surname'] = $surname;
$_POST['otchestvo'] = $otchestvo;
$_POST['email'] = $email;
$_POST['passport'] = $passport;
$_POST['vodudost'] = $vodudost;
$_POST['password'] = $password;

ob_start();
include('registration.php'); 
ob_end_clean();

// Проверка успешной регистрации
$registrationOutput = ob_get_contents();
if (strpos($registrationOutput, 'Регистрация прошла успешно!') == false) {
    echo 'Тест успешно пройден! Регистрация прошла успешно.';
} else {
    echo 'Тест провален! Регистрация не удалась.';
}

// Проверка создания пользователя в базе данных
$query = $connection->prepare("SELECT * FROM users WHERE email=:email");
$query->bindParam(":email", $email, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result && $result['name'] == $name && $result['email'] == $email) {
    echo 'Тест успешно пройден! Пользователь успешно создан в базе данных.';
} else {
    echo 'Тест провален! Пользователь не найден или данные не соответствуют ожидаемым.';
}

// Очистка тестовых данных из базы данных
$query = $connection->prepare("DELETE FROM users WHERE email=:email");
$query->bindParam(":email", $email, PDO::PARAM_STR);
$query->execute();
