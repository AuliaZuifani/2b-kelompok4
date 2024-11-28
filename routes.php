<?php
// routes.php

require_once 'app/controllers/BooksController.php';
<<<<<<< HEAD
require_once 'app/controllers/UsersController.php';
require_once 'app/controllers/publiserController.php';
require_once 'app/controllers/LoansController.php';

$bookcontroller = new BooksController();
$Usercontroller = new UsersController();
$publisercontroller = new PubliserController();
$LoansController = new LoanController();
=======
require_once 'app/controllers/HomeController.php';
//books controller
$bookcontroller = new BooksController();
$Homecontroller = new HomeController();

>>>>>>> books

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
} 

elseif($url == '/users/index' || $url == '/') {
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
}

elseif ($url == '/publiser/index' || $url == '/') {
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
}

elseif ($url == '/loans/index' || $url == '/') {
    $LoansController->index();
} elseif ($url == '/loans/create' && $requestMethod == 'GET') {
    $LoansController->create();
} elseif ($url == '/loans/store' && $requestMethod == 'POST') {
    $LoansController->store();
} elseif (preg_match('/\/loans\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $loanId = $matches[1];
    $LoansController->edit($loanId);
} elseif (preg_match('/\/loans\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $loanId = $matches[1];
    $LoansController->update($loanId, $_POST);
} elseif (preg_match('/\/loans\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $loanId = $matches[1];
    $LoansController->delete($LoanId);
} else {
    http_response_code(404);
    echo "404 Not Found";
}
