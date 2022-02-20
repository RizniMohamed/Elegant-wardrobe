<?php
require_once '../PHP/config.php';
$email = $_POST['register_email'];
$password = $_POST['register_password'];

$sql = "SELECT * FROM auth WHERE email='$email'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    echo '<script > sessionStorage.setItem("db_status","403");history.back();</script>';
}else{
    $sql = "INSERT INTO auth(email, password, role_id) VALUES ('$email','$password',2)";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script > sessionStorage.setItem("db_status","200");history.back();</script>';
    } else {
        echo '<script > sessionStorage.setItem("db_status","400");history.back();</script>';
    }
}




$conn->close();
