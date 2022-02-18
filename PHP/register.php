<?php
require_once '../PHP/config.php';
$email = $_POST['register_email'];
$password = $_POST['register_password'];
$sql = "INSERT INTO auth(email, password, role_id) VALUES ('$email','$password',2)";

if ($conn->query($sql) === TRUE) {
    echo '<script > sessionStorage.setItem("db_status","200");history.back();</script>';
} else {
    echo '<script > sessionStorage.setItem("db_status","400");history.back();</script>';
}

$conn->close();
