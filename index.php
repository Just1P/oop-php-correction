<?php

require_once('./controller/indexController.php');

// Récupère l'url actuelle et supprime le chemin de base
// c'est à dire : http://localhost:8888/oop-php-correction/
// donc cela ne garde que la fin de l'url

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/oop-php-correction/', '', $uri);
$endUri = trim($endUri, '/');


if($endUri === "") {

    $indexController = new IndexController();
    $indexController->index();
    return;
}

if($endUri === "create-order") {

    $createOrderController = new CreateOrderController();
    $createOrderController->createOrder();
    return;
} 

if($endUri === "pay") {

    $payController = new $payController();
    $payController->pay();
    return;
} 