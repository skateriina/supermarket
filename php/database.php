<?php
// Установите параметры подключения к вашей базе данных MySQL
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'supermarket';

// Установка соединения с базой данных
$connection = mysqli_connect($hostname, $username, $password, $database);

// Проверка соединения на ошибки
if (mysqli_connect_errno()) {
    die('Ошибка подключения к базе данных: ' . mysqli_connect_error());
}
?>