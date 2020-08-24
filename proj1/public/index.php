<?php

require __DIR__ . '/../vendor/autoload.php';

use Ramont\Controller\PageController;

$url = substr($_SERVER['REQUEST_URI'],1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
$action = isset($url[1]) && $url[1] ? $url[1] : 'index';

$controller = "Ramont\Controller\\" . ucfirst($controller) . 'Controller';

#print $controller;

$response = call_user_func_array([$controller, $action], []);

//$execute = new $controller();
//$execute = new PageController();
//print $execute->index();

print $response;