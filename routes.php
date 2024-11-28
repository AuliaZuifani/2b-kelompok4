<?php
// routes.php

require_once 'app/controllers/LoansController.php';
require_once 'app/controllers/HomeController.php';

$LoansController = new LoanController();
$HomeController = new HomeController();
$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/home' || $url == '/') {
    new HomeController();
}elseif ($url == '/loans/index' || $url == '/') {
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
