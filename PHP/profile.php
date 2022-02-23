<?php

session_start();

require_once '../PHP/config.php';
$name = $_POST['profile_name'];
$email = $_POST['profile_email'];
$password = $_POST['profile_password'];
$address = $_POST['profile_address'];

if ($email != $_SESSION['login']['email']) {
    $sql = "SELECT email FROM auth WHERE email='" . $email . "'";
    if ($conn->query($sql)->num_rows > 0) {
        echo '<script > sessionStorage.setItem("db_status","403");</script>';
    } else {
        $image_path = ($_FILES["dp_path"]['name'] == "") ? $_SESSION['login']['image'] : update_dp();
        update_data($conn, $name, $email, $password, $image_path, $address);
        echo '<script>history.back()</script>';
    }
} else {
    $image_path = ($_FILES["dp_path"]['name'] == "") ? $_SESSION['login']['image'] : update_dp();
    update_data($conn, $name, $email, $password, $image_path, $address);
    echo '<script>history.back()</script>';
}

echo $conn->error;

function update_data($conn, $name, $email, $password, $image, $address)
{
    echo $conn->error;
    $sql = "UPDATE user SET name='" . $name . "', image='" . $image . "', address='" . $address . "' WHERE auth_id=" . $_SESSION['login']['auth_id'];
    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE auth SET email='" . $email . "',password='" . $password . "' WHERE auth_id=" . $_SESSION['login']['auth_id'];
        if ($conn->query($sql) === TRUE) {
            $sql = "SELECT auth.auth_id,email,password, role.name AS role , image, user.name, user.user_id, address FROM auth INNER JOIN role ON auth.role_id = role.role_id INNER JOIN user ON user.auth_id = auth.auth_id where email='$email' AND password='$password'";
            $result = $conn->query($sql);
            $_SESSION['login'] = $result->fetch_assoc();
            echo "<script>

            var user = {
                'status': true,
                'role': '" . $_SESSION['login']['role'] . "',
                'image': '" . $_SESSION['login']['image'] . "',
                'user_id': '" . $_SESSION['login']['user_id'] . "',
                'address': '" . $_SESSION['login']['address'] . "',
            };
                sessionStorage.setItem('login', JSON.stringify(user) );
            sessionStorage.setItem('db_status','200');
            </script>";
        } else {
            echo '<script>sessionStorage.setItem("db_status","400");</script>';
        }
    } else {
        echo '<script>sessionStorage.setItem("db_status","400");</script>';
    }
}

function update_dp()
{
    $target_dir  = "../Resource/dp/";
    $target_file = $target_dir . $_SESSION['login']['name'] . "_" . rand() . ".png";
    move_uploaded_file($_FILES["dp_path"]['tmp_name'], $target_file);
    return $target_file;
}






$conn->close();
