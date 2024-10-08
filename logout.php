<?php
session_start(); // Начало сессии

// Удаляем все переменные сессии
$_SESSION = [];

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу входа или на главную страницу
header("Location: events.php");
exit();
?>
