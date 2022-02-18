<?php
require_once '../PHP/config.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT role.name FROM auth inner JOIN role on auth.role_id = role.role_id where email='$email' AND password='$password'";
$result = $conn->query($sql);

if (!$result) echo "showError(' $conn->error')";

if ($result->num_rows > 0) {
    echo "<script > 
        var user = {'status': true,'role': '" . $result->fetch_assoc()['name']. "'};
        sessionStorage.setItem('login', JSON.stringify(user) );
        history.back();
     </script>";
} else {
    echo '<script > sessionStorage.setItem("db_status","404");history.back();</script>';
}
$conn->close();