<?php
session_start();
require_once '../PHP/config.php';
$cart = json_decode($_POST['cart_order_list']);
$order_tot_price = 0;
$user_id = $_SESSION['login']['user_id'];
$payment = $_POST['rb_payment'];

foreach ($cart as $key) {
    $order_tot_price += ($key->tot_price);
}

$payment = $_POST['rb_payment'];
$sql = "INSERT INTO orders(date, status, total_price, payment_id, user_id) VALUES (SYSDATE(),0,$order_tot_price,$payment,$user_id)";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

    foreach ($cart as $key) {
        $sql = "INSERT INTO order_product(order_id, product_id, size, quantity) VALUES ($last_id,$key->id,'$key->size',$key->quantity)";
        if ($conn->query($sql) === TRUE)
            echo '<script > sessionStorage.setItem("db_status","200");history.back();</script>';
        else
            echo '<script > sessionStorage.setItem("db_status","400");history.back();</script>';
    }
} else {
    echo '<script > sessionStorage.setItem("db_status","400");history.back();</script>';
}

$conn->close();
