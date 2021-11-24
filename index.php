<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

// include autoload for loading classes
include_once("includes/autoloader.php");

$request = $_SERVER['REQUEST_URI'];
$url = parse_url($request);

// my router
switch ($url["path"]) {
    case '/mvc.local/':
        require __DIR__ . '/views/index.php';
        break;
    case '/mvc.local' :
        require __DIR__ . '/views/index.php';
        break;
    case '/mvc.local/getuser' :
        require __DIR__ . '/views/user.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}