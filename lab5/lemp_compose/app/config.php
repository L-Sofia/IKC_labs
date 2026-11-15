
<?php

$servername = "db";
$username = "webuser";
$password = "webpass";
$dbname = "webdb";

// Створення підключення до MySQL
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

// Перевірка підключення
if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

?>
