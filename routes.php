<?php
// routes.php

require_once 'app/controllers/BooksController.php';
require_once 'app/controllers/HomeController.php';
//books controller
$bookcontroller = new BooksController();
$Homecontroller = new HomeController();


$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];


if ($url == '/home' || $url == '/') {
    new HomeController();

}elseif ($url == '/books/index' || $url == '/') {
    $bookcontroller->index();
} elseif ($url == '/books/create' && $requestMethod == 'GET') {
    $bookcontroller->create();
} elseif ($url == '/books/store' && $requestMethod == 'POST') {
    $bookcontroller->store();
} elseif (preg_match('/\/books\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $bookcontroller->edit($bookId);
} elseif (preg_match('/\/books\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $bookId = $matches[1];
    $bookcontroller->update($bookId, $_POST);
} elseif (preg_match('/\/books\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $bookId = $matches[1];
    $bookcontroller->delete($bookId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}