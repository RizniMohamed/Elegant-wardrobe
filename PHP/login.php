<?php
session_start();
require_once '../PHP/config.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT auth.auth_id,email,password, role.name AS role , image, user.name FROM auth INNER JOIN role ON auth.role_id = role.role_id INNER JOIN user ON user.auth_id = auth.auth_id where email='$email' AND password='$password'";
$result = $conn->query($sql);

if (!$result) echo $conn->error;

if ($result->num_rows > 0) {
    $_SESSION['login'] = $result->fetch_assoc();
    echo "<script> 
        var user = {
            'status': true,
            'role': '" . $_SESSION['login']['role'] . "',
            'image': '" . $_SESSION['login']['image'] . "',
        };
        sessionStorage.setItem('login', JSON.stringify(user) );
        history.back();
     </script>";
} else {
    echo '<script > sessionStorage.setItem("db_status","404");history.back();</script>';
}
$conn->close();
