<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once $_SESSION['BASE_DIR'] . 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($_SESSION['BASE_DIR']);
$dotenv->load();

$month = (!isset($_GET['month']) ? date('m') : $_GET['month']);
$year = (!isset($_GET['year']) ? date('Y') : $_GET['year']);
$lang = (!isset($_GET['lang']) ? $_ENV['DEFAULT_LANG'] : $_GET['lang']);

$i18n = new i18n($_SESSION['BASE_DIR'] . 'lang/lang_{LANGUAGE}.json', 'langcache', $lang);
$i18n->setForcedLang($lang);
$i18n->init();

$connection = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
if (!$connection) {
    die('Connection Failed' . mysqli_connect_error());
}
