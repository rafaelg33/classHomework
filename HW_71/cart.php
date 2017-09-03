<?php
class Cart {
    public function __construct() {
        session_start();
        
        if(empty($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addItem($name, $amount) {
        if(!empty($_SESSION['cart'][$name])) {
            $amount += $_SESSION['cart'][$name];
        }
        $_SESSION['cart'][$name] = $amount;
    }

    public function getItems() {
        return $_SESSION['cart'];
    }
}

$cart = new Cart();
if($_POST){
   $cart->addItem($_POST['name'],$_POST['amount']);

}

echo "<br>";




?>
