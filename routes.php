<?php
// routes.php

require_once 'app/controllers/publiserController.php';
require_once 'app/controllers/HomeController.php';

$publisercontroller = new PubliserController();
$Homecontroller = new HomeController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/home' || $url == '/') {
    new HomeController();

} elseif ($url == '/publiser/index' && $requestMethod == 'GET') {
    $publisercontroller->index();
} elseif ($url == '/publiser/create' && $requestMethod == 'GET') {
    $publisercontroller->create();
} elseif ($url == '/publiser/store' && $requestMethod == 'POST') {
    $publisercontroller->store();
} elseif (preg_match('/\/publiser\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $publiserId = $matches[1];
    $publisercontroller->edit($publiserId);
} elseif (preg_match('/\/publiser\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $publiserId = $matches[1];
    $publisercontroller->update($publiserId, $_POST);
} elseif (preg_match('/\/publiser\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $publiserId = $matches[1];
    $publisercontroller->delete($publiserId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}