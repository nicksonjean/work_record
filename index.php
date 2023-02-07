<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$_SESSION['BASE_DIR'] = __DIR__ . DIRECTORY_SEPARATOR;
$_SESSION['BASE_WEB'] = preg_replace('/[^\/]+\.php(\?.*)?$/i', '', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
include_once $_SESSION['BASE_DIR'] . 'interface/index.php';
