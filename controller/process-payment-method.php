<?php

require_once '../model/Order.php'; 

session_start();

if (isset($_SESSION['order'])) {

    try {
        $order = $_SESSION['order'];

        $paymentMethod = $_POST['payment_method'];

        $order->setPaymentMethod($paymentMethod);

        $_SESSION['order'] = $order;

        require_once '../view/payment-method-added.php';

    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
        require_once '../view/order-error.php';
    }

} else {
    require_once '../view/404.php';
}
