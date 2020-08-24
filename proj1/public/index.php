<?php

require __DIR__ . '/../vendor/autoload.php';

use Ramont\Controller\PageController;

$url = substr($_SERVER['REQUEST_URI'],1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
$action = isset($url[1]) && $url[1] ? $url[1] : 'index';
$param = isset($url[2]) && $url[2] ? $url[2] : null;


#$controller = "Ramont\Controller\\" . ucfirst($controller) . 'Controller';
if(!class_exists($controller = "Ramont\Controller\\" . ucfirst($controller) . 'Controller')){
    die("<h1>404 - Not Found</h1>");
}

if(!method_exists($controller, $action)){
    $action = 'index';
    $param  = $url[1];
}

$response = call_user_func_array([$controller, $action], []);

print $response;