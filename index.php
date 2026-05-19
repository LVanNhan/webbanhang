<?php

require_once 'app/config/database.php';
require_once 'app/models/ProductModel.php';


// Lấy URL
$url = $_GET['url'] ?? '';

$url = rtrim($url, '/');

$url = filter_var($url, FILTER_SANITIZE_URL);

$url = explode('/', $url);


// Xác định Controller
$controllerName =
    isset($url[0]) && $url[0] != ''
    ? ucfirst($url[0]) . 'Controller'
    : 'DefaultController';


// Xác định Action
$action =
    isset($url[1]) && $url[1] != ''
    ? $url[1]
    : 'index';


// Kiểm tra Controller tồn tại
$controllerFile =
    'app/controllers/' . $controllerName . '.php';


if (!file_exists($controllerFile))
{
    die('Controller not found');
}


// Require Controller
require_once $controllerFile;


// Khởi tạo Controller
$controller = new $controllerName();


// Kiểm tra Action
if (!method_exists($controller, $action))
{
    die('Action not found');
}


// Gọi Action + parameter
call_user_func_array(
    [$controller, $action],
    array_slice($url, 2)
);