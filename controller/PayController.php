<?php

require_once '../model/Order.php';

session_start();

class PayController {
    public function payController(): void {
        if (!isset($_SESSION['order'])) {
            require_once './view/404.php';
            return;
        }

        require_once './view/pay.php';
    }
}



