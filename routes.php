<?php
// routes.php


require_once 'app/controllers/UsersController.php';


$Usercontroller = new UsersController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$Usercontroller = new UsersController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if($url == '/users/index' || $url == '/') {
    $Usercontroller->index();
} elseif ($url == '/users/create' && $requestMethod == 'GET') {
    $Usercontroller->create();
} elseif ($url == '/users/store' && $requestMethod == 'POST') {
    $Usercontroller->store();
} elseif (preg_match('/\/users\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $Usercontroller->edit($userId);
} elseif (preg_match('/\/users\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $Usercontroller->update($userId, $_POST);
} elseif (preg_match('/\/users\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $Usercontroller->delete($userId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}