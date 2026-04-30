<?php
// db.php - подключение к PostgreSQL

// Читаем настройки (потом заменим на нормальные)
$host = 'localhost';
$port = '5432';
$dbname = 'mydb';
$user = 'postgres';
$password = '12345';  // В РЕАЛЬНОМ ПРОЕКТЕ НЕ ПИШИ ПАРОЛЬ В КОДЕ!

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Не выводим "Подключено" на реальном сайте
} catch (PDOException $e) {
    die("Ошибка базы данных");  // Не показываем детали пользователю
}
