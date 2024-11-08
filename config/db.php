<?php
// Настройки подключения к базе данных
$host = 'MariaDB-11.2';
$user = 'root';
$password = '';
$dbname = 'videos';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
?>
