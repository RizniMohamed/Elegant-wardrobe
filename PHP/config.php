<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ew_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die ("<script>showError('$conn->connect_error')</script>");
}
