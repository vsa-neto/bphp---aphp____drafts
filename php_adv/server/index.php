
<?php

// $pdo = new PDO("sqlite:my/database/path/database.db");

// try { $pdo = new PDO($attr, $user, $pass, $opts); }
// catch (PDOException $e)
// {
//     throw new PDOException($e->getMessage(), (int)$e->getCode());
// };

$host = 'localhost'; 
$db   = 'my_database'; 
$db   = 'lekon_db'; 
$user = 'root'; // По умолчанию в Open Server
$pass = ''; // По умолчанию пустой или root
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Подключение успешно!<br>";

     $sql = "CREATE DATABASE my_db";
     $pdo->exec($sql);
     echo "База данных 'my_db' успешно создана";


} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



// $servername = "localhost";
// $username = "root"; // Имя пользователя по умолчанию
// $password = "";     // Пароль по умолчанию (пустой)

// try {
//     // Подключение к серверу MySQL без выбора базы
//     $conn = new PDO("mysql:host=$servername", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // SQL-запрос на создание базы данных
//     $sql = "CREATE DATABASE my_new_db";
//     $conn->exec($sql);
//     echo "База данных успешно создана";
// } catch(PDOException $e) {
//     echo "Ошибка: " . $e->getMessage();
// }
// $conn = null;


