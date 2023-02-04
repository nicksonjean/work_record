<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once $_SESSION['BASE_DIR'] . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SESSION['BASE_DIR']);
$dotenv->load();
$connection = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
if (!$connection) {
    die('Connection Failed' . mysqli_connect_error());
}
